<?php

declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use Ivan\G5Numbers\HappyTicket;


class HappyTicketTest extends TestCase
{
    public function testHappyTicket()
    {
        // значения без нулей
        $happyTicket = new HappyTicket(0);
        $this->assertEquals('000000', $happyTicket);

        $happyTicket = new HappyTicket(1);
        $this->assertEquals('000001', $happyTicket);

        $happyTicket = new HappyTicket(567);
        $this->assertEquals('000567', $happyTicket);


        // Шестизначные значения
        $happyTicket = new HappyTicket(123456);
        $this->assertEquals('123456', $happyTicket);

        $happyTicket = new HappyTicket(999999);
        $this->assertEquals('999999', $happyTicket);


       // $this->assertEquals('000100', HappyTicket::getValueFromString('000100'));

        // Фабрика из строки
        $happyTicket = HappyTicket::factoryFromString('000000');
        $this->assertEquals('000000', $happyTicket->getValue());

        $happyTicket = HappyTicket::factoryFromString('000001');
        $this->assertEquals('000001', $happyTicket->getValue());

        $happyTicket = HappyTicket::factoryFromString('000010');
        $this->assertEquals('000010', $happyTicket->getValue());

        $happyTicket = HappyTicket::factoryFromString('000100');
        $this->assertEquals('000100', $happyTicket->getValue());

        $happyTicket = HappyTicket::factoryFromString('001000');
        $this->assertEquals('001000', $happyTicket->getValue());

        $happyTicket = HappyTicket::factoryFromString('010000');
        $this->assertEquals('010000', $happyTicket->getValue());

        $happyTicket = HappyTicket::factoryFromString('100000');
        $this->assertEquals('100000', $happyTicket->getValue());

        // Некорректное значение
        $this->expectException(Exception::class);
        $happyTicket = new HappyTicket(123456789);
        $this->assertEquals('999999', $happyTicket);
    }

    public function testGetValueFromString()
    {
        $input = HappyTicket::getValueFromString('0');
        $this->assertEquals('000000', $input);

        $input = HappyTicket::getValueFromString('10');
        $this->assertEquals('000010', $input);

        $input = HappyTicket::getValueFromString('010');
        $this->assertEquals('000010', $input);

        $input = HappyTicket::getValueFromString('1000');
        $this->assertEquals('001000', $input);

        $input = HappyTicket::getValueFromString('100000');
        $this->assertEquals('100000', $input);
    }
}