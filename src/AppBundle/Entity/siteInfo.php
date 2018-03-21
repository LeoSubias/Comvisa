<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * siteInfo
 *
 * @ORM\Table(name="site_info")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\siteInfoRepository")
 */
class siteInfo
{
    /**
     * @var int
     *
     * @ORM\Column(name="inf_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="inf_facebook", type="string", length=500, nullable = true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="inf_twitter", type="string", length=500, nullable = true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="inf_instagram", type="string", length=500, nullable = true)
     */
    private $instagram;

    /**
     * @var string
     *
     * @ORM\Column(name="inf_linkedin", type="string", length=500, nullable = true)
     */
    private $linkedin;

    /**
     * @var string
     *
     * @ORM\Column(name="inf_google", type="string", length=500, nullable = true)
     */
    private $google;


    public function __toString()
    {
        return $this->getFacebook()." ".$this->getGoogle()." ".$this->getInstagram()." ".$this->getLinkedin()." ".$this->getTwitter();
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
     * Set facebook.
     *
     * @param string $facebook
     *
     * @return siteInfo
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook.
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter.
     *
     * @param string $twitter
     *
     * @return siteInfo
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter.
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set instagram.
     *
     * @param string $instagram
     *
     * @return siteInfo
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get instagram.
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set linkedin.
     *
     * @param string $linkedin
     *
     * @return siteInfo
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin.
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set google.
     *
     * @param string $google
     *
     * @return siteInfo
     */
    public function setGoogle($google)
    {
        $this->google = $google;

        return $this;
    }

    /**
     * Get google.
     *
     * @return string
     */
    public function getGoogle()
    {
        return $this->google;
    }
}
