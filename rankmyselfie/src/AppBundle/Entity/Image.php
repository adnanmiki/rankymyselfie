<?php 

// src/Acme/DemoBundle/Entity/Document.php
namespace AppBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $userid;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    public $urlfolder;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    public $pictitel;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    public $picdesc;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $votes;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $v1;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $v2;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $v3;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $v4;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $v5;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $v6;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $v7;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $v8;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $v9;
    
    /**
     * @ORM\Column(type="integer", type="integer")
     * @Assert\NotBlank
     */
    public $v10;
    

    /**
     * @return the $userid
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param field_type $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $urlfolder
     */
    public function getUrlfolder()
    {
        return $this->urlfolder;
    }

    /**
     * @return the $pictitel
     */
    public function getPictitel()
    {
        return $this->pictitel;
    }

    /**
     * @return the $picdesc
     */
    public function getPicdesc()
    {
        return $this->picdesc;
    }

    /**
     * @return the $votes
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @return the $v1
     */
    public function getV1()
    {
        return $this->v1;
    }

    /**
     * @return the $v2
     */
    public function getV2()
    {
        return $this->v2;
    }

    /**
     * @return the $v3
     */
    public function getV3()
    {
        return $this->v3;
    }

    /**
     * @return the $v4
     */
    public function getV4()
    {
        return $this->v4;
    }

    /**
     * @return the $v5
     */
    public function getV5()
    {
        return $this->v5;
    }

    /**
     * @return the $v6
     */
    public function getV6()
    {
        return $this->v6;
    }

    /**
     * @return the $v7
     */
    public function getV7()
    {
        return $this->v7;
    }

    /**
     * @return the $v8
     */
    public function getV8()
    {
        return $this->v8;
    }

    /**
     * @return the $v9
     */
    public function getV9()
    {
        return $this->v9;
    }

    /**
     * @return the $v10
     */
    public function getV10()
    {
        return $this->v10;
    }


    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $urlfolder
     */
    public function setUrlfolder($urlfolder)
    {
        $this->urlfolder = $urlfolder;
    }

    /**
     * @param field_type $pictitel
     */
    public function setPictitel($pictitel)
    {
        $this->pictitel = $pictitel;
    }

    /**
     * @param field_type $picdesc
     */
    public function setPicdesc($picdesc)
    {
        $this->picdesc = $picdesc;
    }

    /**
     * @param field_type $votes
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;
    }

    /**
     * @param field_type $v1
     */
    public function setV1($v1)
    {
        $this->v1 = $v1;
    }

    /**
     * @param field_type $v2
     */
    public function setV2($v2)
    {
        $this->v2 = $v2;
    }

    /**
     * @param field_type $v3
     */
    public function setV3($v3)
    {
        $this->v3 = $v3;
    }

    /**
     * @param field_type $v4
     */
    public function setV4($v4)
    {
        $this->v4 = $v4;
    }

    /**
     * @param field_type $v5
     */
    public function setV5($v5)
    {
        $this->v5 = $v5;
    }

    /**
     * @param field_type $v6
     */
    public function setV6($v6)
    {
        $this->v6 = $v6;
    }

    /**
     * @param field_type $v7
     */
    public function setV7($v7)
    {
        $this->v7 = $v7;
    }

    /**
     * @param field_type $v8
     */
    public function setV8($v8)
    {
        $this->v8 = $v8;
    }

    /**
     * @param field_type $v9
     */
    public function setV9($v9)
    {
        $this->v9 = $v9;
    }

    /**
     * @param field_type $v10
     */
    public function setV10($v10)
    {
        $this->v10 = $v10;
    }

   

    
}