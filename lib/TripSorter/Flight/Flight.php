<?php

namespace TripSorter;


class Flight extends Transporter
{

    private $gate;
    private $baggage;
    private $number;

    public function __construct()
    {
        $this->type = Transportable::TYPE_FLIGHT;
    }

    public function setNumber(Number $number)
    {

    }

    public function setGate(Gate $number)
    {

    }

    public function setBaggageCounter(BaggageCounter $number)
    {

    }
}