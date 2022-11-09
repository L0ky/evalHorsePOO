<?php 
namespace App\Model;


class Rider extends Human {
    public string $gameType;
    private Equine $equine;
    public array $collection = [];

    public function __construct(string $name, Category $categorie, string $gameType, string $adress, string $street, string $postcode, string $city) 
    {
        parent::__construct($name, $categorie, $adress, $street, $postcode, $city);

        $this->setGameType($gameType);
    }

    public function __toString()
    {
        return parent::__toString() . 
        "Cheval possédé: " . count($this->getCollection()) . "\n";
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

    /**
     * Get the value of equine
     *
     * @return Equine
     */
    public function getEquine(): Equine
    {
        return $this->equine;
    }

    /**
     * Set the value of equine
     *
     * @param Equine $equine
     *
     * @return self
     */
    public function setEquine(Equine $equine): self
    {
        if (count($this->getCollection()) < 5 && !in_array($equine, $this->getCollection())) {
            // $this->equine = $equine;
            $this->setCollection($this->equine);
        } else {
            throw new \Exception("Vous avez déjà 5 chevaux");
        }
        
        return $this;
    }

    /**
     * Get the value of collection
     *
     * @return array
     */
    public function getCollection(): array
    {
        return $this->collection;
    }

    /**
     * Set the value of collection
     *
     * @param array $collection
     *
     * @return self
     */
    public function setCollection(Equine $collection): self
    {
        $this->collection[] = $collection;

        return $this;
    }
}