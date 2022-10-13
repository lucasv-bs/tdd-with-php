<?php

namespace TDD\Store\HR;

use TDD\Store\HR\Employee,
    TDD\Store\HR\Position;

class SalaryCalculator
{
    public function calculateSalary(Employee $employee)
    {
        $position = new Position($employee->getPosition());

        return $position->getRule()->calculate($employee);
    }
}
