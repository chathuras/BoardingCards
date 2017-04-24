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

    /**
     * Transportable constructor.
     */
    public function __construct();

    /**
     * @return \TripSorter\Location $arrival
     */
    public function getArrival();

    /**
     * @param \TripSorter\Location $arrival
     */
    public function setArrival(Location $arrival);

    /**
     * @return \TripSorter\Location $destination
     */
    public function getDestination();

    /**
     * @param \TripSorter\Location $destination
     */
    public function setDestination(Location $destination);

    /**
     * @param \TripSorter\Seat $seat
     */
    public function setSeat(Seat $seat);

    /**
     * @return string
     */
    public function getJourneyDescription();
}
