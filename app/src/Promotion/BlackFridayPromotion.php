<?php

namespace src\Promotion;

use Override;

class BlackFridayPromotion implements PromotionInterface
{
    /**
     * @return int|float
     */
    #[Override] public function getDiscount(): int|float
    {
        return 0.7; // 30% discount on black friday promotion
    }
}