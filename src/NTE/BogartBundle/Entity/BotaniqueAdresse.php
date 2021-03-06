<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueAdresse
 *
 * @ORM\Table(name="botanique_adresse")
 * @ORM\Entity
 */
class BotaniqueAdresse
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
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="institution", type="string", length=255, nullable=true)
     */
    private $institution;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="npa", type="string", length=255, nullable=true)
     */
    private $npa;

    /**
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=255, nullable=true)
     */
    private $localite;

    /**
     * @var string
     *
     * @ORM\Column(name="zusatz", type="string", length=255, nullable=true)
     */
    private $zusatz;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="natel", type="string", length=255, nullable=true)
     */
    private $natel;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier", type="string", length=255, nullable=false)
     */
    private $fichier;

    /**
     * @var string
     *
     * @ORM\Column(name="index_internet", type="string", length=255, nullable=true)
     */
    private $indexInternet;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text", nullable=true)
     */
    private $remarques;

    /**
     * @var string
     *
     * @ORM\Column(name="ipen", type="string", length=255, nullable=true)
     */
    private $ipen;

    /**
     * @var string
     *
     * @ORM\Column(name="envoi_is", type="string", length=255, nullable=true)
     */
    private $envoiIs;

    /**
     * @var string
     *
     * @ORM\Column(name="is_type", type="string", length=255, nullable=true)
     */
    private $isType;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="envoi", type="string", length=255, nullable=true)
     */
    private $envoi;

    /**
     * @var string
     *
     * @ORM\Column(name="recu", type="string", length=255, nullable=true)
     */
    private $recu;

    /**
     * @var \BotaniquePays
     *
     * @ORM\ManyToOne(targetEntity="BotaniquePays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pays", referencedColumnName="id")
     * })
     */
    private $pays;

    /**
     * @ORM\OneToMany(targetEntity="BotaniqueGraineStatistique", mappedBy="id_adresse", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"annee" = "DESC"})
     */
    private $statistiques;

    /**
     * @ORM\OneToMany(targetEntity="BotaniqueAccession", mappedBy="idFournisseur", cascade={"persist"})
     */
    private $accessions;


    public function __toString()
	{
	    return (string)($this->filemakerNum . " " . $this->fichier);
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
     * @return BotaniqueAdresse
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
     * Set titre
     *
     * @param string $titre
     * @return BotaniqueAdresse
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set institution
     *
     * @param string $institution
     * @return BotaniqueAdresse
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Get institution
     *
     * @return string
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return BotaniqueAdresse
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
     * Set adresse
     *
     * @param string $adresse
     * @return BotaniqueAdresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set npa
     *
     * @param string $npa
     * @return BotaniqueAdresse
     */
    public function setNpa($npa)
    {
        $this->npa = $npa;

        return $this;
    }

    /**
     * Get npa
     *
     * @return string
     */
    public function getNpa()
    {
        return $this->npa;
    }

    /**
     * Set localite
     *
     * @param string $localite
     * @return BotaniqueAdresse
     */
    public function setLocalite($localite)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return string
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set zusatz
     *
     * @param string $zusatz
     * @return BotaniqueAdresse
     */
    public function setZusatz($zusatz)
    {
        $this->zusatz = $zusatz;

        return $this;
    }

    /**
     * Get zusatz
     *
     * @return string
     */
    public function getZusatz()
    {
        return $this->zusatz;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return BotaniqueAdresse
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return BotaniqueAdresse
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return BotaniqueAdresse
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set natel
     *
     * @param string $natel
     * @return BotaniqueAdresse
     */
    public function setNatel($natel)
    {
        $this->natel = $natel;

        return $this;
    }

    /**
     * Get natel
     *
     * @return string
     */
    public function getNatel()
    {
        return $this->natel;
    }

    /**
     * Set fichier
     *
     * @param string $fichier
     * @return BotaniqueAdresse
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return string
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set indexInternet
     *
     * @param string $indexInternet
     * @return BotaniqueAdresse
     */
    public function setIndexInternet($indexInternet)
    {
        $this->indexInternet = $indexInternet;

        return $this;
    }

    /**
     * Get indexInternet
     *
     * @return string
     */
    public function getIndexInternet()
    {
        return $this->indexInternet;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return BotaniqueAdresse
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
     * Set ipen
     *
     * @param string $ipen
     * @return BotaniqueAdresse
     */
    public function setIpen($ipen)
    {
        $this->ipen = $ipen;

        return $this;
    }

    /**
     * Get ipen
     *
     * @return string
     */
    public function getIpen()
    {
        return $this->ipen;
    }

    /**
     * Set envoiIs
     *
     * @param string $envoiIs
     * @return BotaniqueAdresse
     */
    public function setEnvoiIs($envoiIs)
    {
        $this->envoiIs = $envoiIs;

        return $this;
    }

    /**
     * Get envoiIs
     *
     * @return string
     */
    public function getEnvoiIs()
    {
        return $this->envoiIs;
    }

    /**
     * Set isType
     *
     * @param string $isType
     * @return BotaniqueAdresse
     */
    public function setIsType($isType)
    {
        $this->isType = $isType;

        return $this;
    }

    /**
     * Get isType
     *
     * @return string
     */
    public function getIsType()
    {
        return $this->isType;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return BotaniqueAdresse
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set envoi
     *
     * @param string $envoi
     * @return BotaniqueAdresse
     */
    public function setEnvoi($envoi)
    {
        $this->envoi = $envoi;

        return $this;
    }

    /**
     * Get envoi
     *
     * @return string
     */
    public function getEnvoi()
    {
        return $this->envoi;
    }

    /**
     * Set recu
     *
     * @param string $recu
     * @return BotaniqueAdresse
     */
    public function setRecu($recu)
    {
        $this->recu = $recu;

        return $this;
    }

    /**
     * Get recu
     *
     * @return string
     */
    public function getRecu()
    {
        return $this->recu;
    }

    /**
     * Set pays
     *
     * @param \NTE\BogartBundle\Entity\BotaniquePays $pays
     * @return BotaniqueAdresse
     */
    public function setPays(\NTE\BogartBundle\Entity\BotaniquePays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \NTE\BogartBundle\Entity\BotaniquePays
     */
    public function getPays()
    {
        return $this->pays;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->statistiques = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add statistiques
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueGraineStatistique $statistiques
     * @return BotaniqueAdresse
     */
    public function addStatistique(\NTE\BogartBundle\Entity\BotaniqueGraineStatistique $statistiques)
    {
        $statistiques->setIdAdresse($this); # pour la collection dans le formulaire
        $statistiques->setFichier($this->getFichier());
        $this->statistiques[] = $statistiques;

        return $this;
    }

    /**
     * Remove statistiques
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueGraineStatistique $statistiques
     */
    public function removeStatistique(\NTE\BogartBundle\Entity\BotaniqueGraineStatistique $statistiques)
    {
        $this->statistiques->removeElement($statistiques);
    }

    /**
     * Get statistiques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatistiques()
    {
        return $this->statistiques;
    }

    /**
     * Add accessions
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueAccession $accessions
     * @return BotaniqueAdresse
     */
    public function addAccession(\NTE\BogartBundle\Entity\BotaniqueAccession $accessions)
    {
        $this->accessions[] = $accessions;

        return $this;
    }

    /**
     * Remove accessions
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueAccession $accessions
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
}
