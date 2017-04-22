<?php

namespace TripSorter;

/**
 * Class Seat
 * @package TripSorter
 */
class Seat
{
    public $number;

    /**
     * Seat constructor.
     * @param $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }
}
