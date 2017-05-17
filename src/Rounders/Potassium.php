<?php
/**
 * <short description>
 *
 * <long description>
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