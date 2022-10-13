<?php

namespace TDD\Store\HR;

class Position
{
    private $positions = array(
        'developer' => 'TDD\Store\HR\TenOrTwentyPercent',
        'dba' => 'TDD\Store\HR\FifteenOrTwentyFivePercent',
        'tester' => 'TDD\Store\HR\FifteenOrTwentyFivePercent'
    );
    private $rule;

    
    public function __construct($rule)
    {
        if (array_key_exists($rule, $this->positions)) {
            $this->rule = $this->positions[$rule];
        } else {
            throw new \Exception("Invalid role");
        }
    }


    public function getRule()
    {
        return new $this->rule();
    }
}