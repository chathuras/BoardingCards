<?php

namespace TripSorter\Flight;

use TripSorter\AbstractTransporter;
use TripSorter\Flight\Number as FlightNumber;

/**
 * Class Flight
 * @package TripSorter\Flight
 */
class Flight extends AbstractTransporter implements Flyable
{
    private $gate;
    private $baggageCounter;
    private $number;

    /**
     * Flight constructor.
     */
    public function __construct()
    {
        $this->type = AbstractTransporter::TYPE_FLIGHT;
    }

    /**
     * @param \TripSorter\Flight\Number $number
     */
    public function setNumber(FlightNumber $number)
    {
        $this->number = $number;
    }

    /**
     * @param \TripSorter\Flight\Gate $gate
     */
    public function setGate(Gate $gate)
    {
        $this->gate = $gate;
    }

    /**
     * @param \TripSorter\Flight\BaggageCounter $baggageCounter
     */
    public function setBaggageCounter(BaggageCounter $baggageCounter)
    {
        $this->baggageCounter = $baggageCounter;
    }
}
