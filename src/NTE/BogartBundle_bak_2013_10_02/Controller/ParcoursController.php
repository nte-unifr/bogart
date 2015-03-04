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
        
        return array('parcours' => $parcours);
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $parcours = $em->getRepository('NTEBogartBundle:BotaniqueParcours')->find($id);

        return $this->render(
            "NTEBogartBundle:Parcours:show.html.twig",
            array(
                'parcours' => $parcours,
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
        // prev
        $prev_num = str_pad($numero - 1, 3, "0", STR_PAD_LEFT); // on conserve les zéros en début de chaîne (expl. 001)
        $prev = $em->getRepository('NTEBogartBundle:BotaniqueParcoursPosition')->findOneByNumero($prev_num);
        // next
        $next_num = str_pad($numero + 1, 3, "0", STR_PAD_LEFT); // on conserve les zéros en début de chaîne (expl. 001)
        $next = $em->getRepository('NTEBogartBundle:BotaniqueParcoursPosition')->findOneByNumero($next_num);
        

        return $this->render(
            "NTEBogartBundle:Parcours:show_taxon.html.twig",
            array(
                'parcoursposition' => $parcoursposition,
                'prev' => $prev,
                'next' => $next,
            )
        );
    }
}
