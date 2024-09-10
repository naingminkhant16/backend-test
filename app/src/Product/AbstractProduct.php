<?php

namespace src\Product;
abstract class AbstractProduct
{
    private string $name;
    private float $price;
    private int $quantity;

    /**
     * @param string $name
     * @param float $price
     * @param int $quantity
     */
    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return void
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return void
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    abstract public function calculateTotalPrice(): float;

    /**
     * @return string
     */
    public function getDetails(): string
    {
        return "Product Name : $this->name \n" .
            "Product Price : $this->price\n" .
            "Quantity : $this->quantity\n" .
            "Total Price : " . $this->calculateTotalPrice() . "\n";
    }
}