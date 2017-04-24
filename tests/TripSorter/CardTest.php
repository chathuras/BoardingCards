<?php

use PHPUnit\Framework\TestCase;
use TripSorter\CardFactory;
use TripSorter\Location;

/**
 * Class CardTest
 */
class CardTest extends TestCase
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

    public function testGetJourneyDescription()
    {
        $cardStack = CardFactory::generateCardStack($this->cardSet);


        $trainJourney = "Take train 78A from Madrid to Barcelona. Sit in seat 45B.";

        $busJourney = "Take the airport bus from Barcelona to Gerona Airport. No seat assignment.";

        $flightJourney1 = "From Gerona Airport, take flight SK455 to Stockholm. Gate 45B, seat 3A.\nBaggage drop at ticket counter 344.";

        $flightJourney2 = "From Stockholm, take flight SK22 to New York JFK. Gate 22, seat 7B.\nBaggage will we automatically transferred from your last leg.";

        $this->assertEquals($trainJourney,
          $cardStack->stack[0]->getJourneyDescription());
        $this->assertEquals($busJourney,
          $cardStack->stack[1]->getJourneyDescription());
        $this->assertEquals($flightJourney1,
          $cardStack->stack[2]->getJourneyDescription());
        $this->assertEquals($flightJourney2,
          $cardStack->stack[3]->getJourneyDescription());
    }
}
