<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueEndroit
 *
 * @ORM\Table(name="botanique_endroit")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="BotaniqueEndroitRepository");
 */
class BotaniqueEndroit
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
     * Set nom
     *
     * @param string $nom
     * @return BotaniqueEndroit
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
