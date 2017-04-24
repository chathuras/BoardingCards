<?php

namespace TripSorter;

/**
 * Class AbstractNumber
 * @package TripSorter
 */
abstract class AbstractNumber
{
    public $number;

    /**
     * AbstractNumber constructor.
     * @param $number
     */
    final public function __construct($number)
    {
        $this->number = $number;
    }
}
