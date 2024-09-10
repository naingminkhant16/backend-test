<?php

namespace src\Product;

use Override;

class PhysicalProduct extends AbstractProduct
{
    private float $shippingCost;

    /**
     * @param string $name
     * @param float $price
     * @param int $quantity
     * @param float $shippingCost
     */
    public function __construct(string $name, float $price, int $quantity, float $shippingCost)
    {
        parent::__construct($name, $price, $quantity);
        $this->shippingCost = $shippingCost;
    }

    /**
     * @return float
     */
    public function getShippingCost(): float
    {
        return $this->shippingCost;
    }

    /**
     * @param float $shippingCost
     * @return void
     */
    public function setShippingCost(float $shippingCost): void
    {
        $this->shippingCost = $shippingCost;
    }

    /**
     * @return float
     */
    #[Override] public function calculateTotalPrice(): float
    {
        $total = ($this->getPrice() * $this->getQuantity()) + $this->shippingCost;

        if ($this->getQuantity() > 10) {
            $total *= 0.9;
        }

        return $total;
    }

    /**
     * @return string
     */
    #[Override] public function getDetails(): string
    {
        return "Product Name : " . $this->getName() . "\n" .
            "Product Price : " . $this->getPrice() . "\n" .
            "Quantity : " . $this->getQuantity() . "\n" .
            "Shipping Cost : " . $this->getShippingCost() . "\n" .
            "Total Price : " . $this->calculateTotalPrice() . "\n";
    }
}