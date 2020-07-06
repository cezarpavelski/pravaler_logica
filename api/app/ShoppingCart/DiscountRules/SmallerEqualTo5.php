<?php

namespace App\ShoppingCart\DiscountRules;

use App\ShoppingCart\ShoppingCart;

class SmallerEqualTo5 extends DiscountRulesAbstract
{
    private const DISCOUNT = 0.02;

    public function getDiscount(): float
    {
        return self::DISCOUNT;
    }

    public function rule(): bool
    {
        return $this->shoppingCart->getQuantity() <= 5;
    }
}
