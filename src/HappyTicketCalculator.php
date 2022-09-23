<?php

declare(strict_types=1);


namespace Ivan\G5Numbers;


class HappyTicketCalculator
{
    public function calculateHappyTicketsCount(string $first, string $last): int
    {
        $happyTicketsCount = 0;

        for ($i = $this->strToint($first); $i <= $this->strToInt($last); $i++) {
            $str = $this->intToStr($i);
            if ($this->isHappyTicket($str)) {
                $happyTicketsCount++;
            }
        }

        return $happyTicketsCount;
    }

    public function intToStr(int $int): string
    {
        return mb_substr('00000' . $int, -6);
    }

    public function strToInt(string $string): int
    {
        return (int) $string;
    }

    public function isHappyTicket(string $string): bool
    {
        $charArray = str_split($string);

        $firstChars = array_slice($charArray, 0, 3);
        $lastChars = array_slice($charArray, 3, 3);

        for ($i = 1; $i <= 3; $i++) {
            $firstChars = str_split( (string) array_sum($firstChars) );
        }

        for ($i = 1; $i <= 3; $i++) {
            $lastChars = str_split( (string) array_sum($lastChars) );
        }

        return ($firstChars === $lastChars);
    }
}