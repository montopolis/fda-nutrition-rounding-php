<?php
/**
 * <short description>
 *
 * <long description>
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

class Fat extends AbstractRounder
{
    /**
     * @param $value
     * @return float
     */
    function round($value)
    {
        if ($value < 0.5) return 0;

        if ($value >= 5) {
            return $this->toClosest($value, 1);
        }

        return $this->toClosest($value, 0.5);
    }
}