<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueFamille
 *
 * @ORM\Table(name="botanique_famille")
 * @ORM\Entity
 */
class BotaniqueFamille
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
     * @var integer
     *
     * @ORM\Column(name="filemaker_num", type="integer", nullable=true)
     */
    private $filemakerNum;


    public function __toString()
	{
	    return (string)$this->nom;
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
     * @return BotaniqueFamille
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
     * Set filemakerNum
     *
     * @param integer $filemakerNum
     * @return BotaniqueFamille
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
}
