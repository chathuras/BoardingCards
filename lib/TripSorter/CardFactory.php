<?php

namespace TripSorter;

use TripSorter\Flight\BaggageCounter;
use TripSorter\Flight\Flight;
use TripSorter\Flight\Gate;
use TripSorter\Flight\Number as FlightNumber;
use TripSorter\Train\Number as TrainNumber;
use TripSorter\Train\Train;

/**
 * Class CardFactory
 * @package TripSorter
 */
class CardFactory
{
    /**
     * @param array $cardSet
     * @return \TripSorter\CardStack
     */
    public static function generateCardStack(array $cardSet)
    {
        $cardStack = new CardStack();

        foreach ($cardSet as $index => $cardData) {
            $transporter = self::createTransporter($cardData);
            $card = self::createCard($transporter);
            $cardStack->addCard($card);
        }

        return $cardStack;
    }

    /**
     * @param array $cardData
     * @return \TripSorter\AbstractTransporter
     */
    public static function createTransporter(array $cardData)
    {
        $type = $cardData['type'];

        switch ($type) {
            case Transportable::TYPE_BUS:
                $transporter = new Bus();
                break;
            case Transportable::TYPE_FLIGHT:
                $transporter = new Flight();
                $transporter->setNumber(new FlightNumber($cardData['number']));
                $transporter->setGate(new Gate($cardData['gate']));
                $transporter->setBaggageCounter(new BaggageCounter($cardData['baggage_counter']));

                break;
            case Transportable::TYPE_TRAIN:
                $transporter = new Train();
                $transporter->setNumber(new TrainNumber($cardData['number']));
                break;
            default:
                $transporter = new Transport();
        }

        $transporter->setArrival(new Location($cardData['from']));
        $transporter->setDestination(new Location($cardData['to']));
        $transporter->setSeat(new Seat($cardData['seat']));

        return $transporter;
    }

    /**
     * @param \TripSorter\Transportable $transporter
     * @return \TripSorter\Card
     */
    public static function createCard(Transportable $transporter)
    {
        $card = new Card();
        $card->setTransporter($transporter);

        return $card;
    }
}
