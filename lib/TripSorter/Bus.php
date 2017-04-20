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
}