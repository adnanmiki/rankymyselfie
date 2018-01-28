<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datebirth", type="datetime")
     */
    private $datebirth;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="textabout", type="string", length=255)
     */
    private $textabout;
    
    /**
     * @var string
     *
     * @ORM\Column(name="thumburl", type="string", length=255)
     */
    private $thumburl;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255)
     */
    private $tags;
    
    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;
    
    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;
    
    /**
     * @var integer
     * 
     * @ORM\Column(type="integer", type="integer")
     *
     */
    private $views;
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="datetime")
     */
    private $createdate;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="onlinestatus", type="boolean")
     */
    private $onlinestatus;


    /**
     * @return the $onlinestatus
     */
    public function getOnlinestatus()
    {
        return $this->onlinestatus;
    }

    /**
     * @param boolean $onlinestatus
     */
    public function setOnlinestatus($onlinestatus)
    {
        $this->onlinestatus = $onlinestatus;
    }

    /**
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return the $views
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param string $votes
     */
    public function setViews($views)
    {
        $this->views = $views;
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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }


    /**
     * Set datebirth
     *
     * @param \DateTime $datebirth
     *
     * @return User
     */
    public function setDatebirth($datebirth)
    {
        $this->datebirth = $datebirth;

        return $this;
    }

    /**
     * Get datebirth
     *
     * @return \DateTime
     */
    public function getDatebirth()
    {
        return $this->datebirth;
    }
 
    
    /**
     * Set thumburl
     *
     * @param string $thumburl
     *
     * @return Person
     */
    public function setTextabout($textabout)
    {
        $this->textabout = $textabout;
        
        return $this;
    }
    
    /**
     * Get textabout
     *
     * @return string
     */
    public function getTextabout()
    {
        return $this->textabout;
    }
    
    /**
     * Set thumburl
     *
     * @param string $thumburl
     *
     * @return Person
     */
    public function setThumburl($thumburl)
    {
        $this->thumburl = $thumburl;
        
        return $this;
    }
    
    /**
     * Get thumburl
     *
     * @return string
     */
    public function getThumburl()
    {
        return $this->thumburl;
    }
    
    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Person
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        
        return $this;
    }
    
    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }
    
    /**
     * Set location
     *
     * @param string $location
     *
     * @return Person
     */
    public function setLocation($location)
    {
        $this->location = $location;
        
        return $this;
    }
    
    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Person
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        
        return $this;
    }
    
    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
    
    

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     *
     * @return User
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }
}

