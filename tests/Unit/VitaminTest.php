<?php

namespace MontopolisTests\Fda\Unit;

class VitaminTest extends \AbstractRoundingTest
{
    protected function getTestCases()
    {
        return [
            "1" => 0,
        ];
    }

    protected function round($value)
    {
        return $this->sut->calorie($value)->toInt();
    }
}