<?php
require_once __DIR__ . '/../Traits/Dimensions.php';
class DogsBed extends Product {
    use Dimensions;
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