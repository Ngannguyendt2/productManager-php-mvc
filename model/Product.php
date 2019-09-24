<?php

namespace model;
class Product
{
private $id;
private $name;
private $price;
private $description;
private $vendor;

public function __construct($name,$price,$description,$vendor)
{
    $this->name=$name;
    $this->price=$price;
    $this->description=$description;
    $this->vendor=$vendor;
}

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}