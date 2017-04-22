<?php

namespace TripSorter;

/**
 * Class AbstractTransporter
 * @package TripSorter
 */
abstract class AbstractTransporter implements Transportable
{
    public $from;
    public $to;
    public $seat;
    protected $type;

    /**
     * @param \TripSorter\Location $from
     */
    final public function setFrom(Location $from)
    {
        $this->from = $from;
    }

    /**
     * @param \TripSorter\Location $to
     */
    final public function setTo(Location $to)
    {
        $this->to = $to;
    }

    /**
     * @param \TripSorter\Seat $seat
     */
    final public function setSeat(Seat $seat)
    {
        $this->seat = $seat;
    }
}
