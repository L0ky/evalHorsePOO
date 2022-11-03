<?php 
namespace App\Model;

class Stable extends Address{
    private string $name;
    private Manager $manager;

    public function __construct(string $name, string $adress, string $street, string $postcode, string $city, Manager $manager) 
    {
        parent::__construct($adress, $street, $postcode, $city);
        
        $this->setName($name)
            ->setManager($manager);

    }
    
    public function __toString(): string 
    {
        return "Nom de l'écurie : " . $this->getName() . "\n" .
        "Adresse : " . $this->getAdress() . "\n" .
        "Rue : " . $this->getStreet() . "\n" .
        "Code postal : " . $this->getPostcode() . "\n" .
        "Ville : " . $this->getCity() . "\n" ;
        // "Nom du gérant : " . $this->getManager()->getName() . "\n"
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
     * Get the value of manager
     *
     * @return Manager
     */
    public function getManager(): Manager
    {
        return $this->manager;
    }

    /**
     * Set the value of manager
     *
     * @param Manager $manager
     *
     * @return self
     */
    private function setManager(Manager $manager): self
    {
        $this->manager = $manager;

        return $this;
    }
}