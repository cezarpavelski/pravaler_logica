<?php

namespace App\ShoppingCart\DiscountRules;

use App\ShoppingCart\ShoppingCart;

class GreaterThan5AndSmallerEqualTo10 extends DiscountRulesAbstract
{
    private const DISCOUNT = 0.03;

    public function getDiscount(): float
    {
       return self::DISCOUNT;
    }

    public function rule(): bool
    {
        return $this->shoppingCart->getQuantity() > 5 && $this->shoppingCart->getQuantity() <= 10;
    }
}
