<?php

namespace TripSorter\Train;

use TripSorter\AbstractTransporter;
use TripSorter\Train\Number as TrainNumber;
use TripSorter\Transportable;

/**
 * Class Train
 * @package TripSorter
 */
class Train extends AbstractTransporter implements Locomotable
{
    private $number;

    /**
     * Train constructor.
     */
    public function __construct()
    {
        $this->type = Transportable::TYPE_TRAIN;
    }

    /**
     * @param \TripSorter\Train\Number $number
     */
    public function setNumber(TrainNumber $number)
    {
        $this->number = $number;
    }
}
