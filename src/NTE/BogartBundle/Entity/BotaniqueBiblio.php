<?php

namespace NTE\BogartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BotaniqueBiblio
 *
 * @ORM\Table(name="botanique_biblio")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="BotaniqueBiblioRepository");
 */
class BotaniqueBiblio
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
     * @var integer
     *
     * @ORM\Column(name="filemaker_num", type="integer", nullable=true)
     */
    private $filemakerNum;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur1", type="string", length=255, nullable=true)
     */
    private $auteur1;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur2", type="string", length=255, nullable=true)
     */
    private $auteur2;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur3", type="string", length=255, nullable=true)
     */
    private $auteur3;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur4", type="string", length=255, nullable=true)
     */
    private $auteur4;

    /**
     * @var string
     *
     * @ORM\Column(name="maison", type="string", length=255, nullable=true)
     */
    private $maison;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255, nullable=true)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="edition", type="string", length=255, nullable=true)
     */
    private $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=255, nullable=true)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="dokpe", type="string", length=255, nullable=true)
     */
    private $dokpe;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="string", length=255, nullable=true)
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="inventaire", type="string", length=255, nullable=true)
     */
    private $inventaire;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisation_edition1", type="string", length=255, nullable=true)
     */
    private $utilisationEdition1;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisation_edition2", type="string", length=255, nullable=true)
     */
    private $utilisationEdition2;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisation_edition3", type="string", length=255, nullable=true)
     */
    private $utilisationEdition3;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisation_edition4", type="string", length=255, nullable=true)
     */
    private $utilisationEdition4;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisation_edition5", type="string", length=255, nullable=true)
     */
    private $utilisationEdition5;

    /**
     * @var string
     *
     * @ORM\Column(name="liste_choix", type="string", length=255, nullable=true)
     */
    private $listeChoix;


    public function __toString()
	{
	    return (string)$this->titre . " " . $this->auteur1 . " " . $this->maison . " " . $this->annee . " " . $this->edition . " " . $this->isbn;
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
     * Set filemakerNum
     *
     * @param integer $filemakerNum
     * @return BotaniqueBiblio
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
     * Set titre
     *
     * @param string $titre
     * @return BotaniqueBiblio
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur1
     *
     * @param string $auteur1
     * @return BotaniqueBiblio
     */
    public function setAuteur1($auteur1)
    {
        $this->auteur1 = $auteur1;

        return $this;
    }

    /**
     * Get auteur1
     *
     * @return string
     */
    public function getAuteur1()
    {
        return $this->auteur1;
    }

    /**
     * Set auteur2
     *
     * @param string $auteur2
     * @return BotaniqueBiblio
     */
    public function setAuteur2($auteur2)
    {
        $this->auteur2 = $auteur2;

        return $this;
    }

    /**
     * Get auteur2
     *
     * @return string
     */
    public function getAuteur2()
    {
        return $this->auteur2;
    }

    /**
     * Set auteur3
     *
     * @param string $auteur3
     * @return BotaniqueBiblio
     */
    public function setAuteur3($auteur3)
    {
        $this->auteur3 = $auteur3;

        return $this;
    }

    /**
     * Get auteur3
     *
     * @return string
     */
    public function getAuteur3()
    {
        return $this->auteur3;
    }

    /**
     * Set auteur4
     *
     * @param string $auteur4
     * @return BotaniqueBiblio
     */
    public function setAuteur4($auteur4)
    {
        $this->auteur4 = $auteur4;

        return $this;
    }

    /**
     * Get auteur4
     *
     * @return string
     */
    public function getAuteur4()
    {
        return $this->auteur4;
    }

    /**
     * Set maison
     *
     * @param string $maison
     * @return BotaniqueBiblio
     */
    public function setMaison($maison)
    {
        $this->maison = $maison;

        return $this;
    }

    /**
     * Get maison
     *
     * @return string
     */
    public function getMaison()
    {
        return $this->maison;
    }

    /**
     * Set annee
     *
     * @param string $annee
     * @return BotaniqueBiblio
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set edition
     *
     * @param string $edition
     * @return BotaniqueBiblio
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return BotaniqueBiblio
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set dokpe
     *
     * @param string $dokpe
     * @return BotaniqueBiblio
     */
    public function setDokpe($dokpe)
    {
        $this->dokpe = $dokpe;

        return $this;
    }

    /**
     * Get dokpe
     *
     * @return string
     */
    public function getDokpe()
    {
        return $this->dokpe;
    }

    /**
     * Set emplacement
     *
     * @param string $emplacement
     * @return BotaniqueBiblio
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get emplacement
     *
     * @return string
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * Set inventaire
     *
     * @param string $inventaire
     * @return BotaniqueBiblio
     */
    public function setInventaire($inventaire)
    {
        $this->inventaire = $inventaire;

        return $this;
    }

    /**
     * Get inventaire
     *
     * @return string
     */
    public function getInventaire()
    {
        return $this->inventaire;
    }

    /**
     * Set utilisationEdition1
     *
     * @param string $utilisationEdition1
     * @return BotaniqueBiblio
     */
    public function setUtilisationEdition1($utilisationEdition1)
    {
        $this->utilisationEdition1 = $utilisationEdition1;

        return $this;
    }

    /**
     * Get utilisationEdition1
     *
     * @return string
     */
    public function getUtilisationEdition1()
    {
        return $this->utilisationEdition1;
    }

    /**
     * Set utilisationEdition2
     *
     * @param string $utilisationEdition2
     * @return BotaniqueBiblio
     */
    public function setUtilisationEdition2($utilisationEdition2)
    {
        $this->utilisationEdition2 = $utilisationEdition2;

        return $this;
    }

    /**
     * Get utilisationEdition2
     *
     * @return string
     */
    public function getUtilisationEdition2()
    {
        return $this->utilisationEdition2;
    }

    /**
     * Set utilisationEdition3
     *
     * @param string $utilisationEdition3
     * @return BotaniqueBiblio
     */
    public function setUtilisationEdition3($utilisationEdition3)
    {
        $this->utilisationEdition3 = $utilisationEdition3;

        return $this;
    }

    /**
     * Get utilisationEdition3
     *
     * @return string
     */
    public function getUtilisationEdition3()
    {
        return $this->utilisationEdition3;
    }

    /**
     * Set utilisationEdition4
     *
     * @param string $utilisationEdition4
     * @return BotaniqueBiblio
     */
    public function setUtilisationEdition4($utilisationEdition4)
    {
        $this->utilisationEdition4 = $utilisationEdition4;

        return $this;
    }

    /**
     * Get utilisationEdition4
     *
     * @return string
     */
    public function getUtilisationEdition4()
    {
        return $this->utilisationEdition4;
    }

    /**
     * Set utilisationEdition5
     *
     * @param string $utilisationEdition5
     * @return BotaniqueBiblio
     */
    public function setUtilisationEdition5($utilisationEdition5)
    {
        $this->utilisationEdition5 = $utilisationEdition5;

        return $this;
    }

    /**
     * Get utilisationEdition5
     *
     * @return string
     */
    public function getUtilisationEdition5()
    {
        return $this->utilisationEdition5;
    }

    /**
     * Set listeChoix
     *
     * @param string $listeChoix
     * @return BotaniqueBiblio
     */
    public function setListeChoix($listeChoix)
    {
        $this->listeChoix = $listeChoix;

        return $this;
    }

    /**
     * Get listeChoix
     *
     * @return string
     */
    public function getListeChoix()
    {
        return $this->listeChoix;
    }
}