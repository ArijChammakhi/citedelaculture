<?php

namespace PIDEVBundle\Entity;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;

/**
 * Workshop
 *
 * @ORM\Table(name="workshop")
 * @ORM\Entity(repositoryClass="PIDEVBundle\Repository\WorkshopRepository")
 * @Vich\Uploadable
 */
class Workshop
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
     * @ORM\Column(name="images", type="text", length=65535, nullable=true)
     */
    private $images;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     *
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;



    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite;
    /**
     * @var string
     *
     * @ORM\Column(name="descriptionFor", type="string", length=255, nullable=true)
     *
     *
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(name="rating", type="string", length=255, nullable=true)
     *
     *
     */
    private $rating;
    /**
     * @var string
     *
     * @ORM\Column(name="etatWork", type="string", length=255, nullable=true)
     */
    private $etatWork ="en cours";
    /**
     * @ORM\ManyToOne(targetEntity="PIDEVBundle\Entity\Utilisateur")
     *
     * @ORM\JoinColumn(name="idUser",referencedColumnName="id")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity="PIDEVBundle\Entity\Salle")
     *
     * @ORM\JoinColumn(name="salle",referencedColumnName="id")
     */
    protected $salle;

    /**
     * @ORM\ManyToOne(targetEntity="PIDEVBundle\Entity\TypeWorkshop")
     *
     * @ORM\JoinColumn(name="idTypeWork",referencedColumnName="id")
     */
    private $idtypework;

    /**
     * @ORM\ManyToOne(targetEntity="PIDEVBundle\Entity\Session")
     *
     * @ORM\JoinColumn(name="idSession",referencedColumnName="id")
     */
    private $idSession;
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
     * @return Workshop
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
     * Set prix
     *
     * @param float $prix
     *
     * @return Workshop
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     *
     * @return Workshop
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return int
     */
    public function getCapacite()
    {
        return $this->capacite;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Workshop
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Workshop
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set idUser
     *
     * @param \PIDEVBundle\Entity\Utilisateur $idUser
     *
     * @return Workshop
     */
    public function setIdUser(\PIDEVBundle\Entity\Utilisateur $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \PIDEVBundle\Entity\Utilisateur
     */
    public function getIdUser()
    {
        return $this->idUser;
    }



    /**
     * Set idtypework
     *
     * @param \PIDEVBundle\Entity\TypeWorkshop $idtypework
     *
     * @return Workshop
     */
    public function setIdtypework(\PIDEVBundle\Entity\TypeWorkshop $idtypework = null)
    {
        $this->idtypework = $idtypework;

        return $this;
    }

    /**
     * Get idtypework
     *
     * @return \PIDEVBundle\Entity\TypeWorkshop
     */
    public function getIdtypework()
    {
        return $this->idtypework;
    }



    /**
     * Set etatWork
     *
     * @param string $etatWork
     *
     * @return Workshop
     */
    public function setEtatWork($etatWork)
    {
        $this->etatWork = $etatWork;

        return $this;
    }

    /**
     * Get etatWork
     *
     * @return string
     */
    public function getEtatWork()
    {
        return $this->etatWork;
    }





    /**
     * Set salle
     *
     * @param \PIDEVBundle\Entity\Salle $salle
     *
     * @return Workshop
     */
    public function setSalle(\PIDEVBundle\Entity\Salle $salle = null)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \PIDEVBundle\Entity\Salle
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set idSession
     *
     * @param \PIDEVBundle\Entity\Session $idSession
     *
     * @return Workshop
     */
    public function setIdSession(\PIDEVBundle\Entity\Session $idSession = null)
    {
        $this->idSession = $idSession;

        return $this;
    }

    /**
     * Get idSession
     *
     * @return \PIDEVBundle\Entity\Session
     */
    public function getIdSession()
    {
        return $this->idSession;
    }




    /**
     * Set images
     *
     * @param string $images
     *
     * @return Workshop
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set rating
     *
     * @param string $rating
     *
     * @return Workshop
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }
}
