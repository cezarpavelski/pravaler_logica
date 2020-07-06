<?php


namespace App\ShoppingCart\DiscountRules;


use App\ShoppingCart\ShoppingCart;

interface DiscountRulesInterface
{
    public function calculate(): float;
    public function getDiscount(): float;
    public function rule(): bool;
}