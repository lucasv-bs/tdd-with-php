<?php

namespace TDD\Store\Test;

use TDD\Store\Cart\ShoppingCart,
    TDD\Store\Product\Product;

class ShoppingCartBuilder
{
    public $cart;

    public function __construct()
    {
        $this->cart = new ShoppingCart();
    }


    public function withItems()
    {
        $values = func_get_args();
        foreach($values as $value) {
            $this->cart->add(new Product("Item", $value, 1));
        }

        return $this;
    }


    public function create()
    {
        return $this->cart;
    }
}