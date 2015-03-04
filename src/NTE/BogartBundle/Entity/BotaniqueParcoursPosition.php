<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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

    /**
     * @var string
     *
     * @ORM\Column(name="direction", type="string", nullable=true)
     */
    private $direction;

    /**
     * @var string
     *
     * @ORM\Column(name="distance", type="string", nullable=true)
     */
    private $distance;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_fr", type="text", nullable=true)
     */
    private $commentaireFr;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_de", type="text", nullable=true)
     */
    private $commentaireDe;


    public function __toString()
	{
	    return (string)$this->parcours . ", " . $this->taxon->getNomFr() . " / " . $this->taxon->getNomDe() . " (#" . $this->numero . ")";
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

    /**
     * Set direction
     *
     * @param string $direction
     * @return BotaniqueParcoursPosition
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set distance
     *
     * @param string $distance
     * @return BotaniqueParcoursPosition
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return BotaniqueParcoursPosition
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set commentaireDe
     *
     * @param string $commentaireDe
     * @return BotaniqueParcoursPosition
     */
    public function setCommentaireDe($commentaireDe)
    {
        $this->commentaireDe = $commentaireDe;

        return $this;
    }

    /**
     * Get commentaireDe
     *
     * @return string
     */
    public function getCommentaireDe()
    {
        return $this->commentaireDe;
    }

    /**
     * Set commentaireFr
     *
     * @param string $commentaireFr
     * @return BotaniqueParcoursPosition
     */
    public function setCommentaireFr($commentaireFr)
    {
        $this->commentaireFr = $commentaireFr;

        return $this;
    }

    /**
     * Get commentaireFr
     *
     * @return string
     */
    public function getCommentaireFr()
    {
        return $this->commentaireFr;
    }
}
