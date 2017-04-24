<?php

namespace TripSorter;

/**
 * Class Bus
 * @package TripSorter
 */
class Bus extends AbstractTransporter
{
    /**
     * Bus constructor.
     */
    public function __construct()
    {
        $this->type = Transportable::TYPE_BUS;
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
        return "Take the airport bus from " . $this->arrival->name . " to "
            . $this->destination->name . ". " . $seatDescription . ".";
    }
}
