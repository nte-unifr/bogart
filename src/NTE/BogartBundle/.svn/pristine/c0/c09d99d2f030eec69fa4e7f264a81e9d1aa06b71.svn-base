<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pages
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
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="title_de", type="string")
     */
    private $titleDe;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="text_de", type="text", nullable=true)
     */
    private $textDe;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="parcours_type_page", type="string")
     */
    private $parcoursTypePage;


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
     * Set introduction
     *
     * @param string $introduction
     * @return Page
     */
    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;
    
        return $this;
    }

    /**
     * Get introduction
     *
     * @return string 
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Page
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Page
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set titleDe
     *
     * @param string $titleDe
     * @return Pages
     */
    public function setTitleDe($titleDe)
    {
        $this->titleDe = $titleDe;
    
        return $this;
    }

    /**
     * Get titleDe
     *
     * @return string 
     */
    public function getTitleDe()
    {
        return $this->titleDe;
    }

    /**
     * Set textDe
     *
     * @param string $textDe
     * @return Pages
     */
    public function setTextDe($textDe)
    {
        $this->textDe = $textDe;
    
        return $this;
    }

    /**
     * Get textDe
     *
     * @return string 
     */
    public function getTextDe()
    {
        return $this->textDe;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Pages
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set parcoursType
     *
     * @param string $parcoursType
     * @return Pages
     */
    public function setParcoursType($parcoursType)
    {
        $this->parcoursType = $parcoursType;
    
        return $this;
    }

    /**
     * Get parcoursType
     *
     * @return string 
     */
    public function getParcoursType()
    {
        return $this->parcoursType;
    }

    /**
     * Set parcoursTypePage
     *
     * @param string $parcoursTypePage
     * @return Pages
     */
    public function setParcoursTypePage($parcoursTypePage)
    {
        $this->parcoursTypePage = $parcoursTypePage;
    
        return $this;
    }

    /**
     * Get parcoursTypePage
     *
     * @return string 
     */
    public function getParcoursTypePage()
    {
        return $this->parcoursTypePage;
    }
}