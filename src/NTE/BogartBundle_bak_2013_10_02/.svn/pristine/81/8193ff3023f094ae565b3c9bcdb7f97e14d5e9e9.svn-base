<?php

namespace NTE\BogartBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use NTE\BogartBundle\Entity\BotaniqueTaxon;

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
    public function indexAction($page = 0)
    {
        $em = $this->getDoctrine()->getManager();

#        $entities = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findAll();
        $criteria = array('public' => true);
        $orderby = array();
        $entities = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findBy($criteria, $orderby, 10, $page*10);

        return array(
            'entities' => $entities,
            'page' => $page,
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

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BotaniqueTaxon entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }

}
