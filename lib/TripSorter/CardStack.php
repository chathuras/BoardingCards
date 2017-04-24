<?php

namespace TripSorter;

/**
 * Class CardStack
 * @package TripSorter
 */
class CardStack
{
    public $stack = [];

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
        $unSortedStack = $this->stack;

        $firstElement = $lastElement = $unSortedStack[0];
        $sortedStack[] = $firstElement;

        unset($unSortedStack[0]);

        while (!empty($unSortedStack)) {
            foreach ($unSortedStack as $index => $card) {
                if ($card->isArrivalEqualTo($lastElement->getDestination())) {
                    $sortedStack[] = $card;
                    $lastElement = $card;

                    unset($unSortedStack[$index]);
                    continue;
                }

                if ($card->isDestinationEqualTo($firstElement->getArrival())) {
                    array_unshift($sortedStack, $card);
                    $firstElement = $card;

                    unset($unSortedStack[$index]);
                    continue;
                }
            }
        }

        $this->stack = $sortedStack;
    }

    public function printJourneyDetails()
    {
        foreach ($this->stack as $card) {
            echo $card->getJourneyDescription() . "\n";
            echo "-------------------------------------\n";
        }

        echo "You have arrived at your final destination.\n";
        echo "-==========================================\n";
    }
}
