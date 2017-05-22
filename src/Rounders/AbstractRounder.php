<?php

/**
 * AbstractRounder
 *
 * Contains the base functions required to round nutritional values. All concrete implementations inherit from this.
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

abstract class AbstractRounder
{
    /** @var string */
    protected $units = 'g';

    /** @var float */
    protected $value;

    /** @var float */
    protected $rounded;

    /**
     * AbstractRounder constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = (float) $value;
        $this->rounded = $this->round($value);
    }

    /**
     * @return int
     */
    public function toInt()
    {
        return (int) $this->rounded;
    }

    /**
     * @return float
     */
    public function toFloat()
    {
        return round($this->rounded, 2);
    }

    /**
     * @return string
     */
    public function toFormatted()
    {
        return "{$this->rounded} {$this->units}";
    }

    /**
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toFormatted();
    }

    /**
     * @param $value
     * @return float
     */
    abstract function round($value);

    /**
     * @param $value
     * @param $round
     * @return mixed
     */
    protected function toClosest($value, $round)
    {
        // x1000 to round using 3dp of precision. We really want 2dp, but calculating with 3 will prevent float rounding
        // discrepancies
        $value = $value * 1000;
        $round = $round * 1000;
        $mod = $value % $round;

        if ($mod < ($round / 2)) {
            $calc = $value - $mod;
        } else {
            $calc = $value + ($round - $mod);
        }

        return round($calc / 1000, 2);
    }
}