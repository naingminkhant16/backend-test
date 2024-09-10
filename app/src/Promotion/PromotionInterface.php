<?php

namespace src\Promotion;

interface PromotionInterface
{
    /**
     * @return int|float
     */
    public function getDiscount(): int|float;
}