<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueFichierTaxon
 *
 * @ORM\Table(name="botanique_fichier_taxon")
 * @ORM\Entity
 */
class BotaniqueFichierTaxon
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
     * @ORM\ManyToOne(targetEntity="BotaniqueTaxon", cascade={"detach"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="taxon_id", referencedColumnName="id")
     * })
     */
    private $taxon;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"detach"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="media_id", referencedColumnName="id")
     * })
     */
    private $media;


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
     * Set taxon
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueTaxon $taxon
     * @return BotaniqueFichierTaxon
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

    /**
     * Set media
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $media
     * @return BotaniqueFichierTaxon
     */
    public function setMedia(\Application\Sonata\MediaBundle\Entity\Media $media = null)
    {
        $this->media = $media;
    
        return $this;
    }

    /**
     * Get media
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }
}
