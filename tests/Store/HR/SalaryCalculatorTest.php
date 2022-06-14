<?php

namespace TDD\Store\HR;

require "./vendor/autoload.php";

use TDD\Store\HR\SalaryCalculator, 
    TDD\Store\HR\Employee, 
    TDD\Store\HR\PositionTable;
use PHPUnit\Framework\TestCase as PHPUnit;

class SalaryCalculatorTest extends PHPUnit
{
    public function testSalaryCalculationForDevelopersWithSalaryBelowTheThreshold()
    {
        $calculator = new SalaryCalculator();
        $developer = new Employee("Fulano", 1500.0, PositionTable::DEVELOPER);

        $salary = $calculator->calculateSalary($developer);

        $this->assertEqualsWithDelta(1500 * 0.9, $salary, 0.00001);
    }


    public function testSalaryCalculationForDevelopersWithSalaryAboveTheThreshold()
    {
        $calculator = new SalaryCalculator();
        $developer = new Employee("Fulano", 4000.0, PositionTable::DEVELOPER);

        $salary = $calculator->calculateSalary($developer);

        $this->assertEqualsWithDelta(4000.0 * 0.8, $salary, 0.00001);
    }


    public function testSalaryCalculationForDBAsWithSalaryBelowTheThreshold()
    {
        $calculator = new SalaryCalculator();
        $dba = new Employee("Fulano", 500.0, PositionTable::DBA);

        $salary = $calculator->calculateSalary($dba);

        $this->assertEqualsWithDelta(500.0 * 0.85, $salary, 0.00001);
    }
}