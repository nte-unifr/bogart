<?php

namespace NTE\BogartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('NTEBogartBundle:Pages')->findBy(array('type' => 'publique'), array('id' => 'ASC'));
        
        return array('page' => $page);
    }

    /**
     * @Route("/_rename_taxons")
     * @Template()
     */
    public function renameTaxonsAction( $start = 0 )
    {

        # à commenter pour exécuter la migration.
        return new Response('<html><body><h1>NOP!</h1></body></html>');
        exit();

		ini_set('max_execution_time', "3600"); // (1 hour) This script can take very long to execute!!!
		ini_set('memory_limit','8192M'); // And could also need a lot of memory!!!
		
        $em = $this->getDoctrine()->getManager();
#        $taxons = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findById(6874);
#        $taxons = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findAll();

        $total_taxons = count($em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findAll());
        print_r( "START ( $total_taxons )<br />");
        $step = 500;
        for ( $n = $start+$step; $n < $total_taxons + $step; $n = $n + $step ) {
            print_r( "************************************ n  = " . $n . ", limit = n = " . $n . ", offset = (n-step) = " . ($n - $step) . " ************************************<br />");
            $taxons = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findBy( array(), array('id' => 'asc'), $step, $n - $step );
            foreach ($taxons as $taxon) {
                $taxon->setNom( $taxon->getNom()." [tmp]" );
                print_r( $taxon->getId() . "<br />");
#                print_r( $taxon->getNom() . "<br />");
#                print_r( $taxon->getGenreInter() . "<br />");
                $em->persist($taxon);
#                print_r( $taxon->getNom() . "<br />");
            }
            $em->flush();
        }
        print_r( "END<br />");

        return new Response('<html><body><h1>Renomage des Taxons OK!</h1></body></html>');
    }

    /**
     * @Route("/_rename_famille")
     * @Template()
     */
    // passe le nom des famille en minuscule
    public function renameFamillesAction()
    {
        # à commenter pour exécuter la migration.
        return new Response('<html><body><h1>NOP!</h1></body></html>');
        exit();

        $em = $this->getDoctrine()->getManager();
        $familles = $em->getRepository('NTEBogartBundle:BotaniqueFamille')->findAll();
        foreach ($familles as $famille) {
            $famille->setNom( ucfirst(strtolower($famille->getNom())) );
            print_r( $famille->getNom() . "<br />");
#            print_r( $taxon->getGenreInter() . "<br />");
            $em->persist($famille);
#            print_r( $taxon->getNom() . "<br />");
        }
        $em->flush();
#            print_r( $taxon->getNom() . "<br />");
        return new Response('<html><body><h1>Renomage des nom des Familles OK!</h1></body></html>');
    }

    /**
     * @Route("/_rename_taxons_2")
     * @Template()
     */
    // supprime l'espace en début du nom des Taxons (pose pb pour trier les taxons par noms!)
    public function renameTaxons2Action( $start = 0 )
    {
        # à commenter pour exécuter la migration.
        return new Response('<html><body><h1>NOP!</h1></body></html>');
        exit();

		ini_set('max_execution_time', "3600"); // (1 hour) This script can take very long to execute!!!
		ini_set('memory_limit','8192M'); // And could also need a lot of memory!!!

        print_r( "<h3>Rename Taxons 2</h3><br />");
        $em = $this->getDoctrine()->getManager();

        $total_taxons = count($em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findAll());
        print_r( "START ( $total_taxons )<br />");
        $step = 500;
        for ( $n = $start+$step; $n < $total_taxons + $step; $n = $n + $step ) {
            print_r( "************************************ n  = " . $n . ", limit = n = " . $n . ", offset = (n-step) = " . ($n - $step) . " ************************************<br />");
            $taxons = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findBy( array(), array('id' => 'asc'), $step, $n - $step );
            foreach ($taxons as $taxon) {
                $taxon->setNom( ltrim($taxon->getNom()) );
                print_r( "Nom=" . $taxon->getNom() . "<br />");
                $em->persist($taxon);
            }
            $em->flush();
        }
        print_r( "END<br />");

#            print_r( $taxon->getNom() . "<br />");
        return new Response('<html><body><h1>Renomage des nom des Taxons OK!</h1></body></html>');
    }
}
