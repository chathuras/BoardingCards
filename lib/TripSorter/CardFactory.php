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
    public function generateCards(array $cardSet)
    {
        $cardStack = new CardStack();
        foreach ($cardSet as $index => $cardData) {

            $type = $cardData['type'];
            $card = new Card();

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

            $transporter->setFrom(new Location($cardData['from']));
            $transporter->setTo(new Location($cardData['to']));
            $transporter->setSeat(new Seat($cardData['seat']));

            $card->setTransporter($transporter);
            $cardStack->addCard($card);
        }

        return $cardStack;
    }
}
