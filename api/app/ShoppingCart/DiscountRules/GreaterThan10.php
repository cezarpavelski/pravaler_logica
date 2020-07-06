<?php

namespace App\ShoppingCart\DiscountRules;

use App\ShoppingCart\ShoppingCart;

class GreaterThan10 extends DiscountRulesAbstract
{
    private const DISCOUNT = 0.05;

    public function getDiscount(): float
    {
        return self::DISCOUNT;
    }

    public function rule(): bool
    {
        return $this->shoppingCart->getQuantity() > 10;
    }
}
