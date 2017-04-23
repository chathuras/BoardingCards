<?php

namespace TripSorter;

/**
 * Class Card
 * @package TripSorter
 */
class Card
{
    private $transporter;

    /**
     * Card constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param \TripSorter\Transportable $transporter
     */
    public function setTransporter(Transportable $transporter)
    {
        $this->transporter = $transporter;
    }

    /**
     * @return \TripSorter\Location $arrival
     */
    public function getArrival()
    {
        return $this->transporter->getArrival();
    }

    /**
     * @return \TripSorter\Location $destination
     */
    public function getDestination()
    {
        return $this->transporter->getDestination();
    }

    /**
     * @param \TripSorter\Location $location
     * @return bool
     */
    public function isArrivalEqualTo(Location $location)
    {
        return $this->transporter->arrival->name === $location->name;
    }

    /**
     * @param \TripSorter\Location $location
     * @return bool
     */
    public function isDestinationEqualTo(Location $location)
    {
        return $this->transporter->desination->name === $location->name;
    }
}
