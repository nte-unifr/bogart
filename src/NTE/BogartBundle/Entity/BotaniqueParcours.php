<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parcours
 *
 * @ORM\Table(name="botanique_parcours")
 * @ORM\Entity
 */
class BotaniqueParcours
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
     * @var string
     *
     * @ORM\Column(name="nom_fr", type="string", length=255)
     */
    private $nom_fr;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_de", type="string", length=255)
     */
    private $nom_de;

    /**
     * @ORM\OneToMany(targetEntity="BotaniqueParcoursPosition", mappedBy="parcours", cascade={"persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"numero" = "ASC"})
     */
    private $parcoursposition;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=true)
     */
    private $actif;

    /**
     * @var Image
     *
     * @ORM\OneToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"all"})
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255, nullable=true)
     */
    private $couleur = 'FFFFFF';



    public function __toString()
	{
	    return (string)$this->nom_fr . " / " . $this->nom_de;
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
     * Set nom_fr
     *
     * @param string $nomFr
     * @return BotaniqueParcours
     */
    public function setNomFr($nomFr)
    {
        $this->nom_fr = $nomFr;
    
        return $this;
    }

    /**
     * Get nom_fr
     *
     * @return string 
     */
    public function getNomFr()
    {
        return $this->nom_fr;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return BotaniqueParcours
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
     * Set nom_de
     *
     * @param string $nomDe
     * @return BotaniqueParcours
     */
    public function setNomDe($nomDe)
    {
        $this->nom_de = $nomDe;
    
        return $this;
    }

    /**
     * Get nom_de
     *
     * @return string 
     */
    public function getNomDe()
    {
        return $this->nom_de;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parcoursposition = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add parcoursposition
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueParcoursPosition $parcoursposition
     * @return BotaniqueParcours
     */
    public function addParcoursposition(\NTE\BogartBundle\Entity\BotaniqueParcoursPosition $parcoursposition)
    {
        $parcoursposition->setParcours($this); # pour la collection dans le formulaire
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
     * Set actif
     *
     * @param boolean $actif
     * @return BotaniqueParcours
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    
        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     * @return BotaniqueParcours
     */
    public function setImage(\Application\Sonata\MediaBundle\Entity\Media $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     * @return BotaniqueParcours
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    
        return $this;
    }

    /**
     * Get couleur
     *
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }
}