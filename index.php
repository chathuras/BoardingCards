<?php

require_once 'vendor/autoload.php';
include 'card-set.php';

use TripSorter\CardFactory;

shuffle($cardSet);

var_dump($cardSet);

$cardStack = CardFactory::generateCardStack($cardSet);
$cardStack->sortCards();

var_dump($cardStack);
