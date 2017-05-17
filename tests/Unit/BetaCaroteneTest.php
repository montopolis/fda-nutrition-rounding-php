<?php

namespace MontopolisTests\Fda\Unit;

/**
    ≤10% of RDI for vitamin A- express to nearest 2% DV increment
    > 10% - 50% of RDI for vitamin A- express to nearest 5% DV increment
    > 50% of RDI for vitamin A- express to nearest 10% DV increment
 */
class BetaCaroteneTest extends \AbstractRoundingTest
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
        return $this->sut->betaCarotene($value)->toInt();
    }
}