<?php

namespace MontopolisTests\Fda\Unit;

class CalorieTest extends \AbstractRoundingTest
{
    protected function getTestCases()
    {
        return [
            "1" => 0,
            "4.5" => 0,
            "4.99" => 0,
            "5" => 5,
            "50" => 50,
            "54" => 50,
            "55" => 60,
            "123" => 120,
            "199" => 200,
        ];
    }

    protected function round($value)
    {
        return $this->sut->calorie($value)->toInt();
    }
}