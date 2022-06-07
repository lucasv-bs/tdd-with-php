<?php

namespace TDD\Store\Product;

use TDD\Store\Cart\ShoppingCart;

class MaxMin
{
    private $min;
    private $max;

    
    public function find(ShoppingCart $cart)
    {
        foreach ($cart->getProducts() as $product)
        {
            if (empty($this->min) || $product->getUnitValue() < $this->min->getUnitValue())
            {
                $this->min = $product;
            }
            if (empty($this->max) || $product->getUnitValue() > $this->max->getUnitValue())
            {
                $this->max = $product;
            }
        }
    }

    
    public function getMin()
    {
        return $this->min;
    }


    public function getMax()
    {
        return $this->max;
    }
}