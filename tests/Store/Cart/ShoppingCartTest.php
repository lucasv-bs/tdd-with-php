<?php

namespace TDD\Store\Cart;

use TDD\Store\Cart\ShoppingCart,
    TDD\Store\Product\Product,
    TDD\Store\Test\TestCase,
    TDD\Store\Test\ShoppingCartBuilder;

class ShoppingCartTest extends TestCase
{
    private $cart;

    protected function setUp(): void
    {
        $this->cart = new ShoppingCart();
        parent::setUp();
    }


    public function testMustReturnZeroIfCartIsEmpty()
    {
        $value = $this->cart->maxValue();

        $this->assertEqualsWithDelta(0, $value, 0.0001);
    }


    public function testMustReturnItemValueIfCartHas1Element()
    {
        $this->cart->add(new Product("Geladeira", 900.00, 1));

        $value = $this->cart->maxValue();

        $this->assertEqualsWithDelta(900.00, $value, 0.0001);
    }


    public function testMustReturnMaxValueIfCartWithManyElements()
    {
        $this->cart->add(new Product("Geladeira", 900.00, 1));
        $this->cart->add(new Product("Fogão", 1500.00, 1));
        $this->cart->add(new Product("Máquina de lavar", 750.00, 1));

        $value = $this->cart->maxValue();

        $this->assertEqualsWithDelta(1500.00, $value, 0.0001);
    }


    public function testDemonstratesUsingTheTestDataBuilder()
    {
        $cart = (new ShoppingCartBuilder())->withItems(300.0, 700.0, 200.0, 500.0)->create();

        $value = $cart->maxValue();

        $this->assertEqualsWithDelta(700.0, $value, 0.0001);
    }


    public function testMustAddItems()
    {
        $this->assertEmpty($this->cart->getProducts());

        $product = new Product('Geladeira', 900.0, 1);
        $this->cart->add($product);

        $expected = count($this->cart->getProducts());
        $this->assertEquals(1, $expected);
        $this->assertEquals($product, $this->cart->getProducts()[0]);
    }


    public function testListOfProducts()
    {
        $productList = (new ShoppingCart())
            ->add(new Product('Jogo de jantar', 200.0, 1))
            ->add(new Product('Jogo de pratos', 100.0, 1));

        $this->assertEquals(2, count($productList->getProducts()));
        $this->assertEquals(200.0, $productList->getProducts()[0]->getUnitValue());
        $this->assertEquals(100.0, $productList->getProducts()[1]->getUnitValue());
    }
}