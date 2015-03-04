<?php

namespace NTE\BogartBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use NTE\BogartBundle\Entity\BotaniqueTaxon;

use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Exception\NotValidCurrentPageException;

/**
 * BotaniqueTaxon controller.
 *
 * @Route("/taxon")
 */
class BotaniqueTaxonController extends Controller
{
    /**
     * Lists all BotaniqueTaxon entities.
     *
     * @Route("/", name="taxon")
     * @Template()
     */
    public function indexAction($page = 1)
    {
        $em = $this->getDoctrine()->getManager();
        $max_page = 10; # nb de résultats par page

#        $entities = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findAll();
        $criteria = array('public' => true);
        $orderby = array();
#        $entities = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findBy($criteria, $orderby, 10, $page*10);
        $query = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->createQueryBuilder( 't' );

        $entities = $query
            ->where('t.public = true')
            ->orderBy('t.nom', 'ASC')
            ->setFirstResult( ($page - 1) * $max_page )
            ->setMaxResults( $max_page )
            ->getQuery()->getResult();

        # pager
        $adapter  = new DoctrineORMAdapter($query);
        $pager    = new PagerFanta($adapter);
        $pager->setMaxPerPage($max_page);
        try {
            $pager->setCurrentPage($page);
        } catch (NotValidCurrentPageException $e) {
            throw new NotFoundHttpException();
        }

        return array(
            'entities' => $entities,
            'page' => $page,
            'pager' => $pager,
        );
    }

    /**
     * Finds and displays a BotaniqueTaxon entity.
     *
     * @Route("/{id}/show", name="taxon_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->find($id);

        if (!$entity || !$entity->getPublic()) {
            throw $this->createNotFoundException('Ce taxon n\'existe pas ou n\'est pas disponible.');
        }

        return array(
            'entity'      => $entity,
        );
    }

}
