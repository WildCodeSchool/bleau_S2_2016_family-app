<?php

namespace FamilyBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 */
class User extends BaseUser
{
    //public pour acceder aux champ ds l'obj
    public $anniversaire;
    //variable le timecontroller
    public $anniversaire_string;
    //variable pour le countdown
    public $countdown;

    /**
     * @return mixed
     */
    public function getAnniversaireString()
    {
        return $this->anniversaire_string;
    }

    /**
     * @param mixed $anniversaire_string
     */
    public function setAnniversaireString($anniversaire_string)
    {
        $this->anniversaire_string = $anniversaire_string;
    }

    /**
     * @return mixed
     */
    public function getCountdown()
    {
        return $this->countdown;
    }

    /**
     * @param mixed $countdown
     */
    public function setCountdown($countdown)
    {
        $this->countdown = $countdown;
    }

// Code genere

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $domicile;

    /**
     * @var string
     */
    private $portable;

    /**
     * @var string
     */
    private $box;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $codePostal;

    /**
     * @var string
     */
    private $ville;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set domicile
     *
     * @param string $domicile
     *
     * @return User
     */
    public function setDomicile($domicile)
    {
        $this->domicile = $domicile;

        return $this;
    }

    /**
     * Get domicile
     *
     * @return string
     */
    public function getDomicile()
    {
        return $this->domicile;
    }

    /**
     * Set portable
     *
     * @param string $portable
     *
     * @return User
     */
    public function setPortable($portable)
    {
        $this->portable = $portable;

        return $this;
    }

    /**
     * Get portable
     *
     * @return string
     */
    public function getPortable()
    {
        return $this->portable;
    }

    /**
     * Set box
     *
     * @param string $box
     *
     * @return User
     */
    public function setBox($box)
    {
        $this->box = $box;

        return $this;
    }

    /**
     * Get box
     *
     * @return string
     */
    public function getBox()
    {
        return $this->box;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return User
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set anniversaire
     *
     * @param \DateTime $anniversaire
     *
     * @return User
     */
    public function setAnniversaire($anniversaire)
    {
        $this->anniversaire = $anniversaire;

        return $this;
    }

    /**
     * Get anniversaire
     *
     * @return \DateTime
     */
    public function getAnniversaire()
    {
        return $this->anniversaire;
    }
}
