<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesTaxons
 *
 * @ORM\Table(name="categories_taxons")
 * @ORM\Entity
 */
class CategoriesTaxons
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
     * @var BotaniqueCategorie
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueCategorie", cascade={"detach"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     * })
     */
    private $categorie;

    /**
     * @var BotaniqueTaxons
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueTaxon", cascade={"detach"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="taxon_id", referencedColumnName="id")
     * })
     */
    private $taxon;


    public function __toString()
    {
        return (string)$this->categorie . " - " . $this->taxon;
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
     * Set categorie
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueCategorie $categorie
     * @return CategoriesTaxons
     */
    public function setCategorie(\NTE\BogartBundle\Entity\BotaniqueCategorie $categorie = null)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueCategorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set taxon
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueTaxon $taxon
     * @return CategoriesTaxons
     */
    public function setTaxon(\NTE\BogartBundle\Entity\BotaniqueTaxon $taxon = null)
    {
        $this->taxon = $taxon;
    
        return $this;
    }

    /**
     * Get taxon
     *
     * @return \NTE\BogartBundle\Entity\BotaniqueTaxon 
     */
    public function getTaxon()
    {
        return $this->taxon;
    }
}