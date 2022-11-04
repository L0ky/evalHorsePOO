<?php 
namespace App\Model;

abstract class Equine extends Animal {
    private string $id;
    private string $color;
    private string $water;
    private Rider $rider;

    public function __construct(string $name, string $color, string $water, Rider $rider) {
        parent::__construct($name);

        $this->setColor($color)
            ->setId()
            ->setWater($water)
            ->setRider($rider);
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
        // $color = ['Alzan', 'Bai', 'Pie', 'Grey', 'White'];

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
        $id = "000" . substr($this->getName(), 0, 1) . substr($this->getColor(), 0, 1);

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
        $this->rider = $rider;

        return $this;
    }
}