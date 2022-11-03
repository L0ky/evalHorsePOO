<?php 
namespace App\Model;

class Address {
    private string $adress;
    private string $street;
    private string $postcode;
    private string $city;

    public function __construct(string $adress, string $street, string $postcode, string $city) {
        $this->setAdress($adress)
            ->setStreet($street)
            ->setPostcode($postcode)
            ->setCity($city);
    }

    /**
     * Get the value of city
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of postcode
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * Set the value of postcode
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get the value of street
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of adress
     *
     * @return string
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @param string $adress
     *
     * @return self
     */
    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }
}