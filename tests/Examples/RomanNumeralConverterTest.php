<?php

namespace TDD\Examples;

require './vendor/autoload.php';

use TDD\Examples\RomanNumeralConverter;
use PHPUnit\Framework\TestCase as PHPUnit;

class RomanNumeralConverterTest extends PHPUnit
{
    public function testMustUnderstandTheSymbolI()
    {
        $roman = new RomanNumeralConverter();
        
        $number = $roman->convert('I');

        $this->assertEquals(1, $number);
    }


    public function testMustUnderstandTheSymbolV()
    {
        $roman = new RomanNumeralConverter();

        $number = $roman->convert('V');

        $this->assertEquals(5, $number);
    }


    public function testMustUnderstandTheSymbolII()
    {
        $roman = new RomanNumeralConverter();

        $number = $roman->convert('II');

        $this->assertEquals(2, $number);
    }


    public function testMustUnderstandTheSymbolXXII()
    {
        $roman = new RomanNumeralConverter();

        $number = $roman->convert("XXII");

        $this->assertEquals(22, $number);
    }


    public function testMustUnderstandTheSymbolIX()
    {
        $roman = new RomanNumeralConverter();

        $number = $roman->convert("IX");

        $this->assertEquals(9, $number);
    }


    public function testMustUnderstandTheSymbolXXIV()
    {
        $roman = new RomanNumeralConverter();

        $number = $roman->convert("XXIV");

        $this->assertEquals(24, $number);
    }
}