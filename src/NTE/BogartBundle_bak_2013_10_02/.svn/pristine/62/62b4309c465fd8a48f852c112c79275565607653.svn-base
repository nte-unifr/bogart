<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueAccession
 *
 * @ORM\Table(name="botanique_accession")
 * @ORM\Entity
 */
class BotaniqueAccession
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="vieux_nom", type="string", length=255, nullable=true)
     */
    private $vieuxNom;

    /**
     * @var string
     *
     * @ORM\Column(name="historique", type="string", length=255, nullable=true)
     */
    private $historique;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="vieux_ipen", type="string", length=255, nullable=true)
     */
    private $vieuxIpen;

    /**
     * @var string
     *
     * @ORM\Column(name="vieux_ipen_pays", type="string", length=255, nullable=true)
     */
    private $vieuxIpenPays;

    /**
     * @var string
     *
     * @ORM\Column(name="vieux_ipen_condition", type="string", length=255, nullable=true)
     */
    private $vieuxIpenCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="vieux_ipen_code_jardin", type="string", length=255, nullable=true)
     */
    private $vieuxIpenCodeJardin;

    /**
     * @var string
     *
     * @ORM\Column(name="vieux_ipen_numero", type="string", length=255, nullable=true)
     */
    private $vieuxIpenNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="reception", type="string", length=255, nullable=true)
     */
    private $reception;

    /**
     * @var string
     *
     * @ORM\Column(name="collecteur", type="string", length=255, nullable=true)
     */
    private $collecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="fournisseur_ant", type="string", length=255, nullable=true)
     */
    private $fournisseurAnt;

    /**
     * @var string
     *
     * @ORM\Column(name="recolte", type="string", length=255, nullable=true)
     */
    private $recolte;

    /**
     * @var string
     *
     * @ORM\Column(name="is_annee", type="string", length=255, nullable=true)
     */
    private $isAnnee;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="altitude", type="string", length=255, nullable=true)
     */
    private $altitude;

    /**
     * @var string
     *
     * @ORM\Column(name="altitude_m", type="string", length=255, nullable=true)
     */
    private $altitudeM;

    /**
     * @var string
     *
     * @ORM\Column(name="coordonnee", type="string", length=255, nullable=true)
     */
    private $coordonnee;

    /**
     * @var string
     *
     * @ORM\Column(name="provenance_type", type="string", length=255, nullable=true)
     */
    private $provenanceType;

    /**
     * @var string
     *
     * @ORM\Column(name="provenance", type="string", length=255, nullable=true)
     */
    private $provenance;

    /**
     * @var string
     *
     * @ORM\Column(name="semis", type="string", length=255, nullable=true)
     */
    private $semis;

    /**
     * @var string
     *
     * @ORM\Column(name="repiquage", type="string", length=255, nullable=true)
     */
    private $repiquage;

    /**
     * @var string
     *
     * @ORM\Column(name="plantation", type="string", length=255, nullable=true)
     */
    private $plantation;

    /**
     * @var string
     *
     * @ORM\Column(name="verification", type="string", length=255, nullable=true)
     */
    private $verification;

    /**
     * @var \BotaniqueAdresse
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueAdresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fournisseur", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     * })
     */
    private $idFournisseur;

    /**
     * @var \BotaniqueEndroit
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueEndroit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_collection1", referencedColumnName="id", nullable=true)
     * })
     */
    private $idCollection1;

    /**
     * @var \BotaniqueEndroit
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueEndroit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_collection2", referencedColumnName="id", nullable=true)
     * })
     */
    private $idCollection2;

    /**
     * @var \BotaniqueEndroit
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueEndroit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_collection3", referencedColumnName="id", nullable=true)
     * })
     */
    private $idCollection3;

    /**
     * @var \BotaniqueIpen
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueIpen", cascade="persist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ipen", referencedColumnName="id", nullable=true)
     * })
     */
    private $idIpen;

    /**
     * @var \BotaniqueTaxon
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueTaxon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_taxon", referencedColumnName="id", nullable=true)
     * })
     */
    private $idTaxon;

    /**
     * @var \BotaniquePays
     *
     * @ORM\ManyToOne(targetEntity="BotaniquePays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pays", referencedColumnName="id", nullable=true)
     * })
     */
    private $idPays;

    /**
     * @var \BotaniqueBiblio
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueBiblio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_biblio", referencedColumnName="id", nullable=true)
     * })
     */
    private $idBiblio;
    


    /**
     * @var \BotaniquePays
     *
     * @ORM\ManyToOne(targetEntity="BotaniquePays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ipen_id_pays", referencedColumnName="id")
     * })
     */
    private $ipenIdPays;

    /**
     * @var string
     *
     * @ORM\Column(name="ipen_nom", type="string", length=255, nullable=true)
     */
    private $ipenNom;

    /**
     * @var string
     *
     * @ORM\Column(name="ipen_condition2", type="string", length=255, nullable=true)
     */
    private $ipenCondition2;

    /**
     * @var string
     *
     * @ORM\Column(name="ipen_code", type="string", length=255, nullable=true)
     */
    private $ipenCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ipen_numero", type="string", length=255, nullable=true)
     */
    private $ipenNumero;
    
    
    


    public function __toString()
	{
	    return (string)$this->nom. ' (taxon = '.$this->idTaxon.')';
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
     * @return BotaniqueAccession
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
     * Set nom
     *
     * @param string $nom
     * @return BotaniqueAccession
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set vieuxNom
     *
     * @param string $vieuxNom
     * @return BotaniqueAccession
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
     * Set historique
     *
     * @param string $historique
     * @return BotaniqueAccession
     */
    public function setHistorique($historique)
    {
        $this->historique = $historique;
    
        return $this;
    }

    /**
     * Get historique
     *
     * @return string 
     */
    public function getHistorique()
    {
        return $this->historique;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return BotaniqueAccession
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return string 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return BotaniqueAccession
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
     * Set sexe
     *
     * @param string $sexe
     * @return BotaniqueAccession
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set reception
     *
     * @param string $reception
     * @return BotaniqueAccession
     */
    public function setReception($reception)
    {
        $this->reception = $reception;
    
        return $this;
    }

    /**
     * Get reception
     *
     * @return string 
     */
    public function getReception()
    {
        return $this->reception;
    }

    /**
     * Set collecteur
     *
     * @param string $collecteur
     * @return BotaniqueAccession
     */
    public function setCollecteur($collecteur)
    {
        $this->collecteur = $collecteur;
    
        return $this;
    }

    /**
     * Get collecteur
     *
     * @return string 
     */
    public function getCollecteur()
    {
        return $this->collecteur;
    }

    /**
     * Set fournisseurAnt
     *
     * @param string $fournisseurAnt
     * @return BotaniqueAccession
     */
    public function setFournisseurAnt($fournisseurAnt)
    {
        $this->fournisseurAnt = $fournisseurAnt;
    
        return $this;
    }

    /**
     * Get fournisseurAnt
     *
     * @return string 
     */
    public function getFournisseurAnt()
    {
        return $this->fournisseurAnt;
    }

    /**
     * Set recolte
     *
     * @param string $recolte
     * @return BotaniqueAccession
     */
    public function setRecolte($recolte)
    {
        $this->recolte = $recolte;
    
        return $this;
    }

    /**
     * Get recolte
     *
     * @return string 
     */
    public function getRecolte()
    {
        return $this->recolte;
    }

    /**
     * Set isAnnee
     *
     * @param string $isAnnee
     * @return BotaniqueAccession
     */
    public function setIsAnnee($isAnnee)
    {
        $this->isAnnee = $isAnnee;
    
        return $this;
    }

    /**
     * Get isAnnee
     *
     * @return string 
     */
    public function getIsAnnee()
    {
        return $this->isAnnee;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return BotaniqueAccession
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set altitude
     *
     * @param string $altitude
     * @return BotaniqueAccession
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;
    
        return $this;
    }

    /**
     * Get altitude
     *
     * @return string 
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set altitudeM
     *
     * @param string $altitudeM
     * @return BotaniqueAccession
     */
    public function setAltitudeM($altitudeM)
    {
        $this->altitudeM = $altitudeM;
    
        return $this;
    }

    /**
     * Get altitudeM
     *
     * @return string 
     */
    public function getAltitudeM()
    {
        return $this->altitudeM;
    }

    /**
     * Set coordonnee
     *
     * @param string $coordonnee
     * @return BotaniqueAccession
     */
    public function setCoordonnee($coordonnee)
    {
        $this->coordonnee = $coordonnee;
    
        return $this;
    }

    /**
     * Get coordonnee
     *
     * @return string 
     */
    public function getCoordonnee()
    {
        return $this->coordonnee;
    }

    /**
     * Set provenanceType
     *
     * @param string $provenanceType
     * @return BotaniqueAccession
     */
    public function setProvenanceType($provenanceType)
    {
        $this->provenanceType = $provenanceType;
    
        return $this;
    }

    /**
     * Get provenanceType
     *
     * @return string 
     */
    public function getProvenanceType()
    {
        return $this->provenanceType;
    }

    /**
     * Set provenance
     *
     * @param string $provenance
     * @return BotaniqueAccession
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
#        return $this->provenance;
        return $this->provenanceType . " " . $this->idPays . " " . $this->location . " " . $this->altitude . " " . $this->altitudeM;
    }

    /**
     * Set semis
     *
     * @param string $semis
     * @return BotaniqueAccession
     */
    public function setSemis($semis)
    {
        $this->semis = $semis;
    
        return $this;
    }

    /**
     * Get semis
     *
     * @return string 
     */
    public function getSemis()
    {
        return $this->semis;
    }

    /**
     * Set repiquage
     *
     * @param string $repiquage
     * @return BotaniqueAccession
     */
    public function setRepiquage($repiquage)
    {
        $this->repiquage = $repiquage;
    
        return $this;
    }

    /**
     * Get repiquage
     *
     * @return string 
     */
    public function getRepiquage()
    {
        return $this->repiquage;
    }

    /**
     * Set plantation
     *
     * @param string $plantation
     * @return BotaniqueAccession
     */
    public function setPlantation($plantation)
    {
        $this->plantation = $plantation;
    
        return $this;
    }

    /**
     * Get plantation
     *
     * @return string 
     */
    public function getPlantation()
    {
        return $this->plantation;
    }

    /**
     * Set verification
     *
     * @param string $verification
     * @return BotaniqueAccession
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;
    
        return $this;
    }

    /**
     * Get verification
     *
     * @return string 
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Set idFournisseur
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueAdresse $idFournisseur
     * @return BotaniqueAccession
     */
    public function setIdFournisseur(\NTE\BogartBundle\Entity\BotaniqueAdresse $idFournisseur = null)
    {
        $this->idFournisseur = $idFournisseur;
    
        return $this;
    }

    /**
     * Get idFournisseur
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueAdresse 
     */
    public function getIdFournisseur()
    {
        return $this->idFournisseur;
    }

    /**
     * Set idCollection1
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueEndroit $idCollection1
     * @return BotaniqueAccession
     */
    public function setIdCollection1(\NTE\BogartBundle\Entity\BotaniqueEndroit $idCollection1 = null)
    {
        $this->idCollection1 = $idCollection1;
    
        return $this;
    }

    /**
     * Get idCollection1
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueEndroit 
     */
    public function getIdCollection1()
    {
        return $this->idCollection1;
    }

    /**
     * Set idCollection2
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueEndroit $idCollection2
     * @return BotaniqueAccession
     */
    public function setIdCollection2(\NTE\BogartBundle\Entity\BotaniqueEndroit $idCollection2 = null)
    {
        $this->idCollection2 = $idCollection2;
    
        return $this;
    }

    /**
     * Get idCollection2
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueEndroit 
     */
    public function getIdCollection2()
    {
        return $this->idCollection2;
    }

    /**
     * Set idCollection3
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueEndroit $idCollection3
     * @return BotaniqueAccession
     */
    public function setIdCollection3(\NTE\BogartBundle\Entity\BotaniqueEndroit $idCollection3 = null)
    {
        $this->idCollection3 = $idCollection3;
    
        return $this;
    }

    /**
     * Get idCollection3
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueEndroit 
     */
    public function getIdCollection3()
    {
        return $this->idCollection3;
    }

    /**
     * Set idIpen
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueIpen $idIpen
     * @return BotaniqueAccession
     */
    public function setIdIpen(\NTE\BogartBundle\Entity\BotaniqueIpen $idIpen = null)
    {
        $this->idIpen = $idIpen;
    
        return $this;
    }

    /**
     * Get idIpen
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueIpen 
     */
    public function getIdIpen()
    {
        return $this->idIpen;
    }

    /**
     * Set idTaxon
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueTaxon $idTaxon
     * @return BotaniqueAccession
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
     * Set idPays
     *
     * @param \NTE\BogartBundle\Entity\BotaniquePays $idPays
     * @return BotaniqueAccession
     */
    public function setIdPays(\NTE\BogartBundle\Entity\BotaniquePays $idPays = null)
    {
        $this->idPays = $idPays;
    
        return $this;
    }

    /**
     * Get idPays
     *
     * @return \NTE\BogartBundle\Entity\BotaniquePays 
     */
    public function getIdPays()
    {
        return $this->idPays;
    }

    /**
     * Set idBiblio
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueBiblio $idBiblio
     * @return BotaniqueAccession
     */
    public function setIdBiblio(\NTE\BogartBundle\Entity\BotaniqueBiblio $idBiblio = null)
    {
        $this->idBiblio = $idBiblio;
    
        return $this;
    }

    /**
     * Get idBiblio
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueBiblio 
     */
    public function getIdBiblio()
    {
        return $this->idBiblio;
    }

    /**
     * Set vieuxIpen
     *
     * @param string $vieuxIpen
     * @return BotaniqueAccession
     */
    public function setVieuxIpen($vieuxIpen)
    {
        $this->vieuxIpen = $vieuxIpen;
    
        return $this;
    }

    /**
     * Get vieuxIpen
     *
     * @return string 
     */
    public function getVieuxIpen()
    {
        return $this->vieuxIpen;
    }

    /**
     * Set vieuxIpenPays
     *
     * @param string $vieuxIpenPays
     * @return BotaniqueAccession
     */
    public function setVieuxIpenPays($vieuxIpenPays)
    {
        $this->vieuxIpenPays = $vieuxIpenPays;
    
        return $this;
    }

    /**
     * Get vieuxIpenPays
     *
     * @return string 
     */
    public function getVieuxIpenPays()
    {
        return $this->vieuxIpenPays;
    }

    /**
     * Set vieuxIpenCondition
     *
     * @param string $vieuxIpenCondition
     * @return BotaniqueAccession
     */
    public function setVieuxIpenCondition($vieuxIpenCondition)
    {
        $this->vieuxIpenCondition = $vieuxIpenCondition;
    
        return $this;
    }

    /**
     * Get vieuxIpenCondition
     *
     * @return string 
     */
    public function getVieuxIpenCondition()
    {
        return $this->vieuxIpenCondition;
    }

    /**
     * Set vieuxIpenCodeJardin
     *
     * @param string $vieuxIpenCodeJardin
     * @return BotaniqueAccession
     */
    public function setVieuxIpenCodeJardin($vieuxIpenCodeJardin)
    {
        $this->vieuxIpenCodeJardin = $vieuxIpenCodeJardin;
    
        return $this;
    }

    /**
     * Get vieuxIpenCodeJardin
     *
     * @return string 
     */
    public function getVieuxIpenCodeJardin()
    {
        return $this->vieuxIpenCodeJardin;
    }

    /**
     * Set vieuxIpenNumero
     *
     * @param string $vieuxIpenNumero
     * @return BotaniqueAccession
     */
    public function setVieuxIpenNumero($vieuxIpenNumero)
    {
        $this->vieuxIpenNumero = $vieuxIpenNumero;
    
        return $this;
    }

    /**
     * Get vieuxIpenNumero
     *
     * @return string 
     */
    public function getVieuxIpenNumero()
    {
        return $this->vieuxIpenNumero;
    }

    /**
     * Set ipenNom
     *
     * @param string $ipenNom
     * @return BotaniqueAccession
     */
    public function setIpenNom($ipenNom)
    {
#        $this->ipenNom = $ipenNom;
#        $this->ipenNom = $this->getIpenIdPays()->getAbreviation() . " " . $this->ipenCondition2 . " " . $this->ipenCode . " " . $this->ipenNumero;
    
        if ($this->getIpenIdPays()) {
            $this->ipenNom = $this->getIpenIdPays()->getAbreviation() . " " . $this->ipenCondition2 . " " . $this->ipenCode . " " . $this->ipenNumero;
        } else {
            $this->ipenNom = $this->ipenCondition2 . " " . $this->ipenCode . " " . $this->ipenNumero;
        }
        
        return $this;
    }

    /**
     * Get ipenNom
     *
     * @return string 
     */
    public function getIpenNom()
    {
        if ($this->getIpenIdPays()) {
            return $this->getIpenIdPays()->getAbreviation() . " " . $this->ipenCondition2 . " " . $this->ipenCode . " " . $this->ipenNumero;
        } else {
            return $this->ipenCondition2 . " " . $this->ipenCode . " " . $this->ipenNumero;
        }
        return $this->ipenNom;

#        return $this->getIpenIdPays()->getAbreviation() . " " . $this->ipenCondition2 . " " . $this->ipenCode . " " . $this->ipenNumero;
    }

    /**
     * Set ipenCondition2
     *
     * @param string $ipenCondition2
     * @return BotaniqueAccession
     */
    public function setIpenCondition2($ipenCondition2)
    {
        $this->ipenCondition2 = $ipenCondition2;
    
        return $this;
    }

    /**
     * Get ipenCondition2
     *
     * @return string 
     */
    public function getIpenCondition2()
    {
        return $this->ipenCondition2;
    }

    /**
     * Set ipenCode
     *
     * @param string $ipenCode
     * @return BotaniqueAccession
     */
    public function setIpenCode($ipenCode)
    {
        $this->ipenCode = $ipenCode;
    
        return $this;
    }

    /**
     * Get ipenCode
     *
     * @return string 
     */
    public function getIpenCode()
    {
        return $this->ipenCode;
    }

    /**
     * Set ipenNumero
     *
     * @param string $ipenNumero
     * @return BotaniqueAccession
     */
    public function setIpenNumero($ipenNumero)
    {
        $this->ipenNumero = $ipenNumero;
    
        return $this;
    }

    /**
     * Get ipenNumero
     *
     * @return string 
     */
    public function getIpenNumero()
    {
        return $this->ipenNumero;
    }

    /**
     * Set ipenIdPays
     *
     * @param \NTE\BogartBundle\Entity\BotaniquePays $ipenIdPays
     * @return BotaniqueAccession
     */
    public function setIpenIdPays(\NTE\BogartBundle\Entity\BotaniquePays $ipenIdPays = null)
    {
        $this->ipenIdPays = $ipenIdPays;
    
        return $this;
    }

    /**
     * Get ipenIdPays
     *
     * @return \NTE\BogartBundle\Entity\BotaniquePays 
     */
    public function getIpenIdPays()
    {
        return $this->ipenIdPays;
    }
}
