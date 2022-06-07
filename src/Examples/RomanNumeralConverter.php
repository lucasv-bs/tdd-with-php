<?php

namespace TDD\Examples;

class RomanNumeralConverter
{
    protected $table = array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    );


    public function convert($romanNumber)
    {
        $accumulator = 0;
        $rightNeighbor = 0;
        for ($i = strlen($romanNumber) - 1; $i >= 0; $i--)
        {
            $currentSymbol = 0;
            $currentNumber = $romanNumber[$i];
            if ( array_key_exists($currentNumber, $this->table) )
            {
                $currentSymbol = $this->table[$currentNumber];
            }

            $multiplier = 1;
            if ($currentSymbol < $rightNeighbor)
            {
                $multiplier = -1;
            }

            $accumulator += ($currentSymbol * $multiplier);

            $rightNeighbor = $currentSymbol;
        }

        return $accumulator;
    }
}