<?php

namespace TripSorter;

/**
 * Class AbstractTransporter
 * @package TripSorter
 */
abstract class AbstractTransporter implements Transportable
{
    public $arrival;
    public $destination;
    public $seat;
    protected $type;

    /**
     * @return \TripSorter\Location $arrival
     */
    final public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * @param \TripSorter\Location $arrival
     */
    final public function setArrival(Location $arrival)
    {
        $this->arrival = $arrival;
    }

    /**
     * @return \TripSorter\Location $destination
     */
    final public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param \TripSorter\Location $destination
     */
    final public function setDestination(Location $destination)
    {
        $this->destination = $destination;
    }

    /**
     * @param \TripSorter\Seat $seat
     */
    final public function setSeat(Seat $seat)
    {
        $this->seat = $seat;
    }
}
