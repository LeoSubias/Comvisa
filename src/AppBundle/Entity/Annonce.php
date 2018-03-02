<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Annonce
 * 
 * @ORM\Table(name="ann_annonce")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnonceRepository")
 * @Vich\Uploadable
 */
class Annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="ann_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_photo", type="string", length=255, nullable = true)
     */
    private $photo;

    /**
    * @Vich\UploadableField(mapping="photo", fileNameProperty="photo" )
    * 
    * @var File
    */
    private $photoFile;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_texte", type="string", length=10000)
     */
    private $texte;

      /** 
     * @ORM\ManyToOne(targetEntity="Type_Annonce")
     * @ORM\JoinColumn(name="typ_oid", referencedColumnName="typ_oid")
     */
    public $type_annonce;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="usr_oid", referencedColumnName="usr_oid")
     */
    private $user;

    public function __toString()
    {    
        return $this->getTitre()." ".$this->getPhoto()." ".$this->getTexte();
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
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
     * Set texte
     *
     * @param string $texte
     *
     * @return Annonce
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
     * Set typeAnnonce.
     *
     * @param \AppBundle\Entity\Type_Annonce|null $typeAnnonce
     *
     * @return Annonce
     */
    public function setTypeAnnonce(\AppBundle\Entity\Type_Annonce $typeAnnonce = null)
    {
        $this->type_annonce = $typeAnnonce;

        return $this;
    }

    /**
     * Get typeAnnonce.
     *
     * @return \AppBundle\Entity\Type_Annonce|null
     */
    public function getTypeAnnonce()
    {
        return $this->type_annonce;
    }

    /**
     * Set user.
     *
     * @param \AppBundle\Entity\User|null $user
     *
     * @return Annonce
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
