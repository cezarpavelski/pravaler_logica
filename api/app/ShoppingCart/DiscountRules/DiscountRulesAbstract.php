<?php

namespace App\ShoppingCart\DiscountRules;

use App\ShoppingCart\ShoppingCart;

abstract class DiscountRulesAbstract implements DiscountRulesInterface
{
    protected ShoppingCart $shoppingCart;
    private ?DiscountRulesInterface $nextRule;

    public function __construct(ShoppingCart $shoppingCart, ?DiscountRulesInterface $nextRule = null)
    {
        $this->shoppingCart = $shoppingCart;
        $this->nextRule = $nextRule;
    }

    public function calculate(): float
    {
        if ($this->rule()) {
            $price = $this->shoppingCart->getProduct()->getPrice();
            $quantity = $this->shoppingCart->getQuantity();
            return ($price * $quantity) * $this->getDiscount();
        }

        return $this->nextRule->calculate();
    }
}
