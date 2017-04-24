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

    /**
     * @return string
     */
    public function getJourneyDescription()
    {
        $seatDescription = "No seat assignment";

        if ($this->seat->number !== null) {
            $seatDescription = "Sit in seat " . $this->seat->number;
        }

        return "Take train " . $this->number->number . " from "
            . $this->arrival->name . " to " . $this->destination->name . ". "
            . $seatDescription . ".";
    }
}
