<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueCollab
 *
 * @ORM\Table(name="botanique_collab")
 * @ORM\Entity
 */
class BotaniqueCollab
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
     * @ORM\Column(name="collab", type="string", length=255, nullable=true)
     */
    private $collab;



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
     * Set collab
     *
     * @param string $collab
     * @return BotaniqueCollab
     */
    public function setCollab($collab)
    {
        $this->collab = $collab;
    
        return $this;
    }

    /**
     * Get collab
     *
     * @return string 
     */
    public function getCollab()
    {
        return $this->collab;
    }
}