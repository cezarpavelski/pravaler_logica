<?php

namespace App\ShoppingCart;

use App\ShoppingCart\DiscountRules\GreaterThan10;
use App\ShoppingCart\DiscountRules\GreaterThan5AndSmallerEqualTo10;
use App\ShoppingCart\DiscountRules\SmallerEqualTo5;

class ShoppingCart
{
    private Product $product;

    private int $quantity;

    private float $total;

    private float $totalFinal;

    private float $totalDiscount;

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->calculate();
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getTotalFinal(): float
    {
        return $this->totalFinal;
    }

    public function getTotalDiscount(): float
    {
        return $this->totalDiscount;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    private function calculate(): void
    {
        $discount = new SmallerEqualTo5($this,
            new GreaterThan5AndSmallerEqualTo10($this,
                new GreaterThan10($this)
            )
        );

        $this->total = $this->getProduct()->getPrice() * $this->quantity;
        $this->totalDiscount = $discount->calculate();
        $this->totalFinal = $this->total - $this->totalDiscount;
    }
}
