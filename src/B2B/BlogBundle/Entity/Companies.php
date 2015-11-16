<?php

namespace B2B\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Company
 *
 * @ORM\Table(name="companies")
 * @ORM\Entity(repositoryClass="B2B\BlogBundle\Entity\CompanyRepository")
 */
Class Companies{
       /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="C", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $C;
    
       /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50)
     */
    private $Email;
       
       /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=50)
     */
    private $Password;
     
       /**
     * @var string
     *
     * @ORM\Column(name="Nm", type="string", length=50)
     */
    private $Nm;
         
       /**
     * @var datetime
     *
     * @ORM\Column(name="DateClose", type="datetime", length=8)
     */
    private $DateClose;
         /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="CountryC", type="integer")
     * 
     */
    private $CountryC;
            /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="CityC", type="integer")
     * 
     */
    private $CityC;
      
       /**
     * @var string
     *
     * @ORM\Column(name="Address", type="string", length=50)
     */
    private $Address;
     
       /**
     * @var string
     *
     * @ORM\Column(name="LogoImage", type="string", length=100)
     */
    private $LogoImage;
    /**
     * Get C
     *
     * @return integer
     */
     public function getC()
    {
        return $this->C;
    }
    /**
     * Set Email
     *
     * @param string $Email
     *
     * @return Companies
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Nm
     *
     * @param string $Nm
     *
     * @return Companies
     */
    public function setNm($Nm)
    {
        $this->Nm = $Nm;

        return $this;
    }

    /**
     * Get Nm
     *
     * @return string
     */
    public function getNm()
    {
        return $this->Nm;
    }
    /**
     * Set Address
     *
     * @param string $Address
     *
     * @return Companies
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;

        return $this;
    }
    /**
     * Get Address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }
     /**
     * Set LogoImage
     *
     * @param string $LogoImage
     *
     * @return Companies
     */
    public function setLogoImage($LogoImage)
    {
        $this->LogoImage = $Address;

        return $this;
    }

    /**
     * Get LogoImage
     *
     * @return string
     */
    public function getLogoImage()
    {
        return $this->LogoImage;
    }
}
