<?php

namespace TripSorter\Flight;

/**
 * Class BaggageCounter
 * @package TripSorter\Flight
 */
class BaggageCounter
{
    private $baggageCounter;

    /**
     * BaggageCounter constructor.
     * @param $baggageCounter
     */
    public function __construct($baggageCounter)
    {
        $this->baggageCounter = $baggageCounter;
    }
}
