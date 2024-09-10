<?php

namespace src\Cart;

use Exception;
use src\Product\AbstractProduct;
use src\Promotion\PromotionInterface;

class Cart
{
    private array $products = [];
    private $discount = 1;

    /**
     * @param AbstractProduct $product
     * @return void
     */
    public function addProduct(AbstractProduct $product): void
    {
        $this->products[] = $product;
    }

    /**
     * @param AbstractProduct $product
     * @return void
     */
    public function removeProduct(AbstractProduct $product): void
    {
        try {
            $index = array_search($product, $this->products);
            if ($index !== false) {
                unset($this->products[$index]);
            } else {
                throw new Exception("Product not found in cart.\n");
            }
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * @return float|int
     */
    public function calculateTotalAmount(): float|int
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->calculateTotalPrice();
        }
        return $total * $this->discount;
    }

    /**
     * @return string
     */
    public function getCartDetails(): string
    {
        $details = "";
        foreach ($this->products as $product) {
            $details .= $product->getDetails() . "\n";
        }
        return $details;
    }

    /**
     * @param PromotionInterface $promotion
     * @return void
     */
    public function applyPromotion(PromotionInterface $promotion): void
    {
        $this->discount = $promotion->getDiscount();
    }
}