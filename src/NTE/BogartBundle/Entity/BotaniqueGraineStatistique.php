<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueGraineStatistique
 *
 * @ORM\Table(name="botanique_graine_statistique")
 * @ORM\Entity
 */
class BotaniqueGraineStatistique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="filemaker_num", type="integer", nullable=true)
     */
    private $filemaker_num;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier", type="string", length=255)
     */
    private $fichier;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", nullable=true)
     */
    private $annee;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_recu", type="integer", nullable=true)
     */
    private $cat_recu;

    /**
     * @var integer
     *
     * @ORM\Column(name="gra_com", type="integer", nullable=true)
     */
    private $gra_com;

    /**
     * @var integer
     *
     * @ORM\Column(name="gra_recu", type="integer", nullable=true)
     */
    private $gra_recu;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_envoy", type="integer", nullable=true)
     */
    private $cat_envoy;

    /**
     * @var integer
     *
     * @ORM\Column(name="gra_envoy", type="integer", nullable=true)
     */
    private $gra_envoy;

    /**
     * @var \BotaniqueAdresse
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueAdresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adresse", referencedColumnName="id", nullable=true)
     * })
     */
    private $id_adresse;


    public function __toString()
	{
	    return (string)$this->fichier . " - " .  $this->annee . " - " .  $this->cat_recu . " - " .  $this->gra_com . " - " .  $this->gra_recu . " - " .  $this->cat_envoy . " - " .  $this->gra_envoy;
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
     * Set filemaker_num
     *
     * @param integer $filemakerNum
     * @return BotaniqueGraineStatistique
     */
    public function setFilemakerNum($filemakerNum)
    {
        $this->filemaker_num = $filemakerNum;
    
        return $this;
    }

    /**
     * Get filemaker_num
     *
     * @return integer 
     */
    public function getFilemakerNum()
    {
        return $this->filemaker_num;
    }

    /**
     * Set fichier
     *
     * @param string $fichier
     * @return BotaniqueGraineStatistique
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
     * Set annee
     *
     * @param integer $annee
     * @return BotaniqueGraineStatistique
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
     * Set cat_recu
     *
     * @param integer $catRecu
     * @return BotaniqueGraineStatistique
     */
    public function setCatRecu($catRecu)
    {
        $this->cat_recu = $catRecu;
    
        return $this;
    }

    /**
     * Get cat_recu
     *
     * @return integer 
     */
    public function getCatRecu()
    {
        return $this->cat_recu;
    }

    /**
     * Set gra_com
     *
     * @param integer $graCom
     * @return BotaniqueGraineStatistique
     */
    public function setGraCom($graCom)
    {
        $this->gra_com = $graCom;
    
        return $this;
    }

    /**
     * Get gra_com
     *
     * @return integer 
     */
    public function getGraCom()
    {
        return $this->gra_com;
    }

    /**
     * Set gra_recu
     *
     * @param integer $graRecu
     * @return BotaniqueGraineStatistique
     */
    public function setGraRecu($graRecu)
    {
        $this->gra_recu = $graRecu;
    
        return $this;
    }

    /**
     * Get gra_recu
     *
     * @return integer 
     */
    public function getGraRecu()
    {
        return $this->gra_recu;
    }

    /**
     * Set cat_envoy
     *
     * @param integer $catEnvoy
     * @return BotaniqueGraineStatistique
     */
    public function setCatEnvoy($catEnvoy)
    {
        $this->cat_envoy = $catEnvoy;
    
        return $this;
    }

    /**
     * Get cat_envoy
     *
     * @return integer 
     */
    public function getCatEnvoy()
    {
        return $this->cat_envoy;
    }

    /**
     * Set gra_envoy
     *
     * @param integer $graEnvoy
     * @return BotaniqueGraineStatistique
     */
    public function setGraEnvoy($graEnvoy)
    {
        $this->gra_envoy = $graEnvoy;
    
        return $this;
    }

    /**
     * Get gra_envoy
     *
     * @return integer 
     */
    public function getGraEnvoy()
    {
        return $this->gra_envoy;
    }

    /**
     * Set id_adresse
     *
     * @param integer $idAdresse
     * @return BotaniqueGraineStatistique
     */
    public function setIdAdresse($idAdresse)
    {
        $this->id_adresse = $idAdresse;
    
        return $this;
    }

    /**
     * Get id_adresse
     *
     * @return integer 
     */
    public function getIdAdresse()
    {
        return $this->id_adresse;
    }
}
