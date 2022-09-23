<?php

declare(strict_types=1);


namespace Ivan\G5Numbers;


use Ivan\G5Numbers\HappyTicket;


class HappyTicketCalculator
{
    /**
     * @throws \Exception
     */
    public function calculateHappyTicketsCount(string $first, string $last)
    {
        ini_set('memory_limit', '1G');
        $happyTicketsCount = 0;
//        $happyTicketFirst = HappyTicket::factoryFromString($first);
//        $happyTicketLast = HappyTicket::factoryFromString($last);

       // var_dump((int)$first);die();

//        var_dump($happyTicketFirst, $happyTicketLast);

//        echo 'first: ' . $first . ' ';


        for ($i = (int) $first; $i <= (int) $last; $i++) {
//            echo 'i ' . $i;
            $happyTicket = new HappyTicket($i);

          //  var_dump($happyTicket);
//            var_dump($happyTicket);
            $happyTicketsCount += (int) $happyTicket->isHappy();
//            echo $i . ' ' . $happyTicket->getInt() . PHP_EOL;
        }

        return $happyTicketsCount;
    }
}