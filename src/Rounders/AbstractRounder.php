<?php
/**
 * <short description>
 *
 * <long description>
 *
 * @author coreymcmahon
 */

namespace Montopolis\Fda\Rounders;

abstract class AbstractRounder
{
    protected $units = 'g';

    private $rounded;

    /**
     * AbstractRounder constructor.
     * @param $value
     */
    public function __construct($value)
    {
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