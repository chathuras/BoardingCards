<?php

use PHPUnit\Framework\TestCase;
use TripSorter\Bus;
use TripSorter\Card;
use TripSorter\CardFactory;
use TripSorter\CardStack;
use TripSorter\Flight\Flight;
use TripSorter\Train\Train;

/**
 * Class CardFactoryTest
 */
class CardFactoryTest extends TestCase
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

    public function testGenerateCardStack()
    {
        $cardStack = CardFactory::generateCardStack($this->cardSet);
        $this->assertInstanceOf(CardStack::class, $cardStack);
    }

    public function testCreateCard()
    {
        $transporter = CardFactory::createTransporter($this->cardSet[0]);
        $card = CardFactory::createCard($transporter);

        $this->assertInstanceOf(Card::class, $card);
    }

    public function testCreateTransporter()
    {
        $transporter = CardFactory::createTransporter($this->cardSet[0]);
        $this->assertInstanceOf(Train::class, $transporter);

        $this->assertEquals($this->cardSet[0]['from'],
          $transporter->arrival->name);
        $this->assertEquals($this->cardSet[0]['to'],
          $transporter->destination->name);

        $transporter = CardFactory::createTransporter($this->cardSet[1]);
        $this->assertInstanceOf(Bus::class, $transporter);

        $this->assertEquals($this->cardSet[1]['from'],
          $transporter->arrival->name);
        $this->assertEquals($this->cardSet[1]['to'],
          $transporter->destination->name);

        $transporter = CardFactory::createTransporter($this->cardSet[2]);
        $this->assertInstanceOf(Flight::class, $transporter);

        $this->assertEquals($this->cardSet[2]['from'],
          $transporter->arrival->name);
        $this->assertEquals($this->cardSet[2]['to'],
          $transporter->destination->name);
    }
}
