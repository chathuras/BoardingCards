<?php

namespace TripSorter\Flight;


use TripSorter\AbstractTransporter;

class Flight extends AbstractTransporter implements Flyable
{

    private $gate;
    private $baggageCounter;
    private $number;

    public function __construct()
    {
        $this->type = AbstractTransporter::TYPE_FLIGHT;
    }

    public function setNumber(Number $number)
    {
        $this->number = $number;
    }

    public function setGate(Gate $gate)
    {
        $this->gate = $gate;
    }

    public function setBaggageCounter(BaggageCounter $baggageCounter)
    {
        $this->baggageCounter = $baggageCounter;
    }
}