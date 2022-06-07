<?php

namespace TDD\Store\Product;

require "./vendor/autoload.php";

use TDD\Store\Cart\ShoppingCart,
    TDD\Store\Product\Product,
    TDD\Store\Product\MaxMin;
use PHPUnit\Framework\TestCase as PHPUnit;


class MaxMinTest extends PHPUnit
{
    public function testDescendingOrder()
    {
        $cart = new ShoppingCart();

        $cart->add(new Product('Geladeira', 450.00, 5));
        $cart->add(new Product('Liquidificador', 250.00, 5));
        $cart->add(new Product('Jogo de pratos', 70.00, 5));

        $maxMin = new MaxMin();
        $maxMin->find($cart);

        $this->assertEquals('Jogo de pratos', $maxMin->getMin()->getName());
        $this->assertEquals('Geladeira', $maxMin->getMax()->getName());
    }


    public function testJustOneProduct()
    {
        $cart = new ShoppingCart();

        $cart->add(new Product('Geladeira', 450.00, 5));

        $maxMin =  new MaxMin();
        $maxMin->find($cart);

        $this->assertEquals('Geladeira', $maxMin->getMin()->getName());
        $this->assertEquals('Geladeira', $maxMin->getMax()->getName());
    }
}