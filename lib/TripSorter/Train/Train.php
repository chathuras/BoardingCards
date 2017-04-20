<?php

namespace TripSorter\Train;

use TripSorter\AbstractTransporter;
use TripSorter\Transportable;


/**
 * Class Train
 * @package TripSorter
 */
class Train extends AbstractTransporter implements Locomotable
{
    private $number;

    public function __construct()
    {
        $this->type = Transportable::TYPE_TRAIN;
    }

    public function setNumber(Number $number)
    {
        $this->number = $number;
    }
}