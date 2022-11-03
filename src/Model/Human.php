<?php 
namespace App\Model;

abstract class Human extends Address {
    private string $name;
    public Category $categorie;

    public function __construct(string $name, Category $categorie, string $adress, string $street, string $postcode, string $city) 
    {
        parent::__construct($adress, $street, $postcode, $city);

        $this->setName($name)
            ->setCategorie($categorie);
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

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    private function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of categorie
     *
     * @return Category
     */
    public function getCategorie(): Category
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @param Category $categorie
     *
     * @return self
     */
    private function setCategorie(Category $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}