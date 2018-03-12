<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact
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
     * @ORM\Column(name="texteContact", type="string", length=10000)
     */
    private $texteContact;

    public function __toString()
    {
        return $this->getTexteContact();    
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
     * Set texteContact.
     *
     * @param string $texteContact
     *
     * @return Contact
     */
    public function setTexteContact($texteContact)
    {
        $this->texteContact = $texteContact;

        return $this;
    }

    /**
     * Get texteContact.
     *
     * @return string
     */
    public function getTexteContact()
    {
        return $this->texteContact;
    }
}
