<?php

namespace src\Promotion;

use Override;

class NewYearPromotion implements PromotionInterface
{
    /**
     * @return int|float
     */
    #[Override] public function getDiscount(): int|float
    {
        return 0.8; // 20% discount on new year promotion
    }
}