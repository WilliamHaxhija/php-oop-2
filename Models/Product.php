<?php
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Game.php';
require_once __DIR__ . '/DogsBed.php';
class Product {
    public $animal;
    public $image = 'https://c8.alamy.com/compit/2e5ec9k/vettore-di-cane-faccia-e-gatto-faccia-disegno-su-sfondo-bianco-pet-animale-illustrazione-vettoriale-a-livelli-facilmente-modificabile-2e5ec9k.jpg';
    public function __construct($_animal) {
        $this->animal = $_animal;
    }
}