<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $name;

    /**
     * @var string
     */
    private $return;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param integer $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return integer 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set return
     *
     * @param string $return
     * @return Product
     */
    public function setReturn($return)
    {
        $this->return = $return;

        return $this;
    }

    /**
     * Get return
     *
     * @return string 
     */
    public function getReturn()
    {
        return $this->return;
    }
}
