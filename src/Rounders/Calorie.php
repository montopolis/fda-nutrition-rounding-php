<?php

/**
 * Calorie
 *
 * < 5 cal - express as 0
 * ≤50 cal - express to nearest 5 cal increment
 * > 50 cal - express to nearest 10 cal increment
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

class Calorie extends AbstractRounder
{
    protected $units = 'cal';

    /**
     * @param $value
     * @return float
     */
    function round($value)
    {
        if ($value < 5) return 0;

        if ($value > 50) {
            return $this->toClosest($value, 10);
        }

        return $this->toClosest($value, 5);
    }
}