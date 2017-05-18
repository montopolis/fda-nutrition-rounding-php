<?php

/**
 * Carbohydrate
 *
 * < .5 g - express as 0
 * < 1 g - express as "Contains less than 1 g" or "less than 1 g"
 * ≥1 g - express to nearest 1 g increment
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

class Carbohydrate extends AbstractRounder
{
    /**
     * @return string
     */
    public function toString()
    {
        if ($this->value > .5 && $this->value < 1.0) {
            return 'less than 1 ' . $this->units;
        }
        
        return parent::toString();
    }

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