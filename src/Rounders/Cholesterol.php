<?php

/**
 * Cholesterol
 *
 * < 2 mg - express as 0
 * 2 - 5 mg - express as "less than 5 mg"
 * > 5 mg - express to nearest 5 mg increment
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

class Cholesterol extends AbstractRounder
{
    protected $units = 'mg';

    /**
     * @return string
     */
    public function toFormatted()
    {
        if ($this->value >= 2 && $this->value < 5.0) {
            return 'less than 5 ' . $this->units;
        }

        return parent::toFormatted();
    }

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