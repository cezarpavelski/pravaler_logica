<?php

use App\ShoppingCart\Product;
use App\ShoppingCart\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{
    public function testValorQuantidadeMenorQue5(): void {
        $tv = new Product('TV', 2000.50);
        $shoppingCart = new ShoppingCart($tv, 4);

        $this->assertEquals(8002, $shoppingCart->getTotal());
        $this->assertEquals(160.04, $shoppingCart->getTotalDiscount());
        $this->assertEquals(7841.96, $shoppingCart->getTotalFinal());
    }

    public function testValorQuantidadeIgualA5(): void {
        $tv = new Product('TV', 2000.50);
        $shoppingCart = new ShoppingCart($tv, 5);

        $this->assertEquals(10002.5, $shoppingCart->getTotal());
        $this->assertEquals(200.05, $shoppingCart->getTotalDiscount());
        $this->assertEquals(9802.45, $shoppingCart->getTotalFinal());
    }

    public function testValorQuantidadeMaiorQue5EMenorQue10(): void {
        $tv = new Product('TV', 2000.50);
        $shoppingCart = new ShoppingCart($tv, 7);

        $this->assertEquals(14003.5, $shoppingCart->getTotal());
        $this->assertEquals(420.105, $shoppingCart->getTotalDiscount());
        $this->assertEquals(13583.395, $shoppingCart->getTotalFinal());
    }

    public function testValorQuantidadeIgualA10(): void {
        $tv = new Product('TV', 2000.50);
        $shoppingCart = new ShoppingCart($tv, 10);

        $this->assertEquals(20005, $shoppingCart->getTotal());
        $this->assertEquals(600.15, $shoppingCart->getTotalDiscount());
        $this->assertEquals(19404.85, $shoppingCart->getTotalFinal());
    }

    public function testValorQuantidadeMaiorQue10(): void {
        $tv = new Product('TV', 2000.50);
        $shoppingCart = new ShoppingCart($tv, 15);

        $this->assertEquals(30007.5, $shoppingCart->getTotal());
        $this->assertEquals(1500.375, $shoppingCart->getTotalDiscount());
        $this->assertEquals(28507.125, $shoppingCart->getTotalFinal());
    }
}
