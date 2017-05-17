<?php

/**
 * <short description>
 *
 * <long description>
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

class Cholesterol extends AbstractRounder
{
    protected $units = 'mg';

    /**
     * @param $value
     * @return float
     */
    function round($value)
    {
        if ($value < 2) {
            return 0;
        }

        if ($value > 5) {
            return $this->toClosest($value, 5);
        }

        return 5;
    }
}