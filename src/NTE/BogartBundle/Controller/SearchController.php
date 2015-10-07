<?php

namespace NTE\BogartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Exception\NotValidCurrentPageException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SearchController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction(Request $request, $page = 1, $search = null)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $max_page = 10; # nb de résultats par page
        $saisons = array('janvier' => 'janvier', 'février' => 'février', 'mars' => 'mars', 'avril' => 'avril', 'mai' => 'mai', 'juin' => 'juin', 'juillet' => 'juillet',
                         'août' => 'août', 'septembre' => 'septembre', 'octobre' => 'octobre', 'novembre' => 'novembre', 'décembre' => 'décembre', );

        $floraison = null;
        $origine = null;
        $secteur = null;
        $categories = null;
        if ($search != null) {
            $q = explode('++', $search);
            $search = $q[0];
            $floraison = $q[1];
            $origine = $q[2];
            $secteur = $q[3];
            $categories = $q[4];
        }

        $form = $this->createFormBuilder()
            ->add('search', 'text', array('label' => 'Recherche', 'attr' => array('placeholder' => 'Mots clés'), 'required' => false))
            ->add('secteur', 'entity', array(
                                        'class' => 'NTEBogartBundle:BotaniqueEndroit',
                                        'property' => 'nom',
                                        'empty_value' => $this->get('translator')->trans('choose_sector'), 'required' => false))
            ->add('origine', 'text', array('attr' => array('placeholder' => 'expl: Alps, Europe, Asia, Eurosiberia, NW Africa, ...'), 'required' => false))
            ->add('floraison', 'choice', array('choices' => $saisons, 'empty_value' => $this->get('translator')->trans('choose_season'), 'required' => false))
            ->add('categories' ,'entity', array(
                                        'class' => 'NTEBogartBundle:BotaniqueCategorie',
                                        'property' => 'nom',
                                        'multiple' => true,
                                        'empty_value' => '-- Choisissez une/des catégorie·s --', 'label' => 'Catégories', 'required' => false))
            ->getForm();

        if ($request->isMethod('POST') || ($search || $floraison || $origine || $secteur || $categories)) {
            $request->isMethod('POST') ? $form->bind($request) : $form->bind($session->get('request'));
            $formPost = $request->request->get('form');

            $maxResults = 10;

            if ($request->isMethod('POST') && $form->isValid()) {
                $search = $formPost['search'];
                $floraison = $formPost['floraison'];
                $origine = $formPost['origine'];
                $secteur = $formPost['secteur']; //array_key_exists('secteur', $formPost)
                $categories = $formPost['categories'];
                $session->set('request', $request);
            } elseif ( null != $categories ) { // cas des catégories en param. GET
                $categories = explode(',', $categories);
            }

#                $criteria = array('nom' => $formPost['search']);
#                $orderby = array();
#                $entities = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findBy($criteria, $orderby, 10, $page*10);
#                $all_entities = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->createQueryBuilder( 'f' )
#                    ->where("f.nom LIKE '%".$formPost['search']."%'")
#                    ->getQuery()->getResult();

            $query = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->createQueryBuilder( 't' )
                ->where("t.public = true")
                ->andWhere("t.nom LIKE :search")
                      ->setParameter('search', '%'.$search.'%')
                ->andWhere("t.floraison LIKE :floraison")
                      ->setParameter('floraison', '%'.$floraison.'%')
                ->andWhere("t.origines LIKE :origine")
                      ->setParameter('origine', '%'.$origine.'%')
                ->addOrderBy('t.nom', 'ASC');

            if ($secteur != '') {
                $query->leftJoin('t.collections', 'c')
                      ->andWhere("c.secteur = :secteur")
                          ->setParameter('secteur', $secteur);
            }

            if ($categories != '') {
                $query->leftJoin('t.categories', 'cat')
                      ->andWhere("cat.id IN (:categories)")
                          ->setParameter('categories', implode(', ', $categories));
            }

            $all_entities = $query->getQuery()->getResult();
            $entities = $query
                ->setFirstResult( ($page - 1) * $max_page )
                ->setMaxResults( $max_page )
#                    ->setFirstResult($page*10)
#                    ->setMaxResults($maxResults)
                ->getQuery()->getResult();

#                $session->set('recherche_dql', $query->getQuery()->getDql());
#                $session->set('recherche_params', $query->getQuery()->getParameters());
#echo $query->getQuery()->getDql();
#echo "<br /><br />";
#echo var_dump($query->getQuery()->getParameters());

            # pager
            $adapter  = new DoctrineORMAdapter($query);
            $pager    = new PagerFanta($adapter);
            $pager->setMaxPerPage($max_page);
            try {
                $pager->setCurrentPage($page);
            } catch (NotValidCurrentPageException $e) {
                throw new NotFoundHttpException();
            }

            return $this->render(
                "NTEBogartBundle:Search:search.html.twig",
                array(
                    'form' => $form->createView(),
                    'entities' => $entities,
                    'page' => $page,
                    'request' => $formPost['search'],
                    'count' => count($all_entities),
                    'pager' => $pager,
                    'search' => $search,
                    'floraison' => $floraison,
                    'origine' => $origine,
                    'secteur' => $secteur,
                    'categories' => $categories,
                )
            );
        }


        return array('form' => $form->createView(),
                     'search' => $search,
                     'floraison' => $floraison,
                     'origine' => $origine,
                     'secteur' => $secteur,
                     'categories' => $categories,
                     );
    }

    public function searchAction(Request $request, $page = 0)
    {
        $em = $this->getDoctrine()->getManager();
        $criteria = array('nom' => '%'.$request->request->get('form').'%', 'public' => true);
        $orderby = array();
        $entities = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findBy($criteria, $orderby, 10, $page*10);

        return $this->render(
            "NTEBogartBundle:Search:search.html.twig",
            array(
                'entities' => $entities,
                'page' => $page,
                'request' => $request->request->get('form'),
            )
        );
    }
}
