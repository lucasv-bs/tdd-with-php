<?php

namespace TDD\Store\Cart;

use TDD\Store\Cart\ShoppingCart,
    TDD\Store\Product\Product,
    TDD\Store\Test\TestCase,
    TDD\Store\Test\ShoppingCartBuilder;

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


    public function testDemonstratesUsingTheTestDataBuilder()
    {
        $cart = (new ShoppingCartBuilder())->withItems(300.0, 700.0, 200.0, 500.0)->create();

        $value = $cart->maxValue();

        $this->assertEqualsWithDelta(700.0, $value, 0.0001);
    }
}