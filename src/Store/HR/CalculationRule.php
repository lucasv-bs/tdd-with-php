<?php

namespace TDD\Store\HR;

use TDD\Store\HR\Employee;

abstract class CalculationRule
{
    public function calculate(Employee $employee)
    {
        $salary = $employee->getSalary();
        if ($salary > $this->limit()) {
            return $salary * $this->percentageAboveLimit();
        }
        return $salary * $this->basePercentage();
    }


    protected function limit() {}

    protected function basePercentage() {}

    protected function percentageAboveLimit() {}
}