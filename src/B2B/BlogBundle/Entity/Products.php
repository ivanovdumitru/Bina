<?php

namespace B2B\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Company
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="B2B\BlogBundle\Entity\CompanyRepository")
 */
class Products{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id_products", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_products;
    /**
     * @var integer
     * @ORM\Column(name="id_company", type="integer")
     */
    private $id_company;
    /**
     * @var string
     * @ORM\Column(name="den_products",type="string", length=255)
     */
    private $den_products;
    /**
     * var string
     * @ORM\Column(name="img_products",type="string", length=30)
     */
    private $img_products;
     /**
     * var string
     * @ORM\Column(name="description",type="string", length=text)
     */

    /**
     * Get idProducts
     *
     * @return integer
     */
    public function getIdProducts()
    {
        return $this->id_products;
    }

    /**
     * Set idCompany
     *
     * @param integer $idCompany
     *
     * @return Products
     */
    public function setIdCompany($idCompany)
    {
        $this->id_company = $idCompany;

        return $this;
    }

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
     * Set denProducts
     *
     * @param string $denProducts
     *
     * @return Products
     */
    public function setDenProducts($denProducts)
    {
        $this->den_products = $denProducts;

        return $this;
    }

    /**
     * Get denProducts
     *
     * @return string
     */
    public function getDenProducts()
    {
        return $this->den_products;
    }

    /**
     * Set imgProducts
     *
     * @param string $imgProducts
     *
     * @return Products
     */
    public function setImgProducts($imgProducts)
    {
        $this->img_products = $imgProducts;

        return $this;
    }

    /**
     * Get imgProducts
     *
     * @return string
     */
    public function getImgProducts()
    {
        return $this->img_products;
    }
}
