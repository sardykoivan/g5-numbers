<?php

declare(strict_types=1);

// преобразовать входные параметры в int чтобы можно было итерировать
// собрать массив обратно, заполнив его в формат как было в запросе
// посчитать количество счастливых билетов, разбивая строку на символы и сравнивая суммы


use Ivan\G5Numbers\HappyTicketCalculator;


require __DIR__ . '/../vendor/autoload.php';

// ini_set('memory_limit', '1G');

$first = $_GET['first'] ?? null;
$end = $_GET['end'] ?? null;

if (is_null($first) && is_null($end)) {
    echo 'Введите параметры first и end';
    exit;
}

if ( ($first < 0 || $end > 999999) || $first > $end ) {
    echo 'Некорректные входные параметры first и/или end, доступны значения с 000000 до 999999. first также не может быть больше end';
    exit;
}

$happyTicketCalculator = new HappyTicketCalculator();
$happyTicketsCount = $happyTicketCalculator->calculateHappyTicketsCount($first, $end);
echo 'Количество счастливых билетов: ' . $happyTicketsCount;