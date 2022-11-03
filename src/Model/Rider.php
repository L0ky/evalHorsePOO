<?php 
namespace App\Model;


class Rider extends Human {
    public string $gameType;

    public function __construct(string $name, Category $categorie, string $adress, string $street, string $postcode, string $city) 
    {
        parent::__construct($name, $categorie, $adress, $street, $postcode, $city);
    }



    /**
     * Get the value of gameType
     *
     * @return string
     */
    public function getGameType(): string
    {
        return $this->gameType;
    }

    /**
     * Set the value of gameType
     *
     * @param string $gameType
     *
     * @return self
     */
    public function setGameType(string $gameType): self
    {
        $this->gameType = $gameType;

        return $this;
    }
}