<?php

use PHPUnit\Framework\TestCase;
use TripSorter\CardFactory;
use TripSorter\Location;

/**
 * Class CardTest
 */
class CardTest extends TestCase
{
    private $cardData = [
      'type' => 'flight',
      'number' => 'SK455',
      'from' => 'Gerona Airport',
      'to' => 'Stockholm',
      'gate' => '45B',
      'seat' => '3A',
      'baggage_counter' => '344',
    ];

    public function testGetArrivalReturnsALocationInstance()
    {
        $transporter = CardFactory::createTransporter($this->cardData);
        $card = CardFactory::createCard($transporter);

        $this->assertInstanceOf(Location::class, $card->getArrival());
    }

    public function testGetArrivalReturnsCardTransporterArrival()
    {
        $transporter = CardFactory::createTransporter($this->cardData);
        $card = CardFactory::createCard($transporter);

        $this->assertEquals($transporter->arrival, $card->getArrival());
    }

    public function testGetDestinationReturnsALocationInstance()
    {
        $transporter = CardFactory::createTransporter($this->cardData);
        $card = CardFactory::createCard($transporter);

        $this->assertInstanceOf(Location::class, $card->getDestination());
    }

    public function testGetDestinationReturnsCardTransporterDestination()
    {
        $transporter = CardFactory::createTransporter($this->cardData);
        $card = CardFactory::createCard($transporter);

        $this->assertEquals($transporter->destination, $card->getDestination());
    }
}
