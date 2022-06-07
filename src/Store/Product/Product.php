<?php

namespace TDD\Store\Product;

class Product
{
    private $name;
    private $unitValue;
    private $quantity;
    private $status = true;

    /**
     * @codeCoverageIgnore
     * @param string $name
     * @param float $unitValue
     * @param int $quantity
     */
    public function __construct($name, $unitValue, $quantity)
    {
        $this->name = $name;
        $this->unitValue = $unitValue;
        $this->quantity = $quantity;
    }

    function getName()
    {
        return $this->name;
    }

    function getUnitValue()
    {
        return $this->unitValue;
    }

    function getQuantity()
    {
        return $this->quantity;
    }

    public function getTotalValue()
    {
        return $this->unitValue * $this->quantity;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    public function inactivate()
    {
        $this->status = false;

    }

}