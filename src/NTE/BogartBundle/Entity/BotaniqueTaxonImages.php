<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueTaxonImages
 *
 * @ORM\Table(name="botanique_taxon_images")
 * @ORM\Entity
 */
class BotaniqueTaxonImages
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
     * @ORM\Column(name="path", type="text", nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="string", length=200, nullable=true)
     */
    private $desc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_taxon", type="integer", nullable=true)
     */
    private $idTaxon;



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
     * Set path
     *
     * @param string $path
     * @return BotaniqueTaxonImages
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return BotaniqueTaxonImages
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    
        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set idTaxon
     *
     * @param integer $idTaxon
     * @return BotaniqueTaxonImages
     */
    public function setIdTaxon($idTaxon)
    {
        $this->idTaxon = $idTaxon;
    
        return $this;
    }

    /**
     * Get idTaxon
     *
     * @return integer 
     */
    public function getIdTaxon()
    {
        return $this->idTaxon;
    }
}