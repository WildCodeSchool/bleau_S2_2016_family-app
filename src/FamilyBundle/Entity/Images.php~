<?php

namespace FamilyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Images
 */
class Images
{
    
    //CODE Gene
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $alt;


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
     * Set source
     *
     * @param string $source
     *
     * @return Images
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Images
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
    /**
     * @var \FamilyBundle\Entity\User
     */
    private $User;


    /**
     * Set user
     *
     * @param \FamilyBundle\Entity\User $user
     *
     * @return Images
     */
    public function setUser(\FamilyBundle\Entity\User $user = null)
    {
        $this->User = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \FamilyBundle\Entity\User
     */
    public function getUser()
    {
        return $this->User;
    }
}
