<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniquePays
 *
 * @ORM\Table(name="botanique_pays")
 * @ORM\Entity(repositoryClass="BotaniquePaysRepository")
 */
class BotaniquePays
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
     * @ORM\Column(name="abreviation", type="string", length=255, nullable=true)
     */
    private $abreviation;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", length=255, nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="filemaker_num", type="integer", nullable=true)
     */
    private $filemakerNum;


    public function __toString()
	{
	    return (string)$this->pays;
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
     * Set abreviation
     *
     * @param string $abreviation
     * @return BotaniquePays
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string
     */
    public function getAbreviation()
    {
        return $this->abreviation;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return BotaniquePays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set filemakerNum
     *
     * @param integer $filemakerNum
     * @return BotaniquePays
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
     * Set numero
     *
     * @param integer $numero
     * @return BotaniquePays
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
}
