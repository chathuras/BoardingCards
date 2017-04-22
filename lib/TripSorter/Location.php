<?php

namespace TripSorter;

/**
 * Class Location
 * @package TripSorter
 */
class Location
{
    public $name;

    /**
     * Location constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
