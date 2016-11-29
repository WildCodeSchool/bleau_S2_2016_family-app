<?php

namespace FamilyBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
/**
 * User_Profil
 */
class User extends BaseUser
{
    
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
    private $anniversaire;


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
     * @return User_Profil
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
     * @return User_Profil
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
     * @return User_Profil
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
     * @return User_Profil
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
     * @return User_Profil
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
     * @return User_Profil
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
     * @return User_Profil
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
     * @return User_Profil
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
     * @return User_Profil
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
