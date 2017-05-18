<?php
/**
 * Potassium
 *
 * < 5 mg - express as 0
 * 5 - 140 mg - express to nearest 5 mg increment
 * > 140 mg - express to nearest 10 mg increment
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

class Potassium extends AbstractRounder
{
    protected $units = 'mg';

    /**
     * @param $value
     * @return float
     */
    function round($value)
    {
        if ($value < 5) {
            return 0;
        }

        if ($value > 140) {
            return $this->toClosest($value, 10);
        }

        return $this->toClosest($value, 5);
    }
}