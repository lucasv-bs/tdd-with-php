<?php

namespace TDD\Store\Cart;

use TDD\Store\Test\TestCase,
    TDD\Store\Cart\ShoppingCart,
    TDD\Store\Product\Product;

class ShoppingCartTest extends TestCase
{
    public function testMustReturnZeroIfCartIsEmpty()
    {
        $cart = new ShoppingCart();

        $value = $cart->maxValue();

        $this->assertEqualsWithDelta(0, $value, 0.0001);
    }


    public function testMustReturnItemValueIfCartHas1Element()
    {
        $cart = new ShoppingCart();
        $cart->add(new Product("Geladeira", 900.00, 1));

        $value = $cart->maxValue();

        $this->assertEqualsWithDelta(900.00, $value, 0.0001);
    }


    public function testMustReturnMaxValueIfCartWithManyElements()
    {
        $cart = new ShoppingCart();

        $cart->add(new Product("Geladeira", 900.00, 1));
        $cart->add(new Product("Fogão", 1500.00, 1));
        $cart->add(new Product("Máquina de lavar", 750.00, 1));

        $value = $cart->maxValue();

        $this->assertEqualsWithDelta(1500.00, $value, 0.0001);
    }
}