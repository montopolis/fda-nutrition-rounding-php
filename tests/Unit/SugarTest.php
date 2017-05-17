<?php

namespace MontopolisTests\Fda\Unit;

class SugarTest extends \AbstractRoundingTest
{
    protected function getTestCases()
    {
        return [
            123 => 120,
        ];
    }

    protected function round($value)
    {
        return $this->sut->calorie($value)->toInt();
    }
}