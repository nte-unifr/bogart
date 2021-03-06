<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueIpen
 *
 * @ORM\Table(name="botanique_ipen")
 * @ORM\Entity
 */
class BotaniqueIpen
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
     * @var string
     *
     * @ORM\Column(name="condition2", type="string", length=255, nullable=true)
     */
    private $condition2;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255, nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="filemaker_num", type="integer", nullable=true)
     */
    private $filemakerNum;

    /**
     * @var \BotaniquePays
     *
     * @ORM\ManyToOne(targetEntity="BotaniquePays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pays", referencedColumnName="id")
     * })
     */
    private $idPays;


    public function __toString()
	{
	    return (string)$this->nom;
	}
	
	/**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function PreUpdate()
    {
        $this->nom = $this->getIdPays()->getAbreviation() . " " . $this->condition2 . " " . $this->code . " " . $this->numero;
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
     * @return BotaniqueIpen
     */
    public function setNom($nom)
    {
#        $this->nom = $nom;
        $this->nom = $this->getIdPays()->getAbreviation() . " " . $this->condition2 . " " . $this->code . " " . $this->numero;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
#        return $this->nom;
        return $this->getIdPays()->getAbreviation() . " " . $this->condition2 . " " . $this->code . " " . $this->numero;
    }

    /**
     * Set condition2
     *
     * @param string $condition2
     * @return BotaniqueIpen
     */
    public function setCondition2($condition2)
    {
        $this->condition2 = $condition2;
    
        return $this;
    }

    /**
     * Get condition2
     *
     * @return string 
     */
    public function getCondition2()
    {
        return $this->condition2;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return BotaniqueIpen
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return BotaniqueIpen
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set filemakerNum
     *
     * @param integer $filemakerNum
     * @return BotaniqueIpen
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
     * Set idPays
     *
     * @param \NTE\BogartBundle\Entity\BotaniquePays $idPays
     * @return BotaniqueIpen
     */
    public function setIdPays(\NTE\BogartBundle\Entity\BotaniquePays $idPays = null)
    {
        $this->idPays = $idPays;
    
        return $this;
    }

    /**
     * Get idPays
     *
     * @return \NTE\BogartBundle\Entity\BotaniquePays 
     */
    public function getIdPays()
    {
        return $this->idPays;
    }
}
