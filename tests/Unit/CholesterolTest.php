<?php

namespace MontopolisTests\Fda\Unit;

class CholesterolTest extends \AbstractRoundingTest
{
    protected function getTestCases()
    {
        return [
            123 => 120,
        ];
    }

    protected function round($value)
    {
        return $this->sut->cholesterol($value)->toInt();
    }
}