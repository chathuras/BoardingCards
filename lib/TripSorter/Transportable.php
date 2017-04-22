<?php

namespace TripSorter;

/**
 * Interface Transportable
 * @package TripSorter
 */
interface Transportable
{
    const TYPE_BUS = 'bus';
    const TYPE_FLIGHT = 'flight';
    const TYPE_TRAIN = 'train';
    const TYPE_GENERIC = 'generic';

    public function __construct();

    /**
     * @param \TripSorter\Location $location
     */
    public function setFrom(Location $location);

    /**
     * @param \TripSorter\Location $to
     */
    public function setTo(Location $to);

    /**
     * @param \TripSorter\Seat $seat
     */
    public function setSeat(Seat $seat);
}
