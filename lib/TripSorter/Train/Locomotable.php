<?php
/**
 * Created by PhpStorm.
 * User: chathura
 * Date: 20/4/17
 * Time: 11:55 PM
 */

namespace TripSorter;

use TripSorter\Flight\BaggageCounter;
use TripSorter\Flight\Gate;

interface Locomotable
{
    public function setNumber(Number $number);

    public function setGate(Gate $number);

    public function setBaggageCounter(BaggageCounter $number);
}