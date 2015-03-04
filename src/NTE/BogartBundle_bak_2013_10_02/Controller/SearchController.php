<?php

namespace NTE\BogartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction(Request $request, $page = 0)
    {
        $form = $this->createFormBuilder()
            ->add('search', 'text')
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->bind($request);

            if ($form->isValid()) {
                $maxResults = 10;
                $formPost = $request->request->get('form');
                
                $em = $this->getDoctrine()->getManager();
#                $criteria = array('nom' => $formPost['search']);
#                $orderby = array();
#                $entities = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findBy($criteria, $orderby, 10, $page*10);
#                $all_entities = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->createQueryBuilder( 'f' )
#                    ->where("f.nom LIKE '%".$formPost['search']."%'")
#                    ->getQuery()->getResult();
                
                $entities = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->createQueryBuilder( 'f' )
                    ->where("f.nom LIKE '%".$formPost['search']."%'")
#                    ->setFirstResult($page*10)
#                    ->setMaxResults($maxResults)
                    ->getQuery()->getResult();



                return $this->render(
                    "NTEBogartBundle:Search:search.html.twig",
                    array(
                        'entities' => $entities,
                        'page' => $page,
                        'request' => $formPost['search'],
                        'count' => count($entities),
                    )
                );
            }
        }

        
        return array('form' => $form->createView());
    }

    public function searchAction(Request $request, $page = 0)
    {
        $em = $this->getDoctrine()->getManager();
        $criteria = array('nom' => '%'.$request->request->get('form').'%');
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
