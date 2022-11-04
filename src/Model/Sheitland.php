<?php
namespace App\Model;

class Sheitland extends Equine{
    public function __construct(string $name, string $color, int $water, Rider $rider) {
        parent::__construct($name, $color, $water, $rider);
        parent::setCategory("Sheitland");
    }
}