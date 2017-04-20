<?php

namespace TripSorter;

/**
 * Class Card
 * @package TripSorter
 */
class Card
{
    const TYPE_BUS = 'bus';
    const TYPE_FLIGHT = 'flight';
    const TYPE_TRAIN = 'train';


    private $type;

    /**
     * Card constructor.
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

}