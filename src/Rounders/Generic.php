<?php

namespace Montopolis\Fda\Rounders;

class Generic extends AbstractRounder
{
    protected $dp = 0;

    public function __construct($value, $units = 'g', $dp = 0)
    {
        $this->dp = $dp;
        $this->units = $units;
        parent::__construct($value);
    }

    /**
     * @param $value
     * @return float
     */
    function round($value)
    {
        return round($value, $this->dp);
    }
}