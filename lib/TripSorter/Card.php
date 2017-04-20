<?php

namespace TripSorter;

/**
 * Class Card
 * @package TripSorter
 */
class Card
{
    private $transporter;

    /**
     * Card constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param \TripSorter\Transportable $transporter
     */
    public function setTransporter(Transportable $transporter)
    {
        $this->transporter = $transporter;
    }
}