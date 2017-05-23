<?php

namespace MontopolisTests\Fda\Unit;

use Montopolis\Fda\Rounders\Generic;
use PHPUnit\Framework\TestCase;

class GenericTest extends TestCase
{
    public function test_it_rounds_vitamin_d()
    {
        $sut = new Generic('1175.111','mcg');
        $result = $sut->toFormatted();
        $this->assertEquals('1175 mcg', $result);
    }

    public function test_it_rounds_calcium()
    {
        $sut = new Generic('195.49', 'mg');
        $result = $sut->toFormatted();
        $this->assertEquals('195 mg', $result);
    }

    public function test_it_rounds_iron()
    {
        $sut = new Generic('5.44','mg', 1);
        $result = $sut->toFormatted();
        $this->assertEquals('5.4 mg', $result);
    }

    public function test_it_rounds_potassium()
    {
        $sut = new Generic('1175.111','mg');
        $result = $sut->toFormatted();
        $this->assertEquals('1175 mg', $result);
    }
}