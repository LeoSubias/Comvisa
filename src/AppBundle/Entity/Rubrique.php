<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Rubrique
* @Vich\Uploadable
 * @ORM\Table(name="rub_rubrique")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RubriqueRepository")
 */
class Rubrique
{
    /**
     * @var int
     *
     * @ORM\Column(name="rub_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rub_nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="rub_texte", type="string", length=10000)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_photo", type="string", length=255,nullable = true)
     */
    private $photo;

    /**
    * @Vich\UploadableField(mapping="photo", fileNameProperty="photo")
    * 
    * @var File
    */
    private $photoFile;

     /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="usr_oid", referencedColumnName="usr_oid")
     */
    private $user;

    public function __toString()
    {    
        return $this->getNom()." ".$this->getTexte(). " ". $this->getPhoto()." ". $this->getPhotoFile();
    }

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Rubrique
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

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Rubrique
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Annonce
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile 
     *
     * @return Photo
    */
    public function setPhotoFile(File $photo = null)
    {
        $this->photoFile = $photo;

        if ($photo) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }
    /**
     * @return File|null
     */
    public function getPhotoFile()
    {
        return $this->photoFile;
    }

    /**
     * Set user.
     *
     * @param \AppBundle\Entity\User|null $user
     *
     * @return Rubrique
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
