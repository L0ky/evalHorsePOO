<?php 
namespace App\Model;

abstract class Animal {
    private string $name;

    public function __construct(string $name) {
        $this->setName($name);
    }

    public function __toString()
    {
        return "Nom : " . $this->getName() . "\n";
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
}