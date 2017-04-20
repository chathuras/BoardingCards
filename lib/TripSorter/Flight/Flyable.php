<?php

namespace TripSorter\Flight;


interface Flyable
{
    public function setGate(Gate $gate);

    public function setBaggageCounter(BaggageCounter $baggageCounter);
}