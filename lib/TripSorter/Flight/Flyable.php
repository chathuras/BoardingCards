<?php

namespace TripSorter\Flight;

use TripSorter\Flight\Number as FlightNumber;

/**
 * Interface Flyable
 * @package TripSorter\Flight
 */
interface Flyable
{
    /**
     * @param \TripSorter\Flight\Number $gate
     */
    public function setNumber(FlightNumber $gate);

    /**
     * @param \TripSorter\Flight\Gate $gate
     */
    public function setGate(Gate $gate);

    /**
     * @param \TripSorter\Flight\BaggageCounter $baggageCounter
     */
    public function setBaggageCounter(BaggageCounter $baggageCounter);
}
