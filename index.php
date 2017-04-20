<?php

require_once 'vendor/autoload.php';

use TripSorter\CardFactory;

$cardFactory = new CardFactory();

$cards = $cardFactory->generateCards($cardSet);

var_dump($cards);