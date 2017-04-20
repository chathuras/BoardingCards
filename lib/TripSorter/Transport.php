<?php

namespace TripSorter;

/**
 * Class Transport
 * @package TripSorter
 */
class Transport extends AbstractTransporter
{
    /**
     * Transport constructor.
     */
    public function __construct()
    {
        $this->type = Transportable::TYPE_GENERIC;
    }
}