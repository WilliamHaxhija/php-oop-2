<?php
class DogsBed extends Product {
    public $type;
    public $name;
    public $price;
    public function __construct($_animal, string $_type, float $_price, $_name) {
        $this->animal = $_animal;
        $this->type = $_type;
        $this->price = $_price;
        $this->name = $_name;
    }
}