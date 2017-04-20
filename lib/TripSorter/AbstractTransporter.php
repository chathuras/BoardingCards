<?php

namespace TripSorter;

/**
 * Class Transporter
 * @package TripSorter
 */
abstract class AbstractTransporter implements Transportable
{

    public $type;

    /**
     * @param \TripSorter\Location $location
     */
    final public function setFrom(Location $location)
    {

    }

    /**
     * @param \TripSorter\Location $location
     */
    final public function setTo(Location $location)
    {

    }

    /**
     * @param \TripSorter\Seat $seat
     */
    final public function setSeat(Seat $seat)
    {

    }

}