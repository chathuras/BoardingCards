<?php

namespace TripSorter;

/**
 * Class Transport
 * @package TripSorter
 */
class Transport extends Transporter
{
    /**
     * Transport constructor.
     */
    public function __construct()
    {
        $this->type = Transportable::TYPE_GENERIC;
    }
}