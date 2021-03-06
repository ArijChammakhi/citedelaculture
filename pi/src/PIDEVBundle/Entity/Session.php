<?php

namespace PIDEVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="PIDEVBundle\Repository\SessionRepository")
 */
class Session
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
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDeSes", type="datetime")
     */
    private $dateDeSes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFinSes", type="datetime")
     */
    private $dateFinSes;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer" ,nullable=true)
     */
    private $etat="0";
    /**
     * @var int
     *
     * @ORM\Column(name="capaciteSes", type="integer", nullable=true)
     */
    private $capaciteSes;




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
     * Set dateDeSes
     *
     * @param \DateTime $dateDeSes
     *
     * @return Session
     */
    public function setDateDeSes($dateDeSes)
    {
        $this->dateDeSes = $dateDeSes;

        return $this;
    }

    /**
     * Get dateDeSes
     *
     * @return \DateTime
     */
    public function getDateDeSes()
    {
        return $this->dateDeSes;
    }

    /**
     * Set dateFinSes
     *
     * @param \DateTime $dateFinSes
     *
     * @return Session
     */
    public function setDateFinSes($dateFinSes)
    {
        $this->dateFinSes = $dateFinSes;

        return $this;
    }

    /**
     * Get dateFinSes
     *
     * @return \DateTime
     */
    public function getDateFinSes()
    {
        return $this->dateFinSes;
    }



    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Session
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set capaciteSes
     *
     * @param integer $capaciteSes
     *
     * @return Session
     */
    public function setCapaciteSes($capaciteSes)
    {
        $this->capaciteSes = $capaciteSes;

        return $this;
    }

    /**
     * Get capaciteSes
     *
     * @return integer
     */
    public function getCapaciteSes()
    {
        return $this->capaciteSes;
    }



    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Session
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
}
