<?php 
namespace App\Model;

abstract class Equine extends Animal {
    private string $id;
    private string $color;
    private string $water;
    private Rider $rider;
    private static int $count = 0;
    private string $category;
    private array $collection = [];
    

    public function __construct(string $name, string $color, string $water, Rider $rider) {
        parent::__construct($name);

        $this->setColor($color)
            ->setId()
            ->setWater($water)
            ->setRider($rider);
            self::$count++;
    }

    public function __toString()
    {
        return  "ID : " . $this->getId() . "\n" .
        "Categorie : " . $this->getCategory() . "\n" .
        parent::__toString() .
        "Couleur : " . $this->getColor() . "\n" .
        "Eau : " . $this->getWater() . "\n" .
        "Rider : " . $this->getRider()->getName() . "\n";
    }

        /**
     * Get the value of color
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color): self
    {
        $colors = ['Alzan', 'Bai', 'Pie', 'Grey', 'White'];
        
        if (in_array($color, $colors)) {
            $this->color = $color;
        } else {
            throw new \Exception("La couleur n'est pas valide");
        }

        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(): self
    {
        $id = "000" . "-" . substr($this->getName(), 0, 1) . "-" . substr($this->getColor(), 0, 1) . "-" . self::$count;

        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of water
     *
     * @return string
     */
    public function getWater(): string
    {
        return $this->water;
    }

    /**
     * Set the value of water
     *
     * @param string $water
     *
     * @return self
     */
    public function setWater(string $water): self
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get the value of rider
     *
     * @return Rider
     */
    public function getRider(): Rider
    {
        return $this->rider;
    }

    /**
     * Set the value of rider
     *
     * @param Rider $rider
     *
     * @return self
     */
    public function setRider(Rider $rider): self
    {

        if(in_array($rider, $this->getCollection())) {
            throw new \Exception("Un cavalier est déjà présent");
        } else {
            $this->setCollection($rider);
        }

        return $this;
    }

    /**
     * Get the value of count
     *
     * @return int
     */
    public static function getCount(): int
    {
        return self::$count;
    }

    /**
     * Get the value of category
     *
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $choice = ['Sheitland', 'Poney', 'Horse'];
        if (in_array($category, $choice)) {
            $this->category = $category;
        } else {
            throw new \Exception("La catégorie n'est pas valide");
        }

        $this->category = $category;

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
    public function setCollection(Rider $collection): self
    {
        $this->collection[] = $collection;

        return $this;
    }
}