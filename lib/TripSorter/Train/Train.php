<?php

namespace TripSorter;


/**
 * Class Train
 * @package TripSorter
 */
class Train extends Transporter
{
    private $number;

    public function __construct()
    {
        $this->type = Transportable::TYPE_TRAIN;
    }

    public function setNumber(Number $number)
    {

    }
}