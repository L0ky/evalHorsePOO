<?php
namespace App\Model;

class Poney extends Equine{
    public function __construct(string $name, string $color, int $water, Rider $rider) {
        parent::__construct($name, $color, $water, $rider);
    }

    public function __toString()
    {
        return "Nom : " . $this->getName() . "\n" .
        "ID : " . $this->getId() . "\n" .
        "Couleur : " . $this->getColor() . "\n" .
        "Eau : " . $this->getWater() . "\n" .
        "Rider : " . $this->getRider()->getName() . "\n";
    }
}