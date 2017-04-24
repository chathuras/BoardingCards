<?php

require_once 'vendor/autoload.php';
include 'card-set.php';

use TripSorter\CardFactory;

shuffle($cardSet);

$cardStack = CardFactory::generateCardStack($cardSet);
$cardStack->printJourneyDetails();

$cardStack->sortCards();
$cardStack->printJourneyDetails();
