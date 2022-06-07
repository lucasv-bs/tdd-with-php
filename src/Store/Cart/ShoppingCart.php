<?php

namespace TDD\Store\Cart;

use TDD\Store\Product\Product;
use ArrayObject;

class ShoppingCart
{
    private $products;

    /**
     * @codeCoverageIgnore
     */
    public function __construct()
    {
        $this->products = new ArrayObject();
    }


    public function add(Product $product)
    {
        $this->products->append($product);
        return $this;
    }


    public function getProducts()
    {
        return $this->products;
    }


    public function maxValue()
    {
        if (count($this->getProducts()) === 0)
        {
            return 0;
        }

        $maxValue = $this->getProducts[0]->getUnitValue();
        foreach($this->getProducts() as $product)
        {
            if ($maxValue < $product->getUnitValue())
            {
                $maxValue = $product->getUnitValue();
            }
        }
        return $maxValue;
    }
}