<?php

namespace B2B\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Company
 *
 * @ORM\Table(name="companyy")
 * @ORM\Entity(repositoryClass="B2B\BlogBundle\Entity\CompanyRepository")
 */
class Company{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_company", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_company;
    
       /**
     * @var string
     *
     * @ORM\Column(name="name_company", type="string", length=255)
     */
    private $name_company;
       /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=50)
     */
    private $logo;

    /**
     * Get idCompany
     *
     * @return integer
     */
    public function getIdCompany()
    {
        return $this->id_company;
    }

    /**
     * Set nameCompany
     *
     * @param string $nameCompany
     *
     * @return Company
     */
    public function setNameCompany($nameCompany)
    {
        $this->name_company = $nameCompany;

        return $this;
    }

    /**
     * Get nameCompany
     *
     * @return string
     */
    public function getNameCompany()
    {
        return $this->name_company;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Company
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }
}
