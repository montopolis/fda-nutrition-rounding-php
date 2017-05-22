<?php
/**
 * <short description>
 *
 * <long description>
 *
 * @author coreymcmahon
 */

abstract class AbstractRoundingTest extends \PHPUnit\Framework\TestCase
{
    /** @var \Montopolis\Fda\Rounding */
    protected $sut;

    /**
     * AbstractRoundingTest constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->sut = new \Montopolis\Fda\Rounding();
    }

    /**
     * @return mixed
     */
    protected abstract function getTestCases();

    /**
     * @param $value
     * @return mixed
     */
    protected abstract function round($value);

    public function test_it_rounds_correctly()
    {
        foreach ($this->getTestCases() as $case => $expected) {

            $actual = $this->round($case);

            $this->assertEquals($expected, $actual);
        }
    }
}