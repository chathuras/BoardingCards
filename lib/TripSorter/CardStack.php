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

    public function sortCards()
    {
        $firstElement = $lastElement = array_shift($this->stack);
        $sortedStack[] = $firstElement;

        while (!empty($this->stack)) {
            foreach ($this->stack as $index => $card) {
                if ($card->isArrivalEqualTo($lastElement->getDestination())) {
                    $sortedStack[] = $card;
                    $lastElement = $card;

                    unset($this->stack[$index]);
                    continue;
                }

                if ($card->isDestinationEqualTo($firstElement->getArrival())) {
                    $firstElement = $card;
                    array_unshift($sortedStack, $card);

                    unset($this->stack[$index]);
                    continue;
                }
            }
        }

        $this->stack = $sortedStack;
    }
}
