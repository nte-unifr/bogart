<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * BotaniqueParcoursPosition
 *
 * @ORM\Table(name="botanique_parcours_position")
 * @ORM\Entity(repositoryClass="BotaniqueParcoursPositionRepository")
 */
class BotaniqueParcoursPosition
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
     * @ORM\Column(name="numero", type="string")
     */
    private $numero;

    /**
     * @var \BotaniqueParcours
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueParcours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parcours_id", referencedColumnName="id")
     * })
     */
    private $parcours;

    /**
     * @var \BotaniqueTaxon
     *
     * @ORM\ManyToOne(targetEntity="BotaniqueTaxon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="taxon_id", referencedColumnName="id")
     * })
     */
    private $taxon;


    public function __toString()
	{
	    return (string)$this->parcours . " / #" . $this->numero;
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
     * Set numero
     *
     * @param integer $numero
     * @return BotaniqueParcoursPosition
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
     * @return BotaniqueParcoursPosition
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
     * Set taxon
     *
     * @param \NTE\BogartBundle\Entity\BotaniqueTaxon $taxon
     * @return BotaniqueParcoursPosition
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
