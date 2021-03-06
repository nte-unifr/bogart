<?php

namespace NTE\BogartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use NTE\BogartBundle\Entity\BotaniqueTaxon;
use NTE\BogartBundle\Entity\CroissanceTaxon;
use NTE\BogartBundle\Entity\BotaniqueCroissance;

class ConvertCroissanceTaxonController extends Controller
{

	public function indexAction()
    {	
		echo "<body>EXIT sans rien faire!!!<br />";
        exit();
		ini_set('max_execution_time', "3600"); // (1 hour) This script can take very long to execute!!!
        ini_set('memory_limit','8192M'); // And could also need a lot of memory!!!
		
        $em = $this->getDoctrine()->getManager();
#        $taxons = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findAll();
		$query = $em->createQuery(
			'SELECT t
			FROM NTEBogartBundle:BotaniqueTaxon t
			WHERE t.floraison != \'\' AND t.id >= :id'
		)->setParameter('id', '2872');
		
		$taxons = $query->getResult();
		
        $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
        foreach($taxons as $taxon) {
            if ($taxon->getVieilleFloraison() != '') {
                $this->debug($taxon->getFloraison());
                $this->debug(explode(',', $taxon->getFloraison()));
                $tableau = explode(',', $taxon->getVieilleFloraison());
                $t2 = "a:".count($tableau).":{";
                $i = 0;
                foreach($tableau as $t) {
                    echo "---- $t, ".$taxon->getId();
                    $this->debug(intval($t));
                    if ($t != '') {
                        $t2 .= "i:".$i.";s:".strlen($mois[intval($t)-1]).":\"".$mois[intval($t)-1]."\";";
                        $i++;
                    }
                }
                $t2 .= "}";
                $this->debug($t2);
                $taxon->setFloraison($t2);
                $em->persist($taxon);
                $em->flush();
            }
        }
#        exit();
        return new Response('Conversion terminée!');
    }

	public function croissancesAction()
    {	
        echo "<body>START  ******************************<br />";
		ini_set('max_execution_time', "3600"); // (1 hour) This script can take very long to execute!!!
		
        $em = $this->getDoctrine()->getManager();
        #$taxons = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->findAll();
        # la requête si dessous car pb avec convertion Array floraison... 
		$query = $em->createQuery(
			'SELECT t.vieilleCroissance, t.id
			FROM NTEBogartBundle:BotaniqueTaxon t'
		);
		
		$taxons = $query->getResult();

        foreach($taxons as $taxon) {
                
#			echo $taxon['id']."<br />";
			
			$t = $em->getRepository('NTEBogartBundle:BotaniqueTaxon')->find($taxon['id']);
			
			$croissances = $taxon['vieilleCroissance'];
			if ($croissances != null) {
				echo "... ".$taxon['id']."<br />";
				$croissances = explode(',', $croissances);
				foreach ($croissances as $croissance) {
				    if ($croissance != ""){
			            $c = $em->getRepository('NTEBogartBundle:BotaniqueCroissance')->findOneByNom(trim($croissance));
    #					echo "... --- ".$croissance."<br />";
    #					echo "... --- .. ".$c."<br />";
					    $t->addCroissance($c);
					    $em->persist($t);
					}
				}
			}
		}
		$em->flush();
		
        echo "<body>END!  ******************************<br />";
        exit();
        return new Response('Conversion Croissances (Taxon) terminée!');
    }

	public function ipenAction()
    {	
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
			'UPDATE NTEBogartBundle:BotaniqueAccession t
			 INNER JOIN NTEBogartBundle:BotaniqueIPEN i
					 ON t.id_ipen = i.id
			 SET t.ipen_code = t.vieux_ipen_code_jardin, t.ipen_numero = t.vieux_ipen_numero, t.ipen_condition2 = t.vieux_ipen_condition, t.ipen_id_pays = i.id_pays
			 WHERE 1'
		);
		$accessions = $query->getResult();
        return new Response('Conversion IPEN terminée!');
    }
	
	private function debug($mixed) {
		echo "<pre>";
		print_r($mixed);
		echo "</pre>";	
	}

}
