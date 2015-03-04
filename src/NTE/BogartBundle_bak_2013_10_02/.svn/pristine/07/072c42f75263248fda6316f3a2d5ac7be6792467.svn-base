<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueTaxon
 *
 * @ORM\Table(name="botanique_taxon")
 * @ORM\Entity(repositoryClass="BotaniqueTaxonRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class BotaniqueTaxon
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
     * @ORM\Column(name="filemaker_num2", type="integer", nullable=true)
     */
    private $filemakerNum2;

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
     * @ORM\Column(name="genre_inter", type="string", length=255, nullable=true)
     */
    private $genreInter;

    /**
     * @var string
     *
     * @ORM\Column(name="espece", type="string", length=255, nullable=true)
     */
    private $espece;

    /**
     * @var string
     *
     * @ORM\Column(name="espece_auteur", type="string", length=255, nullable=true)
     */
    private $especeAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="espece_inter", type="string", length=255, nullable=true)
     */
    private $especeInter;

    /**
     * @var string
     *
     * @ORM\Column(name="ssp", type="string", length=255, nullable=true)
     */
    private $ssp;

    /**
     * @var string
     *
     * @ORM\Column(name="ssp_nom", type="string", length=255, nullable=true)
     */
    private $sspNom;

    /**
     * @var string
     *
     * @ORM\Column(name="ssp_auteur", type="string", length=255, nullable=true)
     */
    private $sspAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="cultivar", type="string", length=255, nullable=true)
     */
    private $cultivar;

    /**
     * @var string
     *
     * @ORM\Column(name="vieux_synonyme", type="string", length=255, nullable=true)
     */
    private $vieuxSynonyme;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_intergeneric", type="string", length=255, nullable=true)
     */
    private $synonymeIntergeneric;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_genre", type="string", length=255, nullable=true)
     */
    private $synonymeGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_espece", type="string", length=255, nullable=true)
     */
    private $synonymeEspece;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_auteur", type="string", length=255, nullable=true)
     */
    private $synonymeAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_interspecific", type="string", length=255, nullable=true)
     */
    private $synonymeInterspecific;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_ssp", type="string", length=255, nullable=true)
     */
    private $synonymeSsp;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_ssp_nom", type="string", length=255, nullable=true)
     */
    private $synonymeSspNom;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_ssp_auteur", type="string", length=255, nullable=true)
     */
    private $synonymeSspAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_intergeneric2", type="string", length=255, nullable=true)
     */
    private $synonymeIntergeneric2;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_genre2", type="string", length=255, nullable=true)
     */
    private $synonymeGenre2;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_espece2", type="string", length=255, nullable=true)
     */
    private $synonymeEspece2;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_auteur2", type="string", length=255, nullable=true)
     */
    private $synonymeAuteur2;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_interspecific2", type="string", length=255, nullable=true)
     */
    private $synonymeInterspecific2;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_ssp2", type="string", length=255, nullable=true)
     */
    private $synonymeSsp2;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_ssp_nom2", type="string", length=255, nullable=true)
     */
    private $synonymeSspNom2;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_ssp_auteur2", type="string", length=255, nullable=true)
     */
    private $synonymeSspAuteur2;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_intergeneric3", type="string", length=255, nullable=true)
     */
    private $synonymeIntergeneric3;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_genre3", type="string", length=255, nullable=true)
     */
    private $synonymeGenre3;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_espece3", type="string", length=255, nullable=true)
     */
    private $synonymeEspece3;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_auteur3", type="string", length=255, nullable=true)
     */
    private $synonymeAuteur3;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_interspecific3", type="string", length=255, nullable=true)
     */
    private $synonymeInterspecific3;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_ssp3", type="string", length=255, nullable=true)
     */
    private $synonymeSsp3;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_ssp_nom3", type="string", length=255, nullable=true)
     */
    private $synonymeSspNom3;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme_ssp_auteur3", type="string", length=255, nullable=true)
     */
    private $synonymeSspAuteur3;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_fr", type="string", length=255, nullable=true)
     */
    private $nomFr;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_de", type="string", length=255, nullable=true)
     */
    private $nomDe;

    /**
     * @var string
     *
     * @ORM\Column(name="vieille_croissance", type="string", length=255, nullable=true)
     */
    private $vieilleCroissance;

    /**
     * @var array
     *
     * @ORM\Column(name="floraison", type="array", nullable=true)
     */
    private $floraison;

    /**
     * @var string
     *
     * @ORM\Column(name="vieille_floraison", type="string", length=255, nullable=true)
     */
    private $vieilleFloraison;

    /**
     * @var string
     *
     * @ORM\Column(name="complement1", type="string", length=255, nullable=true)
     */
    private $complement1;

    /**
     * @var string
     *
     * @ORM\Column(name="complement2", type="string", length=255, nullable=true)
     */
    private $complement2;

    /**
     * @var string
     *
     * @ORM\Column(name="complement3", type="string", length=255, nullable=true)
     */
    private $complement3;

    /**
     * @var string
     *
     * @ORM\Column(name="complement4", type="string", length=255, nullable=true)
     */
    private $complement4;

    /**
     * @var string
     *
     * @ORM\Column(name="complement5", type="string", length=255, nullable=true)
     */
    private $complement5;

    /**
     * @var string
     *
     * @ORM\Column(name="origine_autre", type="string", length=255, nullable=true)
     */
    private $origineAutre;

    /**
     * @var string
     *
     * @ORM\Column(name="indigene", type="string", length=255, nullable=true)
     */
    private $indigene;

    /**
     * @var string
     *
     * @ORM\Column(name="menace", type="string", length=255, nullable=true)
     */
    private $menace;

    /**
     * @var string
     *
     * @ORM\Column(name="protection", type="string", length=255, nullable=true)
     */
    private $protection;

    /**
     * @var string
     *
     * @ORM\Column(name="cites", type="string", length=255, nullable=true)
     */
    private $cites;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_med", type="string", length=255, nullable=true)
     */
    private $planteMed;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_med_info", type="string", length=255, nullable=true)
     */
    private $planteMedInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_utile", type="string", length=255, nullable=true)
     */
    private $planteUtile;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_utile_info", type="string", length=255, nullable=true)
     */
    private $planteUtileInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_tox", type="string", length=255, nullable=true)
     */
    private $planteTox;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_tox_info", type="string", length=255, nullable=true)
     */
    private $planteToxInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_type", type="string", length=255, nullable=true)
     */
    private $planteType;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_annee", type="string", length=255, nullable=true)
     */
    private $planteAnnee;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_type2", type="string", length=255, nullable=true)
     */
    private $planteType2;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_annee2", type="string", length=255, nullable=true)
     */
    private $planteAnnee2;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_type3", type="string", length=255, nullable=true)
     */
    private $planteType3;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_annee3", type="string", length=255, nullable=true)
     */
    private $planteAnnee3;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_type4", type="string", length=255, nullable=true)
     */
    private $planteType4;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_annee4", type="string", length=255, nullable=true)
     */
    private $planteAnnee4;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_type5", type="string", length=255, nullable=true)
     */
    private $planteType5;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_annee5", type="string", length=255, nullable=true)
     */
    private $planteAnnee5;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_type6", type="string", length=255, nullable=true)
     */
    private $planteType6;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_annee6", type="string", length=255, nullable=true)
     */
    private $planteAnnee6;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_type7", type="string", length=255, nullable=true)
     */
    private $planteType7;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_annee7", type="string", length=255, nullable=true)
     */
    private $planteAnnee7;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plante_type_info", type="boolean", nullable=true)
     */
    private $planteTypeInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="plante_meli", type="string", length=255, nullable=true)
     */
    private $planteMeli;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text", nullable=true)
     */
    private $remarques;

    /**
     * @var string
     *
     * @ORM\Column(name="controle", type="string", length=255, nullable=true)
     */
    private $controle;

    /**
     * @var string
     *
     * @ORM\Column(name="origine_fr", type="string", length=255, nullable=true)
     */
    private $origineFr;

    /**
     * @var string
     *
     * @ORM\Column(name="origine_de", type="string", length=255, nullable=true)
     */
    private $origineDe;

    /**
     * @var string
     *
     * @ORM\Column(name="habitat_fr", type="text", length=255, nullable=true)
     */
    private $habitatFr;

    /**
     * @var string
     *
     * @ORM\Column(name="habitat_de", type="text", length=255, nullable=true)
     */
    private $habitatDe;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque_fr", type="text", length=255, nullable=true)
     */
    private $remarqueFr;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque_de", type="text", length=255, nullable=true)
     */
    private $remarqueDe;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", length=255, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="synonyme", type="string", length=255, nullable=true)
     */
    private $synonyme;

    /**
     * @ORM\OneToMany(targetEntity="BotaniqueParcoursPosition", mappedBy="taxon", cascade={"persist"}, orphanRemoval=true)
     */
    private $parcoursposition;

    /**
     * @var \BotaniqueBiblio
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueBiblio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="biblio", referencedColumnName="id")
     * })
     */
    private $biblio;

    /**
     * @var string
     *
     * @ORM\Column(name="semis", type="string", length=255, nullable=true)
     */
    private $semis;

    /**
     * @var string
     *
     * @ORM\Column(name="melange_terre_num", type="string", length=255, nullable=true)
     */
    private $melangeTerreNum;

    /**
     * @var string
     *
     * @ORM\Column(name="melange_terre", type="string", length=255, nullable=true)
     */
    private $melangeTerre;

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
     * @ORM\Column(name="remarques_culture", type="text", nullable=true)
     */
    private $remarquesCulture;

    /**
     * @var string
     *
     * @ORM\Column(name="marche_printemps", type="string", length=255, nullable=true)
     */
    private $marchePrintemps;

    /**
     * @var string
     *
     * @ORM\Column(name="marche_prix", type="string", length=255, nullable=true)
     */
    private $marchePrix;

    /**
     * @var string
     *
     * @ORM\Column(name="marche_etiquette", type="string", length=255, nullable=true)
     */
    private $marcheEtiquette;

    /**
     * @var string
     *
     * @ORM\Column(name="travaux", type="string", length=255, nullable=true)
     */
    private $travaux;

    /**
     * @var string
     *
     * @ORM\Column(name="updated", type="string", length=10, nullable=true)
     */
    private $updated;

    /**
     * @var \BotaniqueFamille
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueFamille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="famille1", referencedColumnName="id")
     * })
     */
    private $famille1;

    /**
     * @var \BotaniqueFamilleSynonyme
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueFamilleSynonyme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="famille2", referencedColumnName="id")
     * })
     */
    private $famille2;

    /**
     * @var \BotaniqueGenre
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueGenre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="genre", referencedColumnName="id")
     * })
     */
    private $genre;

    /**
     * @var \BotaniqueOrigine
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueOrigine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="origine1", referencedColumnName="id")
     * })
     */
    private $origine1;

    /**
     * @var \BotaniqueOrigine
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueOrigine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="origine2", referencedColumnName="id")
     * })
     */
    private $origine2;

    /**
     * @var \BotaniqueOrigine
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueOrigine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="origine3", referencedColumnName="id")
     * })
     */
    private $origine3;

    /**
     * @var \BotaniqueOrigine
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueOrigine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="origine4", referencedColumnName="id")
     * })
     */
    private $origine4;

    /**
     * @var \BotaniqueOrigine
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueOrigine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="origine5", referencedColumnName="id")
     * })
     */
    private $origine5;

    /**
     * @var \BotaniqueBiblio
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueBiblio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plante_biblio", referencedColumnName="id")
     * })
     */
    private $planteBiblio;

    /**
     * @var \BotaniqueBiblio
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueBiblio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plante_biblio2", referencedColumnName="id")
     * })
     */
    private $planteBiblio2;

    /**
     * @var \BotaniqueBiblio
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueBiblio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plante_biblio3", referencedColumnName="id")
     * })
     */
    private $planteBiblio3;

    /**
     * @var \BotaniqueBiblio
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueBiblio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plante_biblio4", referencedColumnName="id")
     * })
     */
    private $planteBiblio4;

    /**
     * @var \BotaniqueBiblio
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueBiblio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plante_biblio5", referencedColumnName="id")
     * })
     */
    private $planteBiblio5;

    /**
     * @var \BotaniqueBiblio
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueBiblio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plante_biblio6", referencedColumnName="id")
     * })
     */
    private $planteBiblio6;

    /**
     * @var \BotaniqueBiblio
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueBiblio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plante_biblio7", referencedColumnName="id")
     * })
     */
    private $planteBiblio7;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="BotaniqueCroissance")
     * @ORM\JoinTable(name="croissances_taxons",
     *     joinColumns={@ORM\JoinColumn(name="taxon_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="croissance_id", referencedColumnName="id")}
     * )
     */
    private $croissance;

    /**
     * @ORM\OneToMany(targetEntity="BotaniqueAccession", mappedBy="idTaxon", cascade={"persist"})
     */
    private $accessions;

    /**
     * @ORM\OneToMany(targetEntity="BotaniqueFichierTaxon", mappedBy="taxon", cascade={"persist"}, orphanRemoval=true)
     */
    private $fichiers;

    /**
     * @ORM\OneToMany(targetEntity="BotaniqueCollection", mappedBy="idTaxon", cascade={"persist"})
     */
    private $collections;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public", type="boolean", nullable=true)
     */
    private $public;


    public function __toString()
	{
	    return (string)$this->getNom();
	}
	
	/**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function PreUpdate()
    {
        $this->nom = $this->genre . ' ' . $this->espece . ' ' . $this->especeAuteur;
        $this->synonyme = $this->synonymeIntergeneric . " " . $this->synonymeGenre . " " . $this->synonymeEspece . " " . $this->synonymeAuteur . " " . $this->synonymeInterspecific . " " . $this->synonymeSsp . " ". " " . $this->synonymeSspNom . " " . $this->synonymeSspAuteur . ", " .
                            $this->synonymeIntergeneric2 . " " . $this->synonymeGenre2 . " " . $this->synonymeEspece2 . " " . $this->synonymeAuteur2 . " " . $this->synonymeInterspecific2 . " " . $this->synonymeSsp2 . " ". " " . $this->synonymeSspNom2 . " " . $this->synonymeSspAuteur2 . ", ".
                            $this->synonymeIntergeneric3 . " " . $this->synonymeGenre3 . " " . $this->synonymeEspece3 . " " . $this->synonymeAuteur3 . " " . $this->synonymeInterspecific3 . " " . $this->synonymeSsp3 . " ". " " . $this->synonymeSspNom3 . " " . $this->synonymeSspAuteur3;
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
     * Set filemakerNum2
     *
     * @param integer $filemakerNum2
     * @return BotaniqueTaxon
     */
    public function setFilemakerNum2($filemakerNum2)
    {
        $this->filemakerNum2 = $filemakerNum2;
    
        return $this;
    }

    /**
     * Get filemakerNum2
     *
     * @return integer 
     */
    public function getFilemakerNum2()
    {
        return $this->filemakerNum2;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return BotaniqueTaxon
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
#        $this->nom = $this->genre . ' ' . $this->espece . ' ' . $this->especeAuteur;
    
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
#        return $this->genre . ' ' . $this->espece . ' ' . $this->especeAuteur;
    }

    /**
     * Set vieuxNom
     *
     * @param string $vieuxNom
     * @return BotaniqueTaxon
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
     * Set genreInter
     *
     * @param string $genreInter
     * @return BotaniqueTaxon
     */
    public function setGenreInter($genreInter)
    {
        $this->genreInter = $genreInter;
    
        return $this;
    }

    /**
     * Get genreInter
     *
     * @return string 
     */
    public function getGenreInter()
    {
        return $this->genreInter;
    }

    /**
     * Set espece
     *
     * @param string $espece
     * @return BotaniqueTaxon
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;
    
        return $this;
    }

    /**
     * Get espece
     *
     * @return string 
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set especeAuteur
     *
     * @param string $especeAuteur
     * @return BotaniqueTaxon
     */
    public function setEspeceAuteur($especeAuteur)
    {
        $this->especeAuteur = $especeAuteur;
    
        return $this;
    }

    /**
     * Get especeAuteur
     *
     * @return string 
     */
    public function getEspeceAuteur()
    {
        return $this->especeAuteur;
    }

    /**
     * Set especeInter
     *
     * @param string $especeInter
     * @return BotaniqueTaxon
     */
    public function setEspeceInter($especeInter)
    {
        $this->especeInter = $especeInter;
    
        return $this;
    }

    /**
     * Get especeInter
     *
     * @return string 
     */
    public function getEspeceInter()
    {
        return $this->especeInter;
    }

    /**
     * Set ssp
     *
     * @param string $ssp
     * @return BotaniqueTaxon
     */
    public function setSsp($ssp)
    {
        $this->ssp = $ssp;
    
        return $this;
    }

    /**
     * Get ssp
     *
     * @return string 
     */
    public function getSsp()
    {
        return $this->ssp;
    }

    /**
     * Set sspNom
     *
     * @param string $sspNom
     * @return BotaniqueTaxon
     */
    public function setSspNom($sspNom)
    {
        $this->sspNom = $sspNom;
    
        return $this;
    }

    /**
     * Get sspNom
     *
     * @return string 
     */
    public function getSspNom()
    {
        return $this->sspNom;
    }

    /**
     * Set sspAuteur
     *
     * @param string $sspAuteur
     * @return BotaniqueTaxon
     */
    public function setSspAuteur($sspAuteur)
    {
        $this->sspAuteur = $sspAuteur;
    
        return $this;
    }

    /**
     * Get sspAuteur
     *
     * @return string 
     */
    public function getSspAuteur()
    {
        return $this->sspAuteur;
    }

    /**
     * Set cultivar
     *
     * @param string $cultivar
     * @return BotaniqueTaxon
     */
    public function setCultivar($cultivar)
    {
        $this->cultivar = $cultivar;
    
        return $this;
    }

    /**
     * Get cultivar
     *
     * @return string 
     */
    public function getCultivar()
    {
        return $this->cultivar;
    }

    /**
     * Set vieuxSynonyme
     *
     * @param string $vieuxSynonyme
     * @return BotaniqueTaxon
     */
    public function setVieuxSynonyme($vieuxSynonyme)
    {
        $this->vieuxSynonyme = $vieuxSynonyme;
    
        return $this;
    }

    /**
     * Get vieuxSynonyme
     *
     * @return string 
     */
    public function getVieuxSynonyme()
    {
        return $this->vieuxSynonyme;
    }

    /**
     * Set synonymeIntergeneric
     *
     * @param string $synonymeIntergeneric
     * @return BotaniqueTaxon
     */
    public function setSynonymeIntergeneric($synonymeIntergeneric)
    {
        $this->synonymeIntergeneric = $synonymeIntergeneric;
    
        return $this;
    }

    /**
     * Get synonymeIntergeneric
     *
     * @return string 
     */
    public function getSynonymeIntergeneric()
    {
        return $this->synonymeIntergeneric;
    }

    /**
     * Set synonymeGenre
     *
     * @param string $synonymeGenre
     * @return BotaniqueTaxon
     */
    public function setSynonymeGenre($synonymeGenre)
    {
        $this->synonymeGenre = $synonymeGenre;
    
        return $this;
    }

    /**
     * Get synonymeGenre
     *
     * @return string 
     */
    public function getSynonymeGenre()
    {
        return $this->synonymeGenre;
    }

    /**
     * Set synonymeEspece
     *
     * @param string $synonymeEspece
     * @return BotaniqueTaxon
     */
    public function setSynonymeEspece($synonymeEspece)
    {
        $this->synonymeEspece = $synonymeEspece;
    
        return $this;
    }

    /**
     * Get synonymeEspece
     *
     * @return string 
     */
    public function getSynonymeEspece()
    {
        return $this->synonymeEspece;
    }

    /**
     * Set synonymeAuteur
     *
     * @param string $synonymeAuteur
     * @return BotaniqueTaxon
     */
    public function setSynonymeAuteur($synonymeAuteur)
    {
        $this->synonymeAuteur = $synonymeAuteur;
    
        return $this;
    }

    /**
     * Get synonymeAuteur
     *
     * @return string 
     */
    public function getSynonymeAuteur()
    {
        return $this->synonymeAuteur;
    }

    /**
     * Set synonymeInterspecific
     *
     * @param string $synonymeInterspecific
     * @return BotaniqueTaxon
     */
    public function setSynonymeInterspecific($synonymeInterspecific)
    {
        $this->synonymeInterspecific = $synonymeInterspecific;
    
        return $this;
    }

    /**
     * Get synonymeInterspecific
     *
     * @return string 
     */
    public function getSynonymeInterspecific()
    {
        return $this->synonymeInterspecific;
    }

    /**
     * Set synonymeSsp
     *
     * @param string $synonymeSsp
     * @return BotaniqueTaxon
     */
    public function setSynonymeSsp($synonymeSsp)
    {
        $this->synonymeSsp = $synonymeSsp;
    
        return $this;
    }

    /**
     * Get synonymeSsp
     *
     * @return string 
     */
    public function getSynonymeSsp()
    {
        return $this->synonymeSsp;
    }

    /**
     * Set synonymeSspNom
     *
     * @param string $synonymeSspNom
     * @return BotaniqueTaxon
     */
    public function setSynonymeSspNom($synonymeSspNom)
    {
        $this->synonymeSspNom = $synonymeSspNom;
    
        return $this;
    }

    /**
     * Get synonymeSspNom
     *
     * @return string 
     */
    public function getSynonymeSspNom()
    {
        return $this->synonymeSspNom;
    }

    /**
     * Set synonymeSspAuteur
     *
     * @param string $synonymeSspAuteur
     * @return BotaniqueTaxon
     */
    public function setSynonymeSspAuteur($synonymeSspAuteur)
    {
        $this->synonymeSspAuteur = $synonymeSspAuteur;
    
        return $this;
    }

    /**
     * Get synonymeSspAuteur
     *
     * @return string 
     */
    public function getSynonymeSspAuteur()
    {
        return $this->synonymeSspAuteur;
    }

    /**
     * Set synonymeIntergeneric2
     *
     * @param string $synonymeIntergeneric2
     * @return BotaniqueTaxon
     */
    public function setSynonymeIntergeneric2($synonymeIntergeneric2)
    {
        $this->synonymeIntergeneric2 = $synonymeIntergeneric2;
    
        return $this;
    }

    /**
     * Get synonymeIntergeneric2
     *
     * @return string 
     */
    public function getSynonymeIntergeneric2()
    {
        return $this->synonymeIntergeneric2;
    }

    /**
     * Set synonymeGenre2
     *
     * @param string $synonymeGenre2
     * @return BotaniqueTaxon
     */
    public function setSynonymeGenre2($synonymeGenre2)
    {
        $this->synonymeGenre2 = $synonymeGenre2;
    
        return $this;
    }

    /**
     * Get synonymeGenre2
     *
     * @return string 
     */
    public function getSynonymeGenre2()
    {
        return $this->synonymeGenre2;
    }

    /**
     * Set synonymeEspece2
     *
     * @param string $synonymeEspece2
     * @return BotaniqueTaxon
     */
    public function setSynonymeEspece2($synonymeEspece2)
    {
        $this->synonymeEspece2 = $synonymeEspece2;
    
        return $this;
    }

    /**
     * Get synonymeEspece2
     *
     * @return string 
     */
    public function getSynonymeEspece2()
    {
        return $this->synonymeEspece2;
    }

    /**
     * Set synonymeAuteur2
     *
     * @param string $synonymeAuteur2
     * @return BotaniqueTaxon
     */
    public function setSynonymeAuteur2($synonymeAuteur2)
    {
        $this->synonymeAuteur2 = $synonymeAuteur2;
    
        return $this;
    }

    /**
     * Get synonymeAuteur2
     *
     * @return string 
     */
    public function getSynonymeAuteur2()
    {
        return $this->synonymeAuteur2;
    }

    /**
     * Set synonymeInterspecific2
     *
     * @param string $synonymeInterspecific2
     * @return BotaniqueTaxon
     */
    public function setSynonymeInterspecific2($synonymeInterspecific2)
    {
        $this->synonymeInterspecific2 = $synonymeInterspecific2;
    
        return $this;
    }

    /**
     * Get synonymeInterspecific2
     *
     * @return string 
     */
    public function getSynonymeInterspecific2()
    {
        return $this->synonymeInterspecific2;
    }

    /**
     * Set synonymeSsp2
     *
     * @param string $synonymeSsp2
     * @return BotaniqueTaxon
     */
    public function setSynonymeSsp2($synonymeSsp2)
    {
        $this->synonymeSsp2 = $synonymeSsp2;
    
        return $this;
    }

    /**
     * Get synonymeSsp2
     *
     * @return string 
     */
    public function getSynonymeSsp2()
    {
        return $this->synonymeSsp2;
    }

    /**
     * Set synonymeSspNom2
     *
     * @param string $synonymeSspNom2
     * @return BotaniqueTaxon
     */
    public function setSynonymeSspNom2($synonymeSspNom2)
    {
        $this->synonymeSspNom2 = $synonymeSspNom2;
    
        return $this;
    }

    /**
     * Get synonymeSspNom2
     *
     * @return string 
     */
    public function getSynonymeSspNom2()
    {
        return $this->synonymeSspNom2;
    }

    /**
     * Set synonymeSspAuteur2
     *
     * @param string $synonymeSspAuteur2
     * @return BotaniqueTaxon
     */
    public function setSynonymeSspAuteur2($synonymeSspAuteur2)
    {
        $this->synonymeSspAuteur2 = $synonymeSspAuteur2;
    
        return $this;
    }

    /**
     * Get synonymeSspAuteur2
     *
     * @return string 
     */
    public function getSynonymeSspAuteur2()
    {
        return $this->synonymeSspAuteur2;
    }

    /**
     * Set synonymeIntergeneric3
     *
     * @param string $synonymeIntergeneric3
     * @return BotaniqueTaxon
     */
    public function setSynonymeIntergeneric3($synonymeIntergeneric3)
    {
        $this->synonymeIntergeneric3 = $synonymeIntergeneric3;
    
        return $this;
    }

    /**
     * Get synonymeIntergeneric3
     *
     * @return string 
     */
    public function getSynonymeIntergeneric3()
    {
        return $this->synonymeIntergeneric3;
    }

    /**
     * Set synonymeGenre3
     *
     * @param string $synonymeGenre3
     * @return BotaniqueTaxon
     */
    public function setSynonymeGenre3($synonymeGenre3)
    {
        $this->synonymeGenre3 = $synonymeGenre3;
    
        return $this;
    }

    /**
     * Get synonymeGenre3
     *
     * @return string 
     */
    public function getSynonymeGenre3()
    {
        return $this->synonymeGenre3;
    }

    /**
     * Set synonymeEspece3
     *
     * @param string $synonymeEspece3
     * @return BotaniqueTaxon
     */
    public function setSynonymeEspece3($synonymeEspece3)
    {
        $this->synonymeEspece3 = $synonymeEspece3;
    
        return $this;
    }

    /**
     * Get synonymeEspece3
     *
     * @return string 
     */
    public function getSynonymeEspece3()
    {
        return $this->synonymeEspece3;
    }

    /**
     * Set synonymeAuteur3
     *
     * @param string $synonymeAuteur3
     * @return BotaniqueTaxon
     */
    public function setSynonymeAuteur3($synonymeAuteur3)
    {
        $this->synonymeAuteur3 = $synonymeAuteur3;
    
        return $this;
    }

    /**
     * Get synonymeAuteur3
     *
     * @return string 
     */
    public function getSynonymeAuteur3()
    {
        return $this->synonymeAuteur3;
    }

    /**
     * Set synonymeInterspecific3
     *
     * @param string $synonymeInterspecific3
     * @return BotaniqueTaxon
     */
    public function setSynonymeInterspecific3($synonymeInterspecific3)
    {
        $this->synonymeInterspecific3 = $synonymeInterspecific3;
    
        return $this;
    }

    /**
     * Get synonymeInterspecific3
     *
     * @return string 
     */
    public function getSynonymeInterspecific3()
    {
        return $this->synonymeInterspecific3;
    }

    /**
     * Set synonymeSsp3
     *
     * @param string $synonymeSsp3
     * @return BotaniqueTaxon
     */
    public function setSynonymeSsp3($synonymeSsp3)
    {
        $this->synonymeSsp3 = $synonymeSsp3;
    
        return $this;
    }

    /**
     * Get synonymeSsp3
     *
     * @return string 
     */
    public function getSynonymeSsp3()
    {
        return $this->synonymeSsp3;
    }

    /**
     * Set synonymeSspNom3
     *
     * @param string $synonymeSspNom3
     * @return BotaniqueTaxon
     */
    public function setSynonymeSspNom3($synonymeSspNom3)
    {
        $this->synonymeSspNom3 = $synonymeSspNom3;
    
        return $this;
    }

    /**
     * Get synonymeSspNom3
     *
     * @return string 
     */
    public function getSynonymeSspNom3()
    {
        return $this->synonymeSspNom3;
    }

    /**
     * Set synonymeSspAuteur3
     *
     * @param string $synonymeSspAuteur3
     * @return BotaniqueTaxon
     */
    public function setSynonymeSspAuteur3($synonymeSspAuteur3)
    {
        $this->synonymeSspAuteur3 = $synonymeSspAuteur3;
    
        return $this;
    }

    /**
     * Get synonymeSspAuteur3
     *
     * @return string 
     */
    public function getSynonymeSspAuteur3()
    {
        return $this->synonymeSspAuteur3;
    }

    /**
     * Set nomFr
     *
     * @param string $nomFr
     * @return BotaniqueTaxon
     */
    public function setNomFr($nomFr)
    {
        $this->nomFr = $nomFr;
    
        return $this;
    }

    /**
     * Get nomFr
     *
     * @return string 
     */
    public function getNomFr()
    {
        return $this->nomFr;
    }

    /**
     * Set nomDe
     *
     * @param string $nomDe
     * @return BotaniqueTaxon
     */
    public function setNomDe($nomDe)
    {
        $this->nomDe = $nomDe;
    
        return $this;
    }

    /**
     * Get nomDe
     *
     * @return string 
     */
    public function getNomDe()
    {
        return $this->nomDe;
    }

#    /**
#     * Set croissance
#     *
#     * @param string $croissance
#     * @return BotaniqueTaxon
#     */
#    public function setCroissance($croissance)
#    {
#        $this->croissance = $croissance;
##        $this->croissance = implode(',', $croissance);
#    
#        return $this;
#    }

#    /**
#     * Get croissance
#     *
#     * @return string 
#     */
#    public function getCroissance()
#    {
#        return $this->croissance;
##        return explode(',',$this->croissance);
#    }

    /**
     * Set vieilleCroissance
     *
     * @param string $vieilleCroissance
     * @return BotaniqueTaxon
     */
    public function setVieilleCroissance($vieilleCroissance)
    {
        $this->vieilleCroissance = $vieilleCroissance;
    
        return $this;
    }

    /**
     * Get vieilleCroissance
     *
     * @return string 
     */
    public function getVieilleCroissance()
    {
        return $this->vieilleCroissance;
    }

    /**
     * Set vieilleFloraison
     *
     * @param string $vieilleFloraison
     * @return BotaniqueTaxon
     */
    public function setVieilleFloraison($vieilleFloraison)
    {
        $this->vieilleFloraison = $vieilleFloraison;
    
        return $this;
    }

    /**
     * Get vieilleFloraison
     *
     * @return string 
     */
    public function getVieilleFloraison()
    {
        return $this->vieilleFloraison;
    }

    /**
     * Set complement1
     *
     * @param string $complement1
     * @return BotaniqueTaxon
     */
    public function setComplement1($complement1)
    {
        $this->complement1 = $complement1;
    
        return $this;
    }

    /**
     * Get complement1
     *
     * @return string 
     */
    public function getComplement1()
    {
        return $this->complement1;
    }

    /**
     * Set complement2
     *
     * @param string $complement2
     * @return BotaniqueTaxon
     */
    public function setComplement2($complement2)
    {
        $this->complement2 = $complement2;
    
        return $this;
    }

    /**
     * Get complement2
     *
     * @return string 
     */
    public function getComplement2()
    {
        return $this->complement2;
    }

    /**
     * Set complement3
     *
     * @param string $complement3
     * @return BotaniqueTaxon
     */
    public function setComplement3($complement3)
    {
        $this->complement3 = $complement3;
    
        return $this;
    }

    /**
     * Get complement3
     *
     * @return string 
     */
    public function getComplement3()
    {
        return $this->complement3;
    }

    /**
     * Set complement4
     *
     * @param string $complement4
     * @return BotaniqueTaxon
     */
    public function setComplement4($complement4)
    {
        $this->complement4 = $complement4;
    
        return $this;
    }

    /**
     * Get complement4
     *
     * @return string 
     */
    public function getComplement4()
    {
        return $this->complement4;
    }

    /**
     * Set complement5
     *
     * @param string $complement5
     * @return BotaniqueTaxon
     */
    public function setComplement5($complement5)
    {
        $this->complement5 = $complement5;
    
        return $this;
    }

    /**
     * Get complement5
     *
     * @return string 
     */
    public function getComplement5()
    {
        return $this->complement5;
    }

    /**
     * Set origineAutre
     *
     * @param string $origineAutre
     * @return BotaniqueTaxon
     */
    public function setOrigineAutre($origineAutre)
    {
        $this->origineAutre = $origineAutre;
    
        return $this;
    }

    /**
     * Get origineAutre
     *
     * @return string 
     */
    public function getOrigineAutre()
    {
        return $this->origineAutre;
    }

    /**
     * Set indigene
     *
     * @param string $indigene
     * @return BotaniqueTaxon
     */
    public function setIndigene($indigene)
    {
        $this->indigene = $indigene;
    
        return $this;
    }

    /**
     * Get indigene
     *
     * @return string 
     */
    public function getIndigene()
    {
        return $this->indigene;
    }

    /**
     * Set menace
     *
     * @param string $menace
     * @return BotaniqueTaxon
     */
    public function setMenace($menace)
    {
        $this->menace = $menace;
    
        return $this;
    }

    /**
     * Get menace
     *
     * @return string 
     */
    public function getMenace()
    {
        return $this->menace;
    }

    /**
     * Set protection
     *
     * @param string $protection
     * @return BotaniqueTaxon
     */
    public function setProtection($protection)
    {
        $this->protection = $protection;
    
        return $this;
    }

    /**
     * Get protection
     *
     * @return string 
     */
    public function getProtection()
    {
        return $this->protection;
    }

    /**
     * Set cites
     *
     * @param string $cites
     * @return BotaniqueTaxon
     */
    public function setCites($cites)
    {
        $this->cites = $cites;
    
        return $this;
    }

    /**
     * Get cites
     *
     * @return string 
     */
    public function getCites()
    {
        return $this->cites;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return BotaniqueTaxon
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
     * Set planteMed
     *
     * @param string $planteMed
     * @return BotaniqueTaxon
     */
    public function setPlanteMed($planteMed)
    {
        $this->planteMed = $planteMed;
    
        return $this;
    }

    /**
     * Get planteMed
     *
     * @return string 
     */
    public function getPlanteMed()
    {
        return $this->planteMed;
    }

    /**
     * Set planteMedInfo
     *
     * @param string $planteMedInfo
     * @return BotaniqueTaxon
     */
    public function setPlanteMedInfo($planteMedInfo)
    {
        $this->planteMedInfo = $planteMedInfo;
    
        return $this;
    }

    /**
     * Get planteMedInfo
     *
     * @return string 
     */
    public function getPlanteMedInfo()
    {
        return $this->planteMedInfo;
    }

    /**
     * Set planteUtile
     *
     * @param string $planteUtile
     * @return BotaniqueTaxon
     */
    public function setPlanteUtile($planteUtile)
    {
        $this->planteUtile = $planteUtile;
    
        return $this;
    }

    /**
     * Get planteUtile
     *
     * @return string 
     */
    public function getPlanteUtile()
    {
        return $this->planteUtile;
    }

    /**
     * Set planteUtileInfo
     *
     * @param string $planteUtileInfo
     * @return BotaniqueTaxon
     */
    public function setPlanteUtileInfo($planteUtileInfo)
    {
        $this->planteUtileInfo = $planteUtileInfo;
    
        return $this;
    }

    /**
     * Get planteUtileInfo
     *
     * @return string 
     */
    public function getPlanteUtileInfo()
    {
        return $this->planteUtileInfo;
    }

    /**
     * Set planteTox
     *
     * @param string $planteTox
     * @return BotaniqueTaxon
     */
    public function setPlanteTox($planteTox)
    {
        $this->planteTox = $planteTox;
    
        return $this;
    }

    /**
     * Get planteTox
     *
     * @return string 
     */
    public function getPlanteTox()
    {
        return $this->planteTox;
    }

    /**
     * Set planteToxInfo
     *
     * @param string $planteToxInfo
     * @return BotaniqueTaxon
     */
    public function setPlanteToxInfo($planteToxInfo)
    {
        $this->planteToxInfo = $planteToxInfo;
    
        return $this;
    }

    /**
     * Get planteToxInfo
     *
     * @return string 
     */
    public function getPlanteToxInfo()
    {
        return $this->planteToxInfo;
    }

    /**
     * Set planteType
     *
     * @param string $planteType
     * @return BotaniqueTaxon
     */
    public function setPlanteType($planteType)
    {
        $this->planteType = $planteType;
    
        return $this;
    }

    /**
     * Get planteType
     *
     * @return string 
     */
    public function getPlanteType()
    {
        return $this->planteType;
    }

    /**
     * Set planteAnnee
     *
     * @param string $planteAnnee
     * @return BotaniqueTaxon
     */
    public function setPlanteAnnee($planteAnnee)
    {
        $this->planteAnnee = $planteAnnee;
    
        return $this;
    }

    /**
     * Get planteAnnee
     *
     * @return string 
     */
    public function getPlanteAnnee()
    {
        return $this->planteAnnee;
    }

    /**
     * Set planteType2
     *
     * @param string $planteType2
     * @return BotaniqueTaxon
     */
    public function setPlanteType2($planteType2)
    {
        $this->planteType2 = $planteType2;
    
        return $this;
    }

    /**
     * Get planteType2
     *
     * @return string 
     */
    public function getPlanteType2()
    {
        return $this->planteType2;
    }

    /**
     * Set planteAnnee2
     *
     * @param string $planteAnnee2
     * @return BotaniqueTaxon
     */
    public function setPlanteAnnee2($planteAnnee2)
    {
        $this->planteAnnee2 = $planteAnnee2;
    
        return $this;
    }

    /**
     * Get planteAnnee2
     *
     * @return string 
     */
    public function getPlanteAnnee2()
    {
        return $this->planteAnnee2;
    }

    /**
     * Set planteType3
     *
     * @param string $planteType3
     * @return BotaniqueTaxon
     */
    public function setPlanteType3($planteType3)
    {
        $this->planteType3 = $planteType3;
    
        return $this;
    }

    /**
     * Get planteType3
     *
     * @return string 
     */
    public function getPlanteType3()
    {
        return $this->planteType3;
    }

    /**
     * Set planteAnnee3
     *
     * @param string $planteAnnee3
     * @return BotaniqueTaxon
     */
    public function setPlanteAnnee3($planteAnnee3)
    {
        $this->planteAnnee3 = $planteAnnee3;
    
        return $this;
    }

    /**
     * Get planteAnnee3
     *
     * @return string 
     */
    public function getPlanteAnnee3()
    {
        return $this->planteAnnee3;
    }

    /**
     * Set planteType4
     *
     * @param string $planteType4
     * @return BotaniqueTaxon
     */
    public function setPlanteType4($planteType4)
    {
        $this->planteType4 = $planteType4;
    
        return $this;
    }

    /**
     * Get planteType4
     *
     * @return string 
     */
    public function getPlanteType4()
    {
        return $this->planteType4;
    }

    /**
     * Set planteAnnee4
     *
     * @param string $planteAnnee4
     * @return BotaniqueTaxon
     */
    public function setPlanteAnnee4($planteAnnee4)
    {
        $this->planteAnnee4 = $planteAnnee4;
    
        return $this;
    }

    /**
     * Get planteAnnee4
     *
     * @return string 
     */
    public function getPlanteAnnee4()
    {
        return $this->planteAnnee4;
    }

    /**
     * Set planteType5
     *
     * @param string $planteType5
     * @return BotaniqueTaxon
     */
    public function setPlanteType5($planteType5)
    {
        $this->planteType5 = $planteType5;
    
        return $this;
    }

    /**
     * Get planteType5
     *
     * @return string 
     */
    public function getPlanteType5()
    {
        return $this->planteType5;
    }

    /**
     * Set planteAnnee5
     *
     * @param string $planteAnnee5
     * @return BotaniqueTaxon
     */
    public function setPlanteAnnee5($planteAnnee5)
    {
        $this->planteAnnee5 = $planteAnnee5;
    
        return $this;
    }

    /**
     * Get planteAnnee5
     *
     * @return string 
     */
    public function getPlanteAnnee5()
    {
        return $this->planteAnnee5;
    }

    /**
     * Set planteType6
     *
     * @param string $planteType6
     * @return BotaniqueTaxon
     */
    public function setPlanteType6($planteType6)
    {
        $this->planteType6 = $planteType6;
    
        return $this;
    }

    /**
     * Get planteType6
     *
     * @return string 
     */
    public function getPlanteType6()
    {
        return $this->planteType6;
    }

    /**
     * Set planteAnnee6
     *
     * @param string $planteAnnee6
     * @return BotaniqueTaxon
     */
    public function setPlanteAnnee6($planteAnnee6)
    {
        $this->planteAnnee6 = $planteAnnee6;
    
        return $this;
    }

    /**
     * Get planteAnnee6
     *
     * @return string 
     */
    public function getPlanteAnnee6()
    {
        return $this->planteAnnee6;
    }

    /**
     * Set planteType7
     *
     * @param string $planteType7
     * @return BotaniqueTaxon
     */
    public function setPlanteType7($planteType7)
    {
        $this->planteType7 = $planteType7;
    
        return $this;
    }

    /**
     * Get planteType7
     *
     * @return string 
     */
    public function getPlanteType7()
    {
        return $this->planteType7;
    }

    /**
     * Set planteAnnee7
     *
     * @param string $planteAnnee7
     * @return BotaniqueTaxon
     */
    public function setPlanteAnnee7($planteAnnee7)
    {
        $this->planteAnnee7 = $planteAnnee7;
    
        return $this;
    }

    /**
     * Get planteAnnee7
     *
     * @return string 
     */
    public function getPlanteAnnee7()
    {
        return $this->planteAnnee7;
    }

    /**
     * Set planteTypeInfo
     *
     * @param boolean $planteTypeInfo
     * @return BotaniqueTaxon
     */
    public function setPlanteTypeInfo($planteTypeInfo)
    {
        $this->planteTypeInfo = $planteTypeInfo;
    
        return $this;
    }

    /**
     * Get planteTypeInfo
     *
     * @return boolean 
     */
    public function getPlanteTypeInfo()
    {
        return $this->planteTypeInfo;
    }

    /**
     * Set planteMeli
     *
     * @param string $planteMeli
     * @return BotaniqueTaxon
     */
    public function setPlanteMeli($planteMeli)
    {
        $this->planteMeli = $planteMeli;
    
        return $this;
    }

    /**
     * Get planteMeli
     *
     * @return string 
     */
    public function getPlanteMeli()
    {
        return $this->planteMeli;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return BotaniqueTaxon
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;
    
        return $this;
    }

    /**
     * Get remarques
     *
     * @return string 
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * Set controle
     *
     * @param string $controle
     * @return BotaniqueTaxon
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
     * Set biblio
     *
     * @param integer $biblio
     * @return BotaniqueTaxon
     */
    public function setBiblio($biblio)
    {
        $this->biblio = $biblio;
    
        return $this;
    }

    /**
     * Get biblio
     *
     * @return integer 
     */
    public function getBiblio()
    {
        return $this->biblio;
    }

    /**
     * Set semis
     *
     * @param string $semis
     * @return BotaniqueTaxon
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
     * Set melangeTerreNum
     *
     * @param string $melangeTerreNum
     * @return BotaniqueTaxon
     */
    public function setMelangeTerreNum($melangeTerreNum)
    {
        $this->melangeTerreNum = $melangeTerreNum;
    
        return $this;
    }

    /**
     * Get melangeTerreNum
     *
     * @return string 
     */
    public function getMelangeTerreNum()
    {
        return $this->melangeTerreNum;
    }

    /**
     * Set melangeTerre
     *
     * @param string $melangeTerre
     * @return BotaniqueTaxon
     */
    public function setMelangeTerre($melangeTerre)
    {
        $this->melangeTerre = $melangeTerre;
    
        return $this;
    }

    /**
     * Get melangeTerre
     *
     * @return string 
     */
    public function getMelangeTerre()
    {
        return $this->melangeTerre;
    }

    /**
     * Set multiplication
     *
     * @param string $multiplication
     * @return BotaniqueTaxon
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
     * @return BotaniqueTaxon
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
     * @return BotaniqueTaxon
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
     * @return BotaniqueTaxon
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
     * Set remarquesCulture
     *
     * @param string $remarquesCulture
     * @return BotaniqueTaxon
     */
    public function setRemarquesCulture($remarquesCulture)
    {
        $this->remarquesCulture = $remarquesCulture;
    
        return $this;
    }

    /**
     * Get remarquesCulture
     *
     * @return string 
     */
    public function getRemarquesCulture()
    {
        return $this->remarquesCulture;
    }

    /**
     * Set marchePrintemps
     *
     * @param string $marchePrintemps
     * @return BotaniqueTaxon
     */
    public function setMarchePrintemps($marchePrintemps)
    {
        $this->marchePrintemps = $marchePrintemps;
    
        return $this;
    }

    /**
     * Get marchePrintemps
     *
     * @return string 
     */
    public function getMarchePrintemps()
    {
        return $this->marchePrintemps;
    }

    /**
     * Set marchePrix
     *
     * @param string $marchePrix
     * @return BotaniqueTaxon
     */
    public function setMarchePrix($marchePrix)
    {
        $this->marchePrix = $marchePrix;
    
        return $this;
    }

    /**
     * Get marchePrix
     *
     * @return string 
     */
    public function getMarchePrix()
    {
        return $this->marchePrix;
    }

    /**
     * Set marcheEtiquette
     *
     * @param string $marcheEtiquette
     * @return BotaniqueTaxon
     */
    public function setMarcheEtiquette($marcheEtiquette)
    {
        $this->marcheEtiquette = $marcheEtiquette;
    
        return $this;
    }

    /**
     * Get marcheEtiquette
     *
     * @return string 
     */
    public function getMarcheEtiquette()
    {
        return $this->marcheEtiquette;
    }

    /**
     * Set travaux
     *
     * @param string $travaux
     * @return BotaniqueTaxon
     */
    public function setTravaux($travaux)
    {
        $this->travaux = $travaux;
    
        return $this;
    }

    /**
     * Get travaux
     *
     * @return string 
     */
    public function getTravaux()
    {
        return $this->travaux;
    }

    /**
     * Set updated
     *
     * @param string $updated
     * @return BotaniqueTaxon
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return string 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set famille1
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueFamille $famille1
     * @return BotaniqueTaxon
     */
    public function setFamille1(\NTE\BogartBundle\Entity\BotaniqueFamille $famille1 = null)
    {
        $this->famille1 = $famille1;
    
        return $this;
    }

    /**
     * Get famille1
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueFamille 
     */
    public function getFamille1()
    {
        return $this->famille1;
    }

    /**
     * Set famille2
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueFamilleSynonyme $famille2
     * @return BotaniqueTaxon
     */
    public function setFamille2(\NTE\BogartBundle\Entity\BotaniqueFamilleSynonyme $famille2 = null)
    {
        $this->famille2 = $famille2;
    
        return $this;
    }

    /**
     * Get famille2
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueFamilleSynonyme 
     */
    public function getFamille2()
    {
        return $this->famille2;
    }

    /**
     * Set genre
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueGenre $genre
     * @return BotaniqueTaxon
     */
    public function setGenre(\NTE\BogartBundle\Entity\BotaniqueGenre $genre = null)
    {
        $this->genre = $genre;
    
        return $this;
    }

    /**
     * Get genre
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueGenre 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set origine1
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueOrigine $origine1
     * @return BotaniqueTaxon
     */
    public function setOrigine1(\NTE\BogartBundle\Entity\BotaniqueOrigine $origine1 = null)
    {
        $this->origine1 = $origine1;
    
        return $this;
    }

    /**
     * Get origine1
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueOrigine 
     */
    public function getOrigine1()
    {
        return $this->origine1;
    }

    /**
     * Set origine2
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueOrigine $origine2
     * @return BotaniqueTaxon
     */
    public function setOrigine2(\NTE\BogartBundle\Entity\BotaniqueOrigine $origine2 = null)
    {
        $this->origine2 = $origine2;
    
        return $this;
    }

    /**
     * Get origine2
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueOrigine 
     */
    public function getOrigine2()
    {
        return $this->origine2;
    }

    /**
     * Set origine3
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueOrigine $origine3
     * @return BotaniqueTaxon
     */
    public function setOrigine3(\NTE\BogartBundle\Entity\BotaniqueOrigine $origine3 = null)
    {
        $this->origine3 = $origine3;
    
        return $this;
    }

    /**
     * Get origine3
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueOrigine 
     */
    public function getOrigine3()
    {
        return $this->origine3;
    }

    /**
     * Set origine4
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueOrigine $origine4
     * @return BotaniqueTaxon
     */
    public function setOrigine4(\NTE\BogartBundle\Entity\BotaniqueOrigine $origine4 = null)
    {
        $this->origine4 = $origine4;
    
        return $this;
    }

    /**
     * Get origine4
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueOrigine 
     */
    public function getOrigine4()
    {
        return $this->origine4;
    }

    /**
     * Set origine5
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueOrigine $origine5
     * @return BotaniqueTaxon
     */
    public function setOrigine5(\NTE\BogartBundle\Entity\BotaniqueOrigine $origine5 = null)
    {
        $this->origine5 = $origine5;
    
        return $this;
    }

    /**
     * Get origine5
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueOrigine 
     */
    public function getOrigine5()
    {
        return $this->origine5;
    }

    /**
     * Set planteBiblio
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio
     * @return BotaniqueTaxon
     */
    public function setPlanteBiblio(\NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio = null)
    {
        $this->planteBiblio = $planteBiblio;
    
        return $this;
    }

    /**
     * Get planteBiblio
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueBiblio 
     */
    public function getPlanteBiblio()
    {
        return $this->planteBiblio;
    }

    /**
     * Set planteBiblio2
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio2
     * @return BotaniqueTaxon
     */
    public function setPlanteBiblio2(\NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio2 = null)
    {
        $this->planteBiblio2 = $planteBiblio2;
    
        return $this;
    }

    /**
     * Get planteBiblio2
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueBiblio 
     */
    public function getPlanteBiblio2()
    {
        return $this->planteBiblio2;
    }

    /**
     * Set planteBiblio3
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio3
     * @return BotaniqueTaxon
     */
    public function setPlanteBiblio3(\NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio3 = null)
    {
        $this->planteBiblio3 = $planteBiblio3;
    
        return $this;
    }

    /**
     * Get planteBiblio3
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueBiblio 
     */
    public function getPlanteBiblio3()
    {
        return $this->planteBiblio3;
    }

    /**
     * Set planteBiblio4
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio4
     * @return BotaniqueTaxon
     */
    public function setPlanteBiblio4(\NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio4 = null)
    {
        $this->planteBiblio4 = $planteBiblio4;
    
        return $this;
    }

    /**
     * Get planteBiblio4
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueBiblio 
     */
    public function getPlanteBiblio4()
    {
        return $this->planteBiblio4;
    }

    /**
     * Set planteBiblio5
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio5
     * @return BotaniqueTaxon
     */
    public function setPlanteBiblio5(\NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio5 = null)
    {
        $this->planteBiblio5 = $planteBiblio5;
    
        return $this;
    }

    /**
     * Get planteBiblio5
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueBiblio 
     */
    public function getPlanteBiblio5()
    {
        return $this->planteBiblio5;
    }

    /**
     * Set planteBiblio6
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio6
     * @return BotaniqueTaxon
     */
    public function setPlanteBiblio6(\NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio6 = null)
    {
        $this->planteBiblio6 = $planteBiblio6;
    
        return $this;
    }

    /**
     * Get planteBiblio6
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueBiblio 
     */
    public function getPlanteBiblio6()
    {
        return $this->planteBiblio6;
    }

    /**
     * Set planteBiblio7
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio7
     * @return BotaniqueTaxon
     */
    public function setPlanteBiblio7(\NTE\BogartBundle\Entity\BotaniqueBiblio $planteBiblio7 = null)
    {
        $this->planteBiblio7 = $planteBiblio7;
    
        return $this;
    }

    /**
     * Get planteBiblio7
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueBiblio 
     */
    public function getPlanteBiblio7()
    {
        return $this->planteBiblio7;
    }

    /**
     * Set croissance
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueCroissance $croissance
     * @return BotaniqueTaxon
     */
    public function setCroissance(\NTE\BogartBundle\Entity\BotaniqueCroissance $croissance = null)
    {
        $this->croissance = $croissance;
    
        return $this;
    }

    /**
     * Get croissance
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueCroissance 
     */
    public function getCroissance()
    {
        return $this->croissance;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->croissance = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add croissance
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueCroissance $croissance
     * @return BotaniqueTaxon
     */
    public function addCroissance(\NTE\BogartBundle\Entity\BotaniqueCroissance $croissance)
    {
        $this->croissance[] = $croissance;
    
        return $this;
    }

    /**
     * Remove croissance
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueCroissance $croissance
     */
    public function removeCroissance(\NTE\BogartBundle\Entity\BotaniqueCroissance $croissance)
    {
        $this->croissance->removeElement($croissance);
    }

    /**
     * Set floraison
     *
     * @return BotaniqueTaxon
     */
    public function setFloraison($floraison)
    {
        $this->floraison = $floraison;
    
        return $this;
    }

    /**
     * Get floraison
     *
     */
    public function getFloraison()
    {
        return $this->floraison;
    }

    /**
     * Add accessions
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueAccession $accessions
     * @return BotaniqueTaxon
     */
    public function addAccession(\NTE\BogartBundle\Entity\BotaniqueAccession $accessions)
    {
        $this->accessions[] = $accessions;
    
        return $this;
    }

    /**
     * Remove accessions
     *
     * @param \NTE\BogartBundle\Entity\Accession $accessions
     */
    public function removeAccession(\NTE\BogartBundle\Entity\BotaniqueAccession $accessions)
    {
        $this->accessions->removeElement($accessions);
    }

    /**
     * Get accessions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccessions()
    {
        return $this->accessions;
    }

    /**
     * Set origineFr
     *
     * @param string $origineFr
     * @return BotaniqueTaxon
     */
    public function setOrigineFr($origineFr)
    {
        $this->origineFr = $origineFr;
    
        return $this;
    }

    /**
     * Get origineFr
     *
     * @return string 
     */
    public function getOrigineFr()
    {
        return $this->origineFr;
    }

    /**
     * Set origineDe
     *
     * @param string $origineDe
     * @return BotaniqueTaxon
     */
    public function setOrigineDe($origineDe)
    {
        $this->origineDe = $origineDe;
    
        return $this;
    }

    /**
     * Get origineDe
     *
     * @return string 
     */
    public function getOrigineDe()
    {
        return $this->origineDe;
    }

    /**
     * Set habitatFr
     *
     * @param string $habitatFr
     * @return BotaniqueTaxon
     */
    public function setHabitatFr($habitatFr)
    {
        $this->habitatFr = $habitatFr;
    
        return $this;
    }

    /**
     * Get habitatFr
     *
     * @return string 
     */
    public function getHabitatFr()
    {
        return $this->habitatFr;
    }

    /**
     * Set habitatDe
     *
     * @param string $habitatDe
     * @return BotaniqueTaxon
     */
    public function setHabitatDe($habitatDe)
    {
        $this->habitatDe = $habitatDe;
    
        return $this;
    }

    /**
     * Get habitatDe
     *
     * @return string 
     */
    public function getHabitatDe()
    {
        return $this->habitatDe;
    }

    /**
     * Set remarqueFr
     *
     * @param string $remarqueFr
     * @return BotaniqueTaxon
     */
    public function setRemarqueFr($remarqueFr)
    {
        $this->remarqueFr = $remarqueFr;
    
        return $this;
    }

    /**
     * Get remarqueFr
     *
     * @return string 
     */
    public function getRemarqueFr()
    {
        return $this->remarqueFr;
    }

    /**
     * Set remarqueDe
     *
     * @param string $remarqueDe
     * @return BotaniqueTaxon
     */
    public function setRemarqueDe($remarqueDe)
    {
        $this->remarqueDe = $remarqueDe;
    
        return $this;
    }

    /**
     * Get remarqueDe
     *
     * @return string 
     */
    public function getRemarqueDe()
    {
        return $this->remarqueDe;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return BotaniqueTaxon
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
     * Set parcours
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueParcours $parcours
     * @return BotaniqueTaxon
     */
    public function setParcours(\NTE\BogartBundle\Entity\BotaniqueParcours $parcours = null)
    {
        $this->parcours = $parcours;
    
        return $this;
    }

    /**
     * Get parcours
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueParcours 
     */
    public function getParcours()
    {
        return $this->parcours;
    }

    /**
     * Add parcours
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueParcours $parcours
     * @return BotaniqueTaxon
     */
    public function addParcour(\NTE\BogartBundle\Entity\BotaniqueParcours $parcours)
    {
        $this->parcours[] = $parcours;
    
        return $this;
    }

    /**
     * Remove parcours
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueParcours $parcours
     */
    public function removeParcour(\NTE\BogartBundle\Entity\BotaniqueParcours $parcours)
    {
        $this->parcours->removeElement($parcours);
    }

    /**
     * Add parcoursposition
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueParcoursPosition $parcoursposition
     * @return BotaniqueTaxon
     */
    public function addParcoursposition(\NTE\BogartBundle\Entity\BotaniqueParcoursPosition $parcoursposition)
    {
        $parcoursposition->setTaxon($this); # pour la collection dans le formulaire
        $this->parcoursposition[] = $parcoursposition;
    
        return $this;
    }

    /**
     * Remove parcoursposition
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueParcoursPosition $parcoursposition
     */
    public function removeParcoursposition(\NTE\BogartBundle\Entity\BotaniqueParcoursPosition $parcoursposition)
    {
        $this->parcoursposition->removeElement($parcoursposition);
    }

    /**
     * Get parcoursposition
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParcoursposition()
    {
        return $this->parcoursposition;
    }

    /**
     * Add fichiers
     *
     * @param BotaniqueFichierTaxon $fichiers
     * @return BotaniqueTaxon
     */
    public function addFichier(BotaniqueFichierTaxon $fichiers)
    {
        $fichiers->setTaxon($this); # pour la collection dans le formulaire
        $this->fichiers[] = $fichiers;
    
        return $this;
    }

    /**
     * Remove fichiers
     *
     * @param BotaniqueFichierTaxon $fichiers
     */
    public function removeFichier(BotaniqueFichierTaxon $fichiers)
    {
        $this->fichiers->removeElement($fichiers);
    }

    /**
     * Get fichiers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFichiers()
    {
        return $this->fichiers;
    }

    /**
     * Set synonyme
     *
     * @param string $synonyme
     * @return BotaniqueTaxon
     */
    public function setSynonyme($synonyme)
    {
        $this->synonyme = $this->synonymeIntergeneric . " " . $this->synonymeGenre . " " . $this->synonymeEspece . " " . $this->synonymeAuteur . " " . $this->synonymeInterspecific . " " . $this->synonymeSsp . " ". " " . $this->synonymeSspNom . " " . $this->synonymeSspAuteur . ", " .
                            $this->synonymeIntergeneric2 . " " . $this->synonymeGenre2 . " " . $this->synonymeEspece2 . " " . $this->synonymeAuteur2 . " " . $this->synonymeInterspecific2 . " " . $this->synonymeSsp2 . " ". " " . $this->synonymeSspNom2 . " " . $this->synonymeSspAuteur2 . ", ".
                            $this->synonymeIntergeneric3 . " " . $this->synonymeGenre3 . " " . $this->synonymeEspece3 . " " . $this->synonymeAuteur3 . " " . $this->synonymeInterspecific3 . " " . $this->synonymeSsp3 . " ". " " . $this->synonymeSspNom3 . " " . $this->synonymeSspAuteur3;
    
        return $this;
    }

    /**
     * Get synonyme
     *
     * @return string 
     */
    public function getSynonyme()
    {
        return $this->synonyme;
    }

    /**
     * Add collections
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueCollection $collections
     * @return BotaniqueTaxon
     */
    public function addCollection(\NTE\BogartBundle\Entity\BotaniqueCollection $collections)
    {
        $this->collections[] = $collections;
    
        return $this;
    }

    /**
     * Remove collections
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueCollection $collections
     */
    public function removeCollection(\NTE\BogartBundle\Entity\BotaniqueCollection $collections)
    {
        $this->collections->removeElement($collections);
    }

    /**
     * Get collections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCollections()
    {
        return $this->collections;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return BotaniqueTaxon
     */
    public function setPublic($public)
    {
        $this->public = $public;
    
        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }
}