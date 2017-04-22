<?php

namespace TripSorter\Train;

use TripSorter\Train\Number as TrainNumber;

/**
 * Interface Locomotable
 * @package TripSorter\Train
 */
interface Locomotable
{
    /**
     * @param \TripSorter\Train\Number $number
     */
    public function setNumber(TrainNumber $number);
}
