<?php
/**
 * <short description>
 *
 * <long description>
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

class Mineral extends AbstractRounder
{
    protected $units = '% RDI';

    /**
     * @param $value
     * @return float
     */
    function round($value)
    {
        if ($value <= 10) {
            return $this->toClosest($value, 2);
        }

        if ($value > 50) {
            return $this->toClosest($value, 10);
        }

        return $this->toClosest($value, 5);
    }
}