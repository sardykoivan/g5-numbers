<?php

declare(strict_types=1);


namespace Ivan\G5Numbers;


class HappyTicket
{
    private string $value;

    // удалить
    public static function factoryFromString(string $string)
    {
        return new HappyTicket( (int) $string );
    }

    public function __construct(int $inputValue)
    {
        if ($inputValue < 0 || $inputValue > 999999) {
            throw new \Exception('Некорректное значение счастливого билета, доступны значения с 0 до 999999');
        }

        $stringValue = (string) $inputValue;

//        $valueString = (string) $inputValue;
//        $valueString =
//        echo $valueString . PHP_EOL;
        $this->value = self::getValueFromString($stringValue);
//        $this->value = self::getValueFromString($valueString);
    }

    public static function getValueFromString(string $value)
    {
//        for($i = 0; $i < 1000000; $i++){
//        $value = substr('00000' . $value, -6);
//            if($str[0] + $str[1] + $str[2] == $str[3] + $str[4] + $str[5]){
//                $lucky[] = $str;
//            }
//        }

        return substr('00000' . $value, -6);

      //  $valueLength = mb_strlen($value);

//        if ($valueLength === 6) {
//            return $value;
//        }
//
////        return $value;
//
//        return str_pad($value, 6, "0", STR_PAD_LEFT);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getInt()
    {
        return (int) $this->getValue();
    }

    public function isHappy()
    {
        $charArray = str_split($this->getValue());

    //    var_dump($intArray);

        $firstChars = array_slice($charArray, 0, 3);
        $lastChars = array_slice($charArray, 3, 3);

        for ($i = 1; $i <= 2; $i++) {
            // сложить элементы массива
            $firstChars = str_split( (string) array_sum($firstChars) );
//            if ($firstInts < 10) {
//                continue;
//            }
        }

        for ($i = 1; $i <= 3; $i++) {
            // сложить элементы массива
            $lastChars = str_split( (string) array_sum($lastChars) );
//            if ($lastInts < 10) {
//                continue;
//            }
        }

        return ($firstChars === $lastChars);
    }

    public function __toString()
    {
        return $this->getValue();
    }
}