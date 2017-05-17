<?php

namespace MontopolisTests\Fda\Unit;

class MineralTest extends \AbstractRoundingTest
{
    protected function getTestCases()
    {
        return [
            '0' => 0,
            '1' => 2,
            '2' => 2,
            '5' => 6,
            '10' => 10,
            '12' => 10,
            '13' => 15,
            '12.5' => 15,
            '50' => 50,
            '54' => 50,
            '55' => 60,
        ];
    }

    protected function round($value)
    {
        return $this->sut->mineral($value)->toInt();
    }
}