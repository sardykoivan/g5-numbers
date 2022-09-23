<?php

declare(strict_types=1);


use Ivan\G5Numbers\HappyTicketCalculator;
use Ivan\G5Numbers\HappyTicket;


require __DIR__ . '/../vendor/autoload.php';

$happyTicketCalculator = new HappyTicketCalculator();

$b = $happyTicketCalculator->calculateHappyTicketsCount('000000', '999999');

var_dump($b);die();