<?php

/**
 * <short description>
 *
 * <long description>
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

class Carbohydrate extends AbstractRounder
{
    /**
     * @param $value
     * @return float
     */
    function round($value)
    {
        if ($value < 0.5) {
            return 0;
        }

        if ($value <= 1) {
            return 1;
        }

        return $this->toClosest($value, 1);
    }
}