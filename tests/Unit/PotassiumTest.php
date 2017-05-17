<?php

namespace MontopolisTests\Fda\Unit;

class PotassiumTest extends \AbstractRoundingTest
{
    protected function getTestCases()
    {
        return [
            123 => 120,
        ];
    }

    protected function round($value)
    {
        return $this->sut->potassium($value)->toInt();
    }
}