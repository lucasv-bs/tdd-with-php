<?php

namespace TDD\Store\HR;

use TDD\Store\HR\Employee;

class SalaryCalculator
{
    public function calculateSalary(Employee $employee)
    {
        if ($employee->getPosition() === PositionTable::DEVELOPER) 
        {
            if ($employee->getSalary() > 3000.0) 
            {
                return $employee->getSalary() * 0.8;
            }
            return $employee->getSalary() * 0.9;
        }
        return $employee->getSalary() * 0.85;
    }
}
