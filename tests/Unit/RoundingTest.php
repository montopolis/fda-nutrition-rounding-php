<?php
/**
 * <short description>
 *
 * <long description>
 *
 * @author coreymcmahon
 */

namespace MontopolisTests\Fda\Unit;

class RoundingTest extends \PHPUnit\Framework\TestCase
{
    public function test_it_is_instantiable()
    {
        $rounding = new \Montopolis\Fda\Rounding();
        $this->assertInstanceOf(\Montopolis\Fda\Rounding::class, $rounding);
    }
}