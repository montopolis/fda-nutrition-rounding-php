<?php

namespace MontopolisTests\Fda\Unit;

class CarbohydrateTest extends \AbstractRoundingTest
{
    protected function getTestCases()
    {
        return [
            "0.49" => 0,
            "0.5" => 1,
            "0.99" => 1,
            "1.0" => 1,
            "1.5" => 2,
        ];
    }

    protected function round($value)
    {
        return $this->sut->carbohydrate($value)->toInt();
    }

    public function test_it_renders_string_value()
    {
        $str = '' . $this->sut->carbohydrate(0.51);
        $this->assertEquals('less than 1 g', $str);
    }
}