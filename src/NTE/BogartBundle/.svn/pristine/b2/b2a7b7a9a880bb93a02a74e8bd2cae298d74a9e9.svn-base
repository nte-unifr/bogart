<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BotaniqueCroissance
 *
 * @ORM\Table(name="botanique_croissance")
 * @ORM\Entity
 */
class BotaniqueCroissance
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;
    
    /**
     * @var Fichier
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"all"})
     */
    private $fichier;



    public function __toString()
	{
	    return (string)$this->getNom()."";
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
     * Set fichier
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $fichier
     * @return BotaniqueCroissance
     */
    public function setFichier(\Application\Sonata\MediaBundle\Entity\Media $fichier = null)
    {
        $this->fichier = $fichier;
    
        return $this;
    }

    /**
     * Get fichier
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return BotaniqueCroissance
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
}
