<?php

namespace NTE\BogartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class ParcoursController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $criteria = array('actif' => true);
        $orderby = array('numero' => 'ASC');
        $parcours = $em->getRepository('NTEBogartBundle:BotaniqueParcours')->findBy($criteria, $orderby);

        $text = null;
        $aide = null;

        $text = $em->getRepository('NTEBogartBundle:Pages')->findBy(array('type' => 'parcours', 'parcoursTypePage' => 'message page accueil'), array('id' => 'ASC'));

        $aide = $em->getRepository('NTEBogartBundle:Pages')->findBy(array('type' => 'parcours', 'parcoursTypePage' => 'aide'), array('id' => 'ASC'));

        return array('parcours' => $parcours, 'text' => $text, 'aide' => $aide);
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $parcours = $em->getRepository('NTEBogartBundle:BotaniqueParcours')->find($id);

        $aide = $em->getRepository('NTEBogartBundle:Pages')->findBy(array('type' => 'parcours', 'parcoursTypePage' => 'aide'), array('id' => 'ASC'));

        return $this->render(
            "NTEBogartBundle:Parcours:show.html.twig",
            array(
                'parcours' => $parcours,
                'aide' => $aide,
            )
        );
    }

    public function showTaxonAction(Request $request, $numero = null)
    {
        $em = $this->getDoctrine()->getManager();

        // cas du GET
        $tmp = $request->query->get('numero');
        if (empty($numero) && !empty($tmp)) {
            $numero = $tmp;
        }

        $parcoursposition = $em->getRepository('NTEBogartBundle:BotaniqueParcoursPosition')->findOneByNumero($numero);

        if ( null == $parcoursposition || !$parcoursposition->getParcours()->getActif() ) {
            return $this->render(
                "NTEBogartBundle:Parcours:unkown_taxon.html.twig"
            );
        }

        // prev / next
        $taxons = $parcoursposition->getParcours()->getParcoursPosition()->toArray();
        $current_taxon_index = array_search($parcoursposition, $taxons);
        $prev = ($current_taxon_index > 0) ? $taxons[$current_taxon_index - 1] : null;
        $next = ($current_taxon_index < count($taxons)) ? $taxons[$current_taxon_index + 1] : null;
        $start = $taxons[0];

        $aide = $em->getRepository('NTEBogartBundle:Pages')->findBy(array('type' => 'parcours', 'parcoursTypePage' => 'aide'), array('id' => 'ASC'));

        return $this->render(
            "NTEBogartBundle:Parcours:show_taxon.html.twig",
            array(
                'parcoursposition' => $parcoursposition,
                'prev' => $prev,
                'next' => $next,
                'start'=> $start,
                'aide' => $aide,
            )
        );
    }

    /**
     * @Template()
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $criteria = array('actif' => true);
        $orderby = array('numero' => 'ASC');
        $parcours = $em->getRepository('NTEBogartBundle:BotaniqueParcours')->findBy($criteria, $orderby);

        $aide = null;

        $aide = $em->getRepository('NTEBogartBundle:Pages')->findBy(array('type' => 'parcours', 'parcoursTypePage' => 'aide'), array('id' => 'ASC'));

        return array('parcours' => $parcours, 'text' => $text, 'aide' => $aide);
    }

    public function appcacheAction()
    {
        $em = $this->getDoctrine()->getManager();
        $criteria = array('actif' => true);
        $orderby = array('numero' => 'ASC');
        $parcours = $em->getRepository('NTEBogartBundle:BotaniqueParcours')->findBy($criteria, $orderby);

#        $files = "";

#        foreach ($parcours as $parcour) {
#            $files .= $this->generateUrl('parcours', array('_locale' => 'fr', 'numero' => $parcour->getId())) . "\n";
#            $files .= $this->generateUrl('parcours', array('_locale' => 'de', 'numero' => $parcour->getId())) . "\n";
#            foreach ($parcour->getParcoursPosition()->toArray() as $taxon) {
#                $files .= $this->generateUrl('parcours_taxon', array('_locale' => 'fr', 'numero' => $taxon->getTaxon())) . "\n";
#                $files .= $this->generateUrl('parcours_taxon', array('_locale' => 'de', 'numero' => $taxon->getTaxon())) . "\n";
#            }
#        }

        $response = $this->render(
            "NTEBogartBundle:Parcours:appcache.html.twig",
            array(
                'parcours' => $parcours,
            )
        );
        $response->headers->set('Content-Type', 'text/cache-manifest');
        return $response;
    }
}
