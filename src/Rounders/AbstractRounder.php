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
    // defaults to 'g'
    protected $units = 'g';

    protected $value;

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
        return number_format($this->rounded, 1);
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
    public function toString()
    {
        if ($this->toFloat() == $this->toInt()) {
            return "" . $this->toFloat();
        }
        return "" . $this->toInt();
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
        return $this->toString();
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
        // x100 to round using 2dp of precision
        $value = (float) $value * 100;
        $round = $round * 100;
        $mod = $value % $round;

        if ($mod < ($round / 2)) {
            $calc = $value - $mod;
        } else {
            $calc = $value + ($round - $mod);
        }

        return $calc / 100;
    }
}