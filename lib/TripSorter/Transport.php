<?php

namespace TripSorter;

/**
 * Class Transport
 * @package TripSorter
 */
class Transport extends AbstractTransporter
{
    /**
     * Transport constructor.
     */
    public function __construct()
    {
        $this->type = Transportable::TYPE_GENERIC;
    }

    /**
     * @return string
     */
    public function getJourneyDescription() {
        return "Travel from " . $this->arrival
            . " to " . $this->destination . ".";
    }
}
