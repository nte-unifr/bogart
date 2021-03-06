<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use NTE\BogartBundle\Entity\BotaniqueAccession;

/**
 * BotaniqueCollection
 *
 * @ORM\Table(name="botanique_collection")
 * @ORM\Entity(repositoryClass="BotaniqueCollectionRepository")
 */
class BotaniqueCollection
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="filemaker_num", type="integer", nullable=true)
     */
    private $filemakerNum;

    /**
     * @var string
     *
     * @ORM\Column(name="vieux_nom", type="string", length=255, nullable=true)
     */
    private $vieuxNom;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="string", nullable=true)
     */
    private $annee;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="string", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="roseraie", type="string", length=255, nullable=true)
     */
    private $roseraie;

    /**
     * @var string
     *
     * @ORM\Column(name="id_plante_aqua", type="string", length=255, nullable=true)
     */
    private $idPlanteAqua;

    /**
     * @var string
     *
     * @ORM\Column(name="medicinal", type="string", length=255, nullable=true)
     */
    private $medicinal;

    /**
     * @var string
     *
     * @ORM\Column(name="geographyte_region", type="string", length=255, nullable=true)
     */
    private $geographyteRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="geographyte_id", type="string", length=255, nullable=true)
     */
    private $geographyteId;

    /**
     * @var string
     *
     * @ORM\Column(name="inventaire", type="string", length=255, nullable=true)
     */
    private $inventaire;

    /**
     * @var string
     *
     * @ORM\Column(name="inventaire_controle", type="string", length=255, nullable=true)
     */
    private $inventaireControle;

    /**
     * @var string
     *
     * @ORM\Column(name="etiquette_controle", type="string", length=255, nullable=true)
     */
    private $etiquetteControle;

    /**
     * @var string
     *
     * @ORM\Column(name="etiquette_type", type="string", length=255, nullable=true)
     */
    private $etiquetteType;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="string", length=255, nullable=true)
     */
    private $observations;

    /**
     * @var string
     *
     * @ORM\Column(name="intervention", type="string", length=255, nullable=true)
     */
    private $intervention;

    /**
     * @var string
     *
     * @ORM\Column(name="graine_culture", type="string", length=255, nullable=true)
     */
    private $graineCulture;

    /**
     * @var string
     *
     * @ORM\Column(name="commande_graine", type="string", length=255, nullable=true)
     */
    private $commandeGraine;

    /**
     * @var string
     *
     * @ORM\Column(name="etiquette_sachet", type="string", length=255, nullable=true)
     */
    private $etiquetteSachet;

    /**
     * @var string
     *
     * @ORM\Column(name="recolte_nature1", type="string", length=255, nullable=true)
     */
    private $recolteNature1;

    /**
     * @var string
     *
     * @ORM\Column(name="recolte_nature2", type="string", length=255, nullable=true)
     */
    private $recolteNature2;

    /**
     * @var string
     *
     * @ORM\Column(name="recolte_nature3", type="string", length=255, nullable=true)
     */
    private $recolteNature3;

    /**
     * @var string
     *
     * @ORM\Column(name="recolte_jardin1", type="string", length=255, nullable=true)
     */
    private $recolteJardin1;

    /**
     * @var string
     *
     * @ORM\Column(name="recolte_jardin2", type="string", length=255, nullable=true)
     */
    private $recolteJardin2;

    /**
     * @var string
     *
     * @ORM\Column(name="controle", type="string", length=255, nullable=true)
     */
    private $controle;

    /**
     * @var string
     *
     * @ORM\Column(name="commande_etiquettes", type="string", length=255, nullable=true)
     */
    private $commandeEtiquettes;

    /**
     * @var string
     *
     * @ORM\Column(name="index_seminum", type="string", length=255, nullable=true)
     */
    private $indexSeminum;

    /**
     * @var string
     *
     * @ORM\Column(name="index_seminum_num", type="string", length=255, nullable=true)
     */
    private $indexSeminumNum;

    /**
     * @var string
     *
     * @ORM\Column(name="is_provenance", type="string", length=255, nullable=true)
     */
    private $isProvenance;

    /**
     * @var string
     *
     * @ORM\Column(name="is_recolte", type="string", length=255, nullable=true)
     */
    private $isRecolte;

    /**
     * @var string
     *
     * @ORM\Column(name="num_provenance", type="string", length=255, nullable=true)
     */
    private $numProvenance;

    /**
     * @var integer
     *
     * @ORM\Column(name="plantation", type="string", nullable=true)
     */
    private $plantation;

    /**
     * @var string
     *
     * @ORM\Column(name="fournisseur", type="string", nullable=true)
     */
    private $fournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="provenance", type="string", nullable=true)
     */
    private $provenance;

    /**
     * @var string
     *
     * @ORM\Column(name="type_provenance", type="string", nullable=true)
     */
    private $typeDeProvenance;

    /**
     * @var string
     *
     * @ORM\Column(name="ipen", type="string", nullable=true)
     */
    private $ipen;

    /**
     * @var \BotaniqueTaxon
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueTaxon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_taxon", referencedColumnName="id")
     * })
     */
    private $idTaxon;

    /**
     * @var \BotaniqueEndroit
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueEndroit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="secteur", referencedColumnName="id")
     * })
     */
    private $secteur;

    /**
     * @var string
     *
     * @ORM\Column(name="determination", type="string", nullable=true)
     */
    private $determination;

    /**
     * @var string
     *
     * @ORM\Column(name="multiplication", type="string", length=255, nullable=true)
     */
    private $multiplication;

    /**
     * @var string
     *
     * @ORM\Column(name="hivernage", type="string", length=255, nullable=true)
     */
    private $hivernage;

    /**
     * @var string
     *
     * @ORM\Column(name="protection_hiv1", type="string", length=255, nullable=true)
     */
    private $protectionHiv1;

    /**
     * @var string
     *
     * @ORM\Column(name="protection_hiv2", type="string", length=255, nullable=true)
     */
    private $protectionHiv2;

    /**
     * @var string
     *
     * @ORM\Column(name="idTaxon_famille1", type="string", length=255, nullable=true)
     */
    private $taxonFamille1;

    /**
     * @var string
     *
     * @ORM\Column(name="idTaxon_controle", type="string", length=255, nullable=true)
     */
    private $taxonControle;

    /**
     * @var string
     *
     * @ORM\Column(name="idTaxon_biblio", type="string", length=255, nullable=true)
     */
    private $taxonBiblio;

    /**
     * @var string
     *
     * @ORM\Column(name="periode_de_semis", type="string", length=255, nullable=true)
     */
    private $periodeDeSemis;


    public function __toString()
	{
	    return (string)$this->id;
	}



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set filemakerNum
     *
     * @param integer $filemakerNum
     * @return BotaniqueCollection
     */
    public function setFilemakerNum($filemakerNum)
    {
        $this->filemakerNum = $filemakerNum;

        return $this;
    }

    /**
     * Get filemakerNum
     *
     * @return integer
     */
    public function getFilemakerNum()
    {
        return $this->filemakerNum;
    }

    /**
     * Set vieuxNom
     *
     * @param string $vieuxNom
     * @return BotaniqueCollection
     */
    public function setVieuxNom($vieuxNom)
    {
        $this->vieuxNom = $vieuxNom;

        return $this;
    }

    /**
     * Get vieuxNom
     *
     * @return string
     */
    public function getVieuxNom()
    {
        return $this->vieuxNom;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return BotaniqueCollection
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return BotaniqueCollection
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set vieuxProvenance
     *
     * @param string $vieuxProvenance
     * @return BotaniqueCollection
     */
    public function setVieuxProvenance($vieuxProvenance)
    {
        $this->vieuxProvenance = $vieuxProvenance;

        return $this;
    }

    /**
     * Get vieuxProvenance
     *
     * @return string
     */
    public function getVieuxProvenance()
    {
        return $this->vieuxProvenance;
    }

    /**
     * Set roseraie
     *
     * @param string $roseraie
     * @return BotaniqueCollection
     */
    public function setRoseraie($roseraie)
    {
        $this->roseraie = $roseraie;

        return $this;
    }

    /**
     * Get roseraie
     *
     * @return string
     */
    public function getRoseraie()
    {
        return $this->roseraie;
    }

    /**
     * Set idPlanteAqua
     *
     * @param string $idPlanteAqua
     * @return BotaniqueCollection
     */
    public function setIdPlanteAqua($idPlanteAqua)
    {
        $this->idPlanteAqua = $idPlanteAqua;

        return $this;
    }

    /**
     * Get idPlanteAqua
     *
     * @return string
     */
    public function getIdPlanteAqua()
    {
        return $this->idPlanteAqua;
    }

    /**
     * Set medicinal
     *
     * @param string $medicinal
     * @return BotaniqueCollection
     */
    public function setMedicinal($medicinal)
    {
        $this->medicinal = $medicinal;

        return $this;
    }

    /**
     * Get medicinal
     *
     * @return string
     */
    public function getMedicinal()
    {
        return $this->medicinal;
    }

    /**
     * Set geographyteRegion
     *
     * @param string $geographyteRegion
     * @return BotaniqueCollection
     */
    public function setGeographyteRegion($geographyteRegion)
    {
        $this->geographyteRegion = $geographyteRegion;

        return $this;
    }

    /**
     * Get geographyteRegion
     *
     * @return string
     */
    public function getGeographyteRegion()
    {
        return $this->geographyteRegion;
    }

    /**
     * Set geographyteId
     *
     * @param string $geographyteId
     * @return BotaniqueCollection
     */
    public function setGeographyteId($geographyteId)
    {
        $this->geographyteId = $geographyteId;

        return $this;
    }

    /**
     * Get geographyteId
     *
     * @return string
     */
    public function getGeographyteId()
    {
        return $this->geographyteId;
    }

    /**
     * Set inventaire
     *
     * @param string $inventaire
     * @return BotaniqueCollection
     */
    public function setInventaire($inventaire)
    {
        $this->inventaire = $inventaire;

        return $this;
    }

    /**
     * Get inventaire
     *
     * @return string
     */
    public function getInventaire()
    {
        return $this->inventaire;
    }

    /**
     * Set etiquetteControle
     *
     * @param string $etiquetteControle
     * @return BotaniqueCollection
     */
    public function setEtiquetteControle($etiquetteControle)
    {
        $this->etiquetteControle = $etiquetteControle;

        return $this;
    }

    /**
     * Get etiquetteControle
     *
     * @return string
     */
    public function getEtiquetteControle()
    {
        return $this->etiquetteControle;
    }

    /**
     * Set etiquetteType
     *
     * @param string $etiquetteType
     * @return BotaniqueCollection
     */
    public function setEtiquetteType($etiquetteType)
    {
        $this->etiquetteType = $etiquetteType;

        return $this;
    }

    /**
     * Get etiquetteType
     *
     * @return string
     */
    public function getEtiquetteType()
    {
        return $this->etiquetteType;
    }

    /**
     * Set observations
     *
     * @param string $observations
     * @return BotaniqueCollection
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * Get observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set intervention
     *
     * @param string $intervention
     * @return BotaniqueCollection
     */
    public function setIntervention($intervention)
    {
        $this->intervention = $intervention;

        return $this;
    }

    /**
     * Get intervention
     *
     * @return string
     */
    public function getIntervention()
    {
        return $this->intervention;
    }

    /**
     * Set graineCulture
     *
     * @param string $graineCulture
     * @return BotaniqueCollection
     */
    public function setGraineCulture($graineCulture)
    {
        $this->graineCulture = $graineCulture;

        return $this;
    }

    /**
     * Get graineCulture
     *
     * @return string
     */
    public function getGraineCulture()
    {
        return $this->graineCulture;
    }

    /**
     * Set commandeGraine
     *
     * @param string $commandeGraine
     * @return BotaniqueCollection
     */
    public function setCommandeGraine($commandeGraine)
    {
        $this->commandeGraine = $commandeGraine;

        return $this;
    }

    /**
     * Get commandeGraine
     *
     * @return string
     */
    public function getCommandeGraine()
    {
        return $this->commandeGraine;
    }

    /**
     * Set etiquetteSachet
     *
     * @param string $etiquetteSachet
     * @return BotaniqueCollection
     */
    public function setEtiquetteSachet($etiquetteSachet)
    {
        $this->etiquetteSachet = $etiquetteSachet;

        return $this;
    }

    /**
     * Get etiquetteSachet
     *
     * @return string
     */
    public function getEtiquetteSachet()
    {
        return $this->etiquetteSachet;
    }

    /**
     * Set recolteNature1
     *
     * @param string $recolteNature1
     * @return BotaniqueCollection
     */
    public function setRecolteNature1($recolteNature1)
    {
        $this->recolteNature1 = $recolteNature1;

        return $this;
    }

    /**
     * Get recolteNature1
     *
     * @return string
     */
    public function getRecolteNature1()
    {
        return $this->recolteNature1;
    }

    /**
     * Set recolteNature2
     *
     * @param string $recolteNature2
     * @return BotaniqueCollection
     */
    public function setRecolteNature2($recolteNature2)
    {
        $this->recolteNature2 = $recolteNature2;

        return $this;
    }

    /**
     * Get recolteNature2
     *
     * @return string
     */
    public function getRecolteNature2()
    {
        return $this->recolteNature2;
    }

    /**
     * Set recolteNature3
     *
     * @param string $recolteNature3
     * @return BotaniqueCollection
     */
    public function setRecolteNature3($recolteNature3)
    {
        $this->recolteNature3 = $recolteNature3;

        return $this;
    }

    /**
     * Get recolteNature3
     *
     * @return string
     */
    public function getRecolteNature3()
    {
        return $this->recolteNature3;
    }

    /**
     * Set recolteJardin1
     *
     * @param string $recolteJardin1
     * @return BotaniqueCollection
     */
    public function setRecolteJardin1($recolteJardin1)
    {
        $this->recolteJardin1 = $recolteJardin1;

        return $this;
    }

    /**
     * Get recolteJardin1
     *
     * @return string
     */
    public function getRecolteJardin1()
    {
        return $this->recolteJardin1;
    }

    /**
     * Set recolteJardin2
     *
     * @param string $recolteJardin2
     * @return BotaniqueCollection
     */
    public function setRecolteJardin2($recolteJardin2)
    {
        $this->recolteJardin2 = $recolteJardin2;

        return $this;
    }

    /**
     * Get recolteJardin2
     *
     * @return string
     */
    public function getRecolteJardin2()
    {
        return $this->recolteJardin2;
    }

    /**
     * Set controle
     *
     * @param string $controle
     * @return BotaniqueCollection
     */
    public function setControle($controle)
    {
        $this->controle = $controle;

        return $this;
    }

    /**
     * Get controle
     *
     * @return string
     */
    public function getControle()
    {
        return $this->controle;
    }

    /**
     * Set indexSeminum
     *
     * @param string $indexSeminum
     * @return BotaniqueCollection
     */
    public function setIndexSeminum($indexSeminum)
    {
        $this->indexSeminum = $indexSeminum;

        return $this;
    }

    /**
     * Get indexSeminum
     *
     * @return string
     */
    public function getIndexSeminum()
    {
        return $this->indexSeminum;
    }

    /**
     * Set indexSeminumNum
     *
     * @param string $indexSeminumNum
     * @return BotaniqueCollection
     */
    public function setIndexSeminumNum($indexSeminumNum)
    {
        $this->indexSeminumNum = $indexSeminumNum;

        return $this;
    }

    /**
     * Get indexSeminumNum
     *
     * @return string
     */
    public function getIndexSeminumNum()
    {
        return $this->indexSeminumNum;
    }

    /**
     * Set isProvenance
     *
     * @param string $isProvenance
     * @return BotaniqueCollection
     */
    public function setIsProvenance($isProvenance)
    {
        $this->isProvenance = $isProvenance;

        return $this;
    }

    /**
     * Get isProvenance
     *
     * @return string
     */
    public function getIsProvenance()
    {
        return $this->isProvenance;
    }

    /**
     * Set isRecolte
     *
     * @param string $isRecolte
     * @return BotaniqueCollection
     */
    public function setIsRecolte($isRecolte)
    {
        $this->isRecolte = $isRecolte;

        return $this;
    }

    /**
     * Get isRecolte
     *
     * @return string
     */
    public function getIsRecolte()
    {
        return $this->isRecolte;
    }

    /**
     * Set numProvenance
     *
     * @param string $numProvenance
     * @return BotaniqueCollection
     */
    public function setNumProvenance($numProvenance)
    {
        $this->numProvenance = $numProvenance;

        return $this;
    }

    /**
     * Get numProvenance
     *
     * @return string
     */
    public function getNumProvenance()
    {
        return $this->numProvenance;
    }

    /**
     * Set plantation
     *
     * @param integer $plantation
     * @return BotaniqueCollection
     */
    public function setPlantation($plantation)
    {
        $this->plantation = $plantation;

        return $this;
    }

    /**
     * Get plantation
     *
     * @return integer
     */
    public function getPlantation()
    {
        return $this->plantation;
    }

    /**
     * Set idTaxon
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueTaxon $idTaxon
     * @return BotaniqueCollection
     */
    public function setIdTaxon(\NTE\BogartBundle\Entity\BotaniqueTaxon $idTaxon = null)
    {
        $this->idTaxon = $idTaxon;

        return $this;
    }

    /**
     * Get idTaxon
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueTaxon
     */
    public function getIdTaxon()
    {
        return $this->idTaxon;
    }

    /**
     * Set secteur
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueEndroit $secteur
     * @return BotaniqueCollection
     */
    public function setSecteur(\NTE\BogartBundle\Entity\BotaniqueEndroit $secteur = null)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueEndroit
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set fournisseur
     *
     * @param string $fournisseur
     * @return BotaniqueCollection
     */
    public function setFournisseur($fournisseur)
    {
#        $this->fournisseur = $fournisseur;
#
#        return $this;
        return null;
    }

    /**
     * Get fournisseur
     *
     * @return string
     */
    public function getFournisseur()
    {
##        return $this->fournisseur;
#        if ($this->idTaxon) {
#            foreach($this->idTaxon->getAccessions() as $accession) {
#                if ($accession->getAnnee() == $this->annee && $accession->getNumero() == $this->numero) {
#                    return $accession->getIdFournisseur()."";
#                }
#            }
#        }
#        return null;

		if ($this->annee && $this->numero) {
			global $kernel;
			if ( 'AppCache' == get_class($kernel) )
			{
			   $kernel = $kernel->getKernel();
			}
			$em = $kernel->getContainer()->get( 'doctrine.orm.entity_manager' );
			$accession = $em->getRepository('NTEBogartBundle:BotaniqueAccession')->findOneBy(array('annee' => $this->annee, 'numero' => $this->numero));
			$result = $accession ? $accession->getIdFournisseur() : null;
			return (string)$result;
		}
        return null;
    }

    /**
     * Set provenance
     *
     * @param string $provenance
     * @return BotaniqueCollection
     */
    public function setProvenance($provenance)
    {
#        $this->provenance = $provenance;
#
#        return $this;
        return null;
    }

    /**
     * Get provenance
     *
     * @return string
     */
    public function getProvenance()
    {
		if ($this->annee && $this->numero) {
			global $kernel;
			if ( 'AppCache' == get_class($kernel) )
			{
			   $kernel = $kernel->getKernel();
			}
			$em = $kernel->getContainer()->get( 'doctrine.orm.entity_manager' );
			$accession = $em->getRepository('NTEBogartBundle:BotaniqueAccession')->findOneBy(array('annee' => $this->annee, 'numero' => $this->numero));
			$result = $accession ? $accession->getIdPays() . ", " . $accession->getLocation() . ", " . $accession->getAltitude() . " " . $accession->getAltitudeM() : null;
			return (string)$result;
		}

##        return $this->provenance;
#        if ($this->idTaxon) {
#            foreach($this->idTaxon->getAccessions() as $accession) {
#                if ($accession->getAnnee() == $this->annee && $accession->getNumero() == $this->numero) {
#                    return $accession->getProvenance()."";
#                }
#            }
#        }
        return null;
    }

    /**
     * Set ipen
     *
     * @param string $ipen
     * @return BotaniqueCollection
     */
    public function setIpen($ipen)
    {
#        $this->ipen = $ipen;
#
#        return $this;
        return null;
    }

    /**
     * Get ipen
     *
     * @return string
     */
    public function getIpen()
    {
#        return $this->ipen;
#        if ($this->idTaxon) {
#            foreach($this->idTaxon->getAccessions() as $accession) {
#                if ($accession->getAnnee() == $this->annee && $accession->getNumero() == $this->numero) {
#                    return $accession->getIdIpen()."";
#                }
#            }
#        }
#        return null;

		if ($this->annee && $this->numero) {
			global $kernel;
			if ( 'AppCache' == get_class($kernel) )
			{
			   $kernel = $kernel->getKernel();
			}
			$em = $kernel->getContainer()->get( 'doctrine.orm.entity_manager' );
			$accession = $em->getRepository('NTEBogartBundle:BotaniqueAccession')->findOneBy(array('annee' => $this->annee, 'numero' => $this->numero));
			$result = $accession ? $accession->getIpenNom() : null;
			return (string)$result;
		}
		return null;
    }

    /**
     * Set determination
     *
     * @param string $determination
     * @return BotaniqueCollection
     */
    public function setDetermination($determination)
    {
        $this->determination = $determination;

        return $this;
    }

    /**
     * Get determination
     *
     * @return string
     */
    public function getDetermination()
    {
		if ($this->annee && $this->numero) {
			global $kernel;
			if ( 'AppCache' == get_class($kernel) )
			{
			   $kernel = $kernel->getKernel();
			}
			$em = $kernel->getContainer()->get( 'doctrine.orm.entity_manager' );
			$accession = $em->getRepository('NTEBogartBundle:BotaniqueAccession')->findOneBy(array('annee' => $this->annee, 'numero' => $this->numero));
			$result = $accession ? $accession->getVerification() : null;
			return (string)$result;
		}
		return null;
    }

    /**
     * Set multiplication
     *
     * @param string $multiplication
     * @return BotaniqueCollection
     */
    public function setMultiplication($multiplication)
    {
        $this->multiplication = $multiplication;

        return $this;
    }

    /**
     * Get multiplication
     *
     * @return string
     */
    public function getMultiplication()
    {
        return $this->multiplication;
    }

    /**
     * Set hivernage
     *
     * @param string $hivernage
     * @return BotaniqueCollection
     */
    public function setHivernage($hivernage)
    {
        $this->hivernage = $hivernage;

        return $this;
    }

    /**
     * Get hivernage
     *
     * @return string
     */
    public function getHivernage()
    {
        return $this->hivernage;
    }

    /**
     * Set protectionHiv1
     *
     * @param string $protectionHiv1
     * @return BotaniqueCollection
     */
    public function setProtectionHiv1($protectionHiv1)
    {
        $this->protectionHiv1 = $protectionHiv1;

        return $this;
    }

    /**
     * Get protectionHiv1
     *
     * @return string
     */
    public function getProtectionHiv1()
    {
        return $this->protectionHiv1;
    }

    /**
     * Set protectionHiv2
     *
     * @param string $protectionHiv2
     * @return BotaniqueCollection
     */
    public function setProtectionHiv2($protectionHiv2)
    {
        $this->protectionHiv2 = $protectionHiv2;

        return $this;
    }

    /**
     * Get protectionHiv2
     *
     * @return string
     */
    public function getProtectionHiv2()
    {
        return $this->protectionHiv2;
    }

    /**
     * Set inventaireControle
     *
     * @param string $inventaireControle
     * @return BotaniqueCollection
     */
    public function setInventaireControle($inventaireControle)
    {
        $this->inventaireControle = $inventaireControle;

        return $this;
    }

    /**
     * Get inventaireControle
     *
     * @return string
     */
    public function getInventaireControle()
    {
        return $this->inventaireControle;
    }

    /**
     * Set idTaxon_famille1
     *
     * @param string $idTaxonFamille1
     * @return BotaniqueCollection
     */
    public function setIdTaxonFamille1($idTaxonFamille1)
    {
        $this->idTaxon_famille1 = $idTaxonFamille1;

        return $this;
    }

    /**
     * Get idTaxon_famille1
     *
     * @return string
     */
    public function getIdTaxonFamille1()
    {
		if ($this->idTaxon) {
			return (string)$this->getIdTaxon()->getFamille1();
		}
		return null;
    }

    /**
     * Set idTaxon_controle
     *
     * @param string $idTaxonControle
     * @return BotaniqueCollection
     */
    public function setIdTaxonControle($idTaxonControle)
    {
        $this->idTaxon_controle = $idTaxonControle;

        return $this;
    }

    /**
     * Get idTaxon_controle
     *
     * @return string
     */
    public function getIdTaxonControle()
    {
		if ($this->idTaxon) {
			return (string)$this->getIdTaxon()->getControle();
		}
		return null;
    }

    /**
     * Set idTaxon_biblio
     *
     * @param string $idTaxonBiblio
     * @return BotaniqueCollection
     */
    public function setIdTaxonBiblio($idTaxonBiblio)
    {
        $this->idTaxon_biblio = $idTaxonBiblio;

        return $this;
    }

    /**
     * Get idTaxon_biblio
     *
     * @return string
     */
    public function getIdTaxonBiblio()
    {
		if ($this->idTaxon) {
			return (string)$this->getIdTaxon()->getBiblio();
		}
		return null;
    }

    /**
     * Set taxonFamille1
     *
     * @param string $taxonFamille1
     * @return BotaniqueCollection
     */
    public function setTaxonFamille1($taxonFamille1)
    {
        $this->taxonFamille1 = $taxonFamille1;

        return $this;
    }

    /**
     * Get taxonFamille1
     *
     * @return string
     */
    public function getTaxonFamille1()
    {
		if ($this->idTaxon) {
			return (string)$this->getIdTaxon()->getFamille1();
		}
		return null;
    }

    /**
     * Get taxonFamille2
     *
     * @return string
     */
    public function getTaxonFamille2()
    {
		if ($this->idTaxon) {
			return (string)$this->getIdTaxon()->getFamille2();
		}
		return null;
    }

    /**
     * Set taxonControle
     *
     * @param string $taxonControle
     * @return BotaniqueCollection
     */
    public function setTaxonControle($taxonControle)
    {
        $this->taxonControle = $taxonControle;

        return $this;
    }

    /**
     * Get taxonControle
     *
     * @return string
     */
    public function getTaxonControle()
    {
        return $this->taxonControle;
    }

    /**
     * Set taxonBiblio
     *
     * @param string $taxonBiblio
     * @return BotaniqueCollection
     */
    public function setTaxonBiblio($taxonBiblio)
    {
        $this->taxonBiblio = $taxonBiblio;

        return $this;
    }

    /**
     * Get taxonBiblio
     *
     * @return string
     */
    public function getTaxonBiblio()
    {
        return $this->taxonBiblio;
    }

    /**
     * Set typeDeProvenance
     *
     * @param string $typeDeProvenance
     * @return BotaniqueCollection
     */
    public function setTypeDeProvenance($typeDeProvenance)
    {
        $this->typeDeProvenance = $typeDeProvenance;

        return $this;
    }

    /**
     * Get typeDeProvenance
     *
     * @return string
     */
    public function getTypeDeProvenance()
    {
		if ($this->annee && $this->numero) {
			global $kernel;
			if ( 'AppCache' == get_class($kernel) )
			{
			   $kernel = $kernel->getKernel();
			}
			$em = $kernel->getContainer()->get( 'doctrine.orm.entity_manager' );
			$accession = $em->getRepository('NTEBogartBundle:BotaniqueAccession')->findOneBy(array('annee' => $this->annee, 'numero' => $this->numero));
			$result = $accession ? $accession->getProvenanceType() : null;
			return (string)$result;
		}
    }

    /**
     * Set periodeDeSemis
     *
     * @param string $periodeDeSemis
     * @return BotaniqueCollection
     */
    public function setPeriodeDeSemis($periodeDeSemis)
    {
        $this->periodeDeSemis = $periodeDeSemis;

        return $this;
    }

    /**
     * Get periodeDeSemis
     *
     * @return string
     */
    public function getPeriodeDeSemis()
    {
        return $this->periodeDeSemis;
    }

    /**
     * Set commandeEtiquettes
     *
     * @param string $commandeEtiquettes
     * @return BotaniqueCollection
     */
    public function setCommandeEtiquettes($commandeEtiquettes)
    {
        $this->commandeEtiquettes = $commandeEtiquettes;

        return $this;
    }

    /**
     * Get commandeEtiquettes
     *
     * @return string
     */
    public function getCommandeEtiquettes()
    {
        return $this->commandeEtiquettes;
    }
}
