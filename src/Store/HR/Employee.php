<?php

namespace TDD\Store\HR;

class Employee
{
    protected $name;
    protected $salary;
    protected $position;


    public function __construct($name, $salary, $position)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getSalary()
    {
        return $this->salary;
    }


    public function getPosition()
    {
        return $this->position;
    }
}