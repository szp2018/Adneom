<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Info
 *
 * @ORM\Table(name="info")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InfoRepository")
 */
class Info
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="creation", type="string", length=255)
     */
    private $creation;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="chainedorig", type="string", length=255)
     */
    private $chainedorig;

    /**
     * @var string
     *
     * @ORM\Column(name="nbsaison", type="string", length=255)
     */
    private $nbsaison;

    /**
     * @var string
     *
     * @ORM\Column(name="nbepisodes", type="string", length=255)
     */
    private $nbepisodes;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="acteurs", type="string", length=255)
     */
    private $acteurs;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Info
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set creation
     *
     * @param string $creation
     *
     * @return Info
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return string
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Info
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
     * Set chainedorig
     *
     * @param string $chainedorig
     *
     * @return Info
     */
    public function setChainedorig($chainedorig)
    {
        $this->chainedorig = $chainedorig;

        return $this;
    }

    /**
     * Get chainedorig
     *
     * @return string
     */
    public function getChainedorig()
    {
        return $this->chainedorig;
    }

    /**
     * Set nbsaison
     *
     * @param string $nbsaison
     *
     * @return Info
     */
    public function setNbsaison($nbsaison)
    {
        $this->nbsaison = $nbsaison;

        return $this;
    }

    /**
     * Get nbsaison
     *
     * @return string
     */
    public function getNbsaison()
    {
        return $this->nbsaison;
    }

    /**
     * Set nbepisodes
     *
     * @param string $nbepisodes
     *
     * @return Info
     */
    public function setNbepisodes($nbepisodes)
    {
        $this->nbepisodes = $nbepisodes;

        return $this;
    }

    /**
     * Get nbepisodes
     *
     * @return string
     */
    public function getNbepisodes()
    {
        return $this->nbepisodes;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Info
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set acteurs
     *
     * @param string $acteurs
     *
     * @return Info
     */
    public function setActeurs($acteurs)
    {
        $this->acteurs = $acteurs;

        return $this;
    }

    /**
     * Get acteurs
     *
     * @return string
     */
    public function getActeurs()
    {
        return $this->acteurs;
    }
}

