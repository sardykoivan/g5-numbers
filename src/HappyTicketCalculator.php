<?php

declare(strict_types=1);


namespace Ivan\G5Numbers;


class HappyTicketCalculator
{
    public function calculateHappyTicketsCount(string $first, string $last)
    {
        $luckyTickesCount = 0;

        for ($i = $this->strToint($first); $i <= $this->strToInt($last); $i++){
            $str = $this->intToStr($i);
            if ($this->isHappyTicket($str)){
                echo $str . PHP_EOL;
                $luckyTickesCount++;
            }
        }

        return $luckyTickesCount;
    }

    public function intToStr(int $int) {
        return substr('00000' . $int, -6);
    }

    public function strToInt(string $string) {
        return (int) $string;
    }

    public function isHappyTicket(string $string) {

//        $part1 = $string[0] + $string[1] + $string[2];
//        $part2 = $string[3] + $string[4] + $string[5];
//


        return $string[0] + $string[1] + $string[2] === $string[3] + $string[4] + $string[5];
    }
}