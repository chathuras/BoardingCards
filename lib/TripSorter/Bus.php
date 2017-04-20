<?php

namespace TripSorter;

/**
 * Class Bus
 * @package TripSorter
 */
class Bus extends Transporter
{

    /**
     * Bus constructor.
     */
    public function __construct()
    {
        $this->type = Transportable::TYPE_BUS;
    }
}