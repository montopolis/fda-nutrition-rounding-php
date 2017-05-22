<?php

namespace MontopolisTests\Fda\Unit;

use Montopolis\Fda\Rounding;

class StringFormatTest extends \PHPUnit\Framework\TestCase
{
    // Cholesterol
    // 2 - 5 mg - express as "less than 5 mg"
    public function test_cholesterol_string_format()
    {
        $sut = new Rounding();
        $value = $sut->cholesterol(2.5)->toFormatted();
        $this->assertEquals('less than 5 mg', $value);
    }

    // Carbohydrate
    // .5 - 1 g - express as "Contains less than 1 g" or "less than 1 g"
    public function test_carbohydrate_string_format()
    {
        $sut = new Rounding();
        $value = $sut->carbohydrate(.75)->toFormatted();
        $this->assertEquals('less than 1 g', $value);
    }

    // Fiber
    // .5 - 1 g - express as "Contains less than 1 g" or "less than 1 g"
    public function test_fiber_string_format()
    {
        $sut = new Rounding();
        $value = $sut->dietaryFiber(.25)->toFormatted();
        $this->assertEquals('0 g', $value);
        $value = $sut->dietaryFiber(.75)->toFormatted();
        $this->assertEquals('less than 1 g', $value);
    }

    // Protein
    // .5 - 1 g - express as "Contains less than 1 g" or "less than 1 g" or to 1 g if .5 g to < 1 g
    public function test_protein_string_format()
    {
        $sut = new Rounding();
        $value = $sut->protein(.25)->toFormatted();
        $this->assertEquals('0 g', $value);
        $value = $sut->protein(.75)->toFormatted();
        $this->assertEquals('less than 1 g', $value);
    }
}