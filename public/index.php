<?php

declare(strict_types=1);


use Ivan\G5Numbers\HappyTicketCalculator;
use Ivan\G5Numbers\HappyTicket;


require __DIR__ . '/../vendor/autoload.php';

//$happyTicketCalculator = new HappyTicketCalculator();
//
//$b = $happyTicketCalculator->calculateHappyTicketsCount('000000', '999999');
//
//var_dump($b);die();

// преобразовать входные параметры в инт чтобы можно было итерировать
// собрать массив обратно, заполнив его в формат как было в запросе
// посчитать количество счастливых билетов

 $first = '000000';
 $end = '999999';

function intToStr(int $int) {
    return $str = substr('00000' . $int, -6);
}

function strToInt(string $string) {
    return (int) $string;
}

$lucky = array();
for($i = strToint($first); $i <= strToInt($end); $i++){
    $str = intToStr($i);
    if($str[0] + $str[1] + $str[2] == $str[3] + $str[4] + $str[5]){
        $lucky[] = $str;
    }
}
echo count($lucky);


//$lucky = array();
//for($i = 0; $i < 1000000; $i++){
//    $str = substr('00000' . $i, -6);
//    if($str[0] + $str[1] + $str[2] == $str[3] + $str[4] + $str[5]){
//        $lucky[] = $str;
//    }
//}
//echo count($lucky);