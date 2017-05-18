<?php

namespace MontopolisTests\Fda\Unit;

class CholesterolTest extends \AbstractRoundingTest
{
    protected function getTestCases()
    {
        return [
            "1" => 0,
            "1.99" => 0,
            "2.00" => 5,
            "5" => 5,
            "7" => 5,
            "7.5" => 10,
        ];
    }

    protected function round($value)
    {
        return $this->sut->cholesterol($value)->toInt();
    }

    public function test_it_renders_string_value()
    {
        $str = '' . $this->sut->cholesterol(3);
        $this->assertEquals('less than 5 mg', $str);
    }
}