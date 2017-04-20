<?php

namespace TripSorter;

/**
 * Class CardFactory
 * @package TripSorter
 */
class CardFactory
{
    public function generateCards(array $cardSet) {
        $cardStack = new CardStack();
        foreach ($cardSet as $index => $cardData) {

            $type = $cardData['type'];
            $card = new Card($type);

            switch($type) {
                case Card::TYPE_BUS:
                case Card::TYPE_FLIGHT:
                case Card::TYPE_TRAIN:
                    $transporterClass = ucfirst($type);
                    $transporter = new $transporterClass();
            }

            $card->setTransporter($transporter);
            $cardStack->addCard($card);
        }

        return $cardStack;
    }
}