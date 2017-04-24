<?php

namespace TripSorter\Flight;

/**
 * Class Gate
 * @package TripSorter\Flight
 */
class Gate
{
    public $gate;

    /**
     * Gate constructor.
     * @param $gate
     */
    public function __construct($gate)
    {
        $this->gate = $gate;
    }
}
