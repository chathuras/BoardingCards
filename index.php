<?php

require_once 'vendor/autoload.php';
include 'card-set.php';

use TripSorter\CardFactory;

$cardFactory = new CardFactory();

$cards = $cardFactory->generateCards($cardSet);

var_dump($cards);