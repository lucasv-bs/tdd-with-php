<?php

namespace TDD\Store\HR;

use TDD\Store\HR\CalculationRule;

class FifteenOrTwentyFivePercent extends CalculationRule
{
    protected function limit() {
        return 2500;
    }

    protected function basePercentage() {
        return 0.85;
    }

    protected function percentageAboveLimit() {
        return 0.75;
    }
}