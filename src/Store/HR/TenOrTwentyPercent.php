<?php

namespace TDD\Store\HR;

use TDD\Store\HR\CalculationRule;

class TenOrTwentyPercent extends CalculationRule
{
    protected function limit() {
        return 3000;
    }

    protected function basePercentage() {
        return 0.9;
    }

    protected function percentageAboveLimit() {
        return 0.8;
    }
}