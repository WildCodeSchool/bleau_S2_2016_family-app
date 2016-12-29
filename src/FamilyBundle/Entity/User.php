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
    private $tel03;

    /**
     * @var string
     */
    private $tel06;

    /**
     * @var string
     */
    private $tel09;

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
     * @var \DateTime
     */
    //public pour acceder aux champ ds l'obj
    public $anniversaire;
    //variable le timecontroller
    public $anniversaire_string;
    //variable pour le countdown
    public $countdown;

 

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
     * Set tel03
     *
     * @param string $tel03
     *
     * @return User
     */
    public function setTel03($tel03)
    {
        $this->tel03 = $tel03;

        return $this;
    }

    /**
     * Get tel03
     *
     * @return string
     */
    public function getTel03()
    {
        return $this->tel03;
    }

    /**
     * Set tel06
     *
     * @param string $tel06
     *
     * @return User
     */
    public function setTel06($tel06)
    {
        $this->tel06 = $tel06;

        return $this;
    }

    /**
     * Get tel06
     *
     * @return string
     */
    public function getTel06()
    {
        return $this->tel06;
    }

    /**
     * Set tel09
     *
     * @param string $tel09
     *
     * @return User
     */
    public function setTel09($tel09)
    {
        $this->tel09 = $tel09;

        return $this;
    }

    /**
     * Get tel09
     *
     * @return string
     */
    public function getTel09()
    {
        return $this->tel09;
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
    
 
    /**
     * @var \FamilyBundle\Entity\Images
     */
    private $images;


    /**
     * Set images
     *
     * @param \FamilyBundle\Entity\Images $images
     *
     * @return User
     */
    public function setImages(\FamilyBundle\Entity\Images $images = null)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return \FamilyBundle\Entity\Images
     */
    public function getImages()
    {
        return $this->images;
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
    
}
