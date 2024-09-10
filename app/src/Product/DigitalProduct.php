<?php

namespace src\Product;

use Override;

class DigitalProduct extends AbstractProduct
{
    /**
     * @return float
     */
    #[Override] public function calculateTotalPrice(): float
    {
        $total = $this->getPrice() * $this->getQuantity();

        if ($this->getQuantity() > 5) {
            $total *= 0.8;
        }

        return $total;
    }
}