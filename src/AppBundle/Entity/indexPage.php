<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * indexPage
 *
 * @ORM\Table(name="ind_index_page")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\indexPageRepository")
 */
class indexPage
{
    /**
     * @var int
     *
     * @ORM\Column(name="ind_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_titreIntro", type="string", length=255)
     */
    private $titreIntro;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_texteIntro", type="string", length=3000)
     */
    private $texteIntro;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_titreCoWorker", type="string", length=3000)
     */
    private $titreCoWorker;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_texteCoWorker", type="string", length=3000)
     */
    private $texteCoWorker;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_titreAnnonce", type="string", length=255)
     */
    private $titreAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_texteAnnonce", type="string", length=3000)
     */
    private $texteAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_titreCoWorking", type="string", length=255)
     */
    private $titreCoWorking;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_texteCoWorking", type="string", length=3000)
     */
    private $texteCoWorking;

    public function __toString()
    {
        return $this->getTitreIntro()." ".$this->getTexteIntro()." ".$this->getTitreCoWorker()." ".$this->getTexteCoWorker()." ".$this->getTitreAnnonce()." ".$this->getTexteAnnonce()." ".$this->getTitreCoWorking()." ".$this->getTexteCoWorking();
    }


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titreInto.
     *
     * @param string $titreInto
     *
     * @return indexPage
     */
    public function setTitreIntro($titreIntro)
    {
        $this->titreIntro = $titreIntro;

        return $this;
    }

    /**
     * Get titreInto.
     *
     * @return string
     */
    public function getTitreIntro()
    {
        return $this->titreIntro;
    }

    /**
     * Set texteIntro.
     *
     * @param string $texteIntro
     *
     * @return indexPage
     */
    public function setTexteIntro($texteIntro)
    {
        $this->texteIntro = $texteIntro;

        return $this;
    }

    /**
     * Get texteIntro.
     *
     * @return string
     */
    public function getTexteIntro()
    {
        return $this->texteIntro;
    }

    /**
     * Set titreCoWorker.
     *
     * @param string $titreCoWorker
     *
     * @return indexPage
     */
    public function setTitreCoWorker($titreCoWorker)
    {
        $this->titreCoWorker = $titreCoWorker;

        return $this;
    }

    /**
     * Get titreCoWorker.
     *
     * @return string
     */
    public function getTitreCoWorker()
    {
        return $this->titreCoWorker;
    }

    /**
     * Set texteCoWorker.
     *
     * @param string $texteCoWorker
     *
     * @return indexPage
     */
    public function setTexteCoWorker($texteCoWorker)
    {
        $this->texteCoWorker = $texteCoWorker;

        return $this;
    }

    /**
     * Get texteCoWorker.
     *
     * @return string
     */
    public function getTexteCoWorker()
    {
        return $this->texteCoWorker;
    }

    /**
     * Set titreAnnonce.
     *
     * @param string $titreAnnonce
     *
     * @return indexPage
     */
    public function setTitreAnnonce($titreAnnonce)
    {
        $this->titreAnnonce = $titreAnnonce;

        return $this;
    }

    /**
     * Get titreAnnonce.
     *
     * @return string
     */
    public function getTitreAnnonce()
    {
        return $this->titreAnnonce;
    }

    /**
     * Set texteAnnonce.
     *
     * @param string $texteAnnonce
     *
     * @return indexPage
     */
    public function setTexteAnnonce($texteAnnonce)
    {
        $this->texteAnnonce = $texteAnnonce;

        return $this;
    }

    /**
     * Get texteAnnonce.
     *
     * @return string
     */
    public function getTexteAnnonce()
    {
        return $this->texteAnnonce;
    }

    /**
     * Set titreCoWorking.
     *
     * @param string $titreCoWorking
     *
     * @return indexPage
     */
    public function setTitreCoWorking($titreCoWorking)
    {
        $this->titreCoWorking = $titreCoWorking;

        return $this;
    }

    /**
     * Get titreCoWorking.
     *
     * @return string
     */
    public function getTitreCoWorking()
    {
        return $this->titreCoWorking;
    }

    /**
     * Set texteCoWorking.
     *
     * @param string $texteCoWorking
     *
     * @return indexPage
     */
    public function setTexteCoWorking($texteCoWorking)
    {
        $this->texteCoWorking = $texteCoWorking;

        return $this;
    }

    /**
     * Get texteCoWorking.
     *
     * @return string
     */
    public function getTexteCoWorking()
    {
        return $this->texteCoWorking;
    }
}
