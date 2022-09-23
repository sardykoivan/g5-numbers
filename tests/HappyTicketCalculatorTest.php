<?php

declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use Ivan\G5Numbers\HappyTicketCalculator;


class HappyTicketCalculatorTest extends TestCase
{
    protected HappyTicketCalculator $happyTicketCalculator;

    public function testCalculateHappyTicketsCount(): void
    {
        $this->assertEquals(110890, $this->happyTicketCalculator->calculateHappyTicketsCount('000000', '999999'));
        $this->assertEquals(1, $this->happyTicketCalculator->calculateHappyTicketsCount('123455', '123457'));
        $this->assertEquals(1, $this->happyTicketCalculator->calculateHappyTicketsCount('123456', '123456'));
        $this->assertEquals(0, $this->happyTicketCalculator->calculateHappyTicketsCount('111222', '111222'));
    }

    public function testStringToint(): void
    {
        $this->assertEquals(0, $this->happyTicketCalculator->strToInt('000000'));
        $this->assertEquals(1, $this->happyTicketCalculator->strToInt('000001'));
        $this->assertEquals(10, $this->happyTicketCalculator->strToInt('000010'));
        $this->assertEquals(100, $this->happyTicketCalculator->strToInt('000100'));
        $this->assertEquals(1000, $this->happyTicketCalculator->strToInt('001000'));
        $this->assertEquals(10000, $this->happyTicketCalculator->strToInt('010000'));
        $this->assertEquals(100000, $this->happyTicketCalculator->strToInt('100000'));
        $this->assertEquals(11110, $this->happyTicketCalculator->strToInt('011110'));
    }

    public function testIntToString(): void
    {
        $this->assertEquals('000000', $this->happyTicketCalculator->intToStr(0));
        $this->assertEquals('000001', $this->happyTicketCalculator->intToStr(1));
        $this->assertEquals('000010', $this->happyTicketCalculator->intToStr(10));
        $this->assertEquals('000100', $this->happyTicketCalculator->intToStr(100));
        $this->assertEquals('001000', $this->happyTicketCalculator->intToStr(1000));
        $this->assertEquals('010000', $this->happyTicketCalculator->intToStr(10000));
        $this->assertEquals('100000', $this->happyTicketCalculator->intToStr(100000));
    }

    public function testIsHappyTicket(): void
    {
        $this->assertTrue($this->happyTicketCalculator->isHappyTicket('123456'));
        $this->assertFalse($this->happyTicketCalculator->isHappyTicket('123455'));
    }

    public function setUp(): void
    {
        $this->happyTicketCalculator = new HappyTicketCalculator();
    }
}