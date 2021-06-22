<?php


class Product
{
    public $id;
    public $name;
    public $price;
    public $img;
    public function __construct($id, $name,$price,$img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price=$price;
        $this->img=$img;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getImg()
    {
        return $this->img;
    }


    public function setImg($img): void
    {
        $this->img = $img;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


}