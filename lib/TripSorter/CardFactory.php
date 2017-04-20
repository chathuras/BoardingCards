<?php

namespace TripSorter;

use TripSorter\Flight\Flight;
use TripSorter\Train\Train;

/**
 * Class CardFactory
 * @package TripSorter
 */
class CardFactory
{
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
                    $transporter->setNumber($cardData['number']);
                    $transporter->setGate($cardData['gate']);
                    $transporter->setBaggageCounter($cardData['baggage_counter']);

                    break;
                case Transportable::TYPE_TRAIN:
                    $transporter = new Train();
                    $transporter->setNumber($cardData['number']);
                    break;
                default:
                    $transporter = new Transport();
            }

            $transporter->setFrom($cardData['from']);
            $transporter->setTo($cardData['to']);
            $transporter->setSeat($cardData['seat']);

            $card->setTransporter($transporter);
            $cardStack->addCard($card);
        }

        return $cardStack;
    }
}