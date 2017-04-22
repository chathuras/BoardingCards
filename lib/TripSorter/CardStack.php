<?php

namespace TripSorter;

/**
 * Class CardStack
 * @package TripSorter
 */
class CardStack
{

    private $stack = [];

    /**
     * @param \TripSorter\Card $card
     * @return int
     */
    public function addCard(Card $card)
    {
        return array_push($this->stack, $card);
    }
}
