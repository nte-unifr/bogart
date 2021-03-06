<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BotaniqueCroissance
 *
 * @ORM\Table(name="botanique_categorie")
 * @ORM\Entity
 */
class BotaniqueCategorie
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
     * @ORM\ManyToMany(targetEntity="BotaniqueTaxon", mappedBy="categories")
     */
    private $taxons;


    public function __toString()
	{
	    return (string)$this->getNom()."";
	}



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->taxons = new ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return BotaniqueCategorie
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
     * Add taxons
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueTaxon $taxons
     * @return BotaniqueCategorie
     */
    public function addTaxon(\NTE\BogartBundle\Entity\BotaniqueTaxon $taxons)
    {
        $this->taxons[] = $taxons;
    
        return $this;
    }

    /**
     * Remove taxons
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueTaxon $taxons
     */
    public function removeTaxon(\NTE\BogartBundle\Entity\BotaniqueTaxon $taxons)
    {
        $this->taxons->removeElement($taxons);
    }

    /**
     * Get taxons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTaxons()
    {
        return $this->taxons;
    }
}