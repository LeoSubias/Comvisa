<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * coworkerPhoto
 *
 * @ORM\Table(name="coworker_photo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\coworkerPhotoRepository")
 * @Vich\Uploadable
 */
class coworkerPhoto
{
    /**
     * @var int
     *
     * @ORM\Column(name="cow_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cow_photo", type="string", length=255, nullable = true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="cow_nom", type="string", length=255, nullable = true)
     */
    private $nom;

    /**
    * @Vich\UploadableField(mapping="photo", fileNameProperty="photo" )
    * 
    * @var File
    */
    private $photoFile;

    public function __toString()
    {
        return $this->getPhoto()." ".$this->getPhotoFile();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Annonce
     */
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getnom()
    {
        return $this->nom;
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
}
