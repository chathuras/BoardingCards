<?php

use PHPUnit\Framework\TestCase;
use TripSorter\CardFactory;
use TripSorter\CardStack;

/**
 * Class CardStackTest
 */
class CardStackTest extends TestCase
{
    private $cardSet = [
      [
        'type' => 'train',
        'number' => '78A',
        'from' => 'Madrid',
        'to' => 'Barcelona',
        'seat' => '45B',
      ],
      [
        'type' => 'bus',
        'from' => 'Barcelona',
        'to' => 'Gerona Airport',
        'seat' => null,
      ],
      [
        'type' => 'flight',
        'number' => 'SK455',
        'from' => 'Gerona Airport',
        'to' => 'Stockholm',
        'gate' => '45B',
        'seat' => '3A',
        'baggage_counter' => '344',
      ],
      [
        'type' => 'flight',
        'number' => 'SK22',
        'from' => 'Stockholm',
        'to' => 'New York JFK',
        'gate' => '22',
        'seat' => '7B',
        'baggage_counter' => 'auto',
      ],
    ];

    private $newCard = [
      'type' => 'flight',
      'number' => 'SK22',
      'from' => 'Stockholm',
      'to' => 'New York JFK',
      'gate' => '22',
      'seat' => '7B',
      'baggage_counter' => 'auto',
    ];

    public function testAddCard()
    {
        $cardStack = new CardStack();
        $transporter = CardFactory::createTransporter($this->newCard);
        $card = CardFactory::createCard($transporter);
        $returnedValue = $cardStack->addCard($card);

        $newCardStack = new CardStack();
        $newCardStack->stack[] = $card;

        $this->assertEquals(1, $returnedValue);

        $this->assertEquals($cardStack, $newCardStack);
    }

    public function testSortCards()
    {
        $sortedCardStack = CardFactory::generateCardStack($this->cardSet);
        shuffle($this->cardSet);
        $shuffledCardStack = CardFactory::generateCardStack($this->cardSet);

        $shuffledCardStack->sortCards();

        $this->assertEquals($sortedCardStack->stack[0]->getArrival()->name,
          $shuffledCardStack->stack[0]->getArrival()->name);
        $this->assertEquals($sortedCardStack->stack[0]->getDestination()->name,
          $shuffledCardStack->stack[0]->getDestination()->name);

        $this->assertEquals($sortedCardStack->stack[1]->getArrival()->name,
          $shuffledCardStack->stack[1]->getArrival()->name);
        $this->assertEquals($sortedCardStack->stack[1]->getDestination()->name,
          $shuffledCardStack->stack[1]->getDestination()->name);

        $this->assertEquals($sortedCardStack->stack[2]->getArrival()->name,
          $shuffledCardStack->stack[2]->getArrival()->name);
        $this->assertEquals($sortedCardStack->stack[2]->getDestination()->name,
          $shuffledCardStack->stack[2]->getDestination()->name);

        $this->assertEquals($sortedCardStack->stack[3]->getArrival()->name,
          $shuffledCardStack->stack[3]->getArrival()->name);
        $this->assertEquals($sortedCardStack->stack[3]->getDestination()->name,
          $shuffledCardStack->stack[3]->getDestination()->name);
    }
}
