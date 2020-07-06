<?php

namespace App\ShoppingCart;

class Product
{
    private string $description;

    private float $price;

    public function __construct(string $description, float $price)
    {
        $this->description = $description;
        $this->price = $price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
