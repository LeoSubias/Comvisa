<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MentionLegale
 *
 * @ORM\Table(name="mention_legale")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MentionLegaleRepository")
 */
class MentionLegale
{
    /**
     * @var int
     *
     * @ORM\Column(name="men_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="men_texte", type="string", length=1000)
     */
    private $texte;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="usr_oid", referencedColumnName="usr_oid")
     */
    private $user;

    public function __toString()
    {    
        return $this->getTexte();
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
     * Set texte.
     *
     * @param string $texte
     *
     * @return MentionLegale
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte.
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set user.
     *
     * @param \AppBundle\Entity\User|null $user
     *
     * @return MentionLegale
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \AppBundle\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }
}
