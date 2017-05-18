<?php
/**
 * Mineral
 *
 * ≤10% of RDI - express to nearest 2% DV increment
 * > 10% - 50% of RDI - express to nearest 5% DV increment
 * > 50% of RDI - express to nearest 10% DV increment
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