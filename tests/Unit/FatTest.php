<?php

namespace MontopolisTests\Fda\Unit;

class FatTest extends \AbstractRoundingTest
{
    protected function getTestCases()
    {
        return [
            "5.1" => 5,
            "0" => 0,
            ".49" => 0,
            ".5" => 0.5,
            ".51" => 0.5,
            ".99" => 1,
            "1" => 1,
            "1.49" => 1.5,
            "1.5" => 1.5,
            "5" => 5,
            "5.5" => 6,
        ];
    }

    protected function round($value)
    {
        return $this->sut->fat($value)->toFloat();
    }
}