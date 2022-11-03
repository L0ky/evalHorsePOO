<?php 
namespace App\Model;

class Manager extends Human {
    public function __construct(string $name, Category $categorie, string $adress, string $street, string $postcode, string $city) 
    {
        parent::__construct($name, $categorie, $adress, $street, $postcode, $city);
    }

    public function __toString(): string
    {
        return "Nom : " . $this->getName() . "\n" .
        // "Catégorie : " . $this->getCategorie() . "\n" .
        "Adresse : " . $this->getAdress() . "\n" .
        "Rue : " . $this->getStreet() . "\n" .
        "Code postal : " . $this->getPostcode() . "\n" .
        "Ville : " . $this->getCity() . "\n" ;
    }
}