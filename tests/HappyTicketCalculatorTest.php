<?php

declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use Ivan\G5Numbers\HappyTicket;
use Ivan\G5Numbers\HappyTicketCalculator;

class HappyTicketCalculatorTest extends TestCase
{
    protected HappyTicketCalculator $happyTicketCalculator;

    public function testCalculateHappyTicketsCount()
    {
        $this->assertTrue(true);
        $this->assertEquals(55252, $this->happyTicketCalculator->calculateHappyTicketsCount('000000', '999999'));
//        $this->assertEquals(1, $this->happyTicketCalculator->calculateHappyTicketsCount('123455', '123457'));
//        $this->assertEquals(55252, $this->happyTicketCalculator->calculateHappyTicketsCount('000000', '999999'));
//        $this->assertEquals(1, $this->happyTicketCalculator->calculateHappyTicketsCount(100000, 199999));
    }

    public function testStringToint()
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

    public function testIntToString()
    {
        $this->assertEquals('000000', $this->happyTicketCalculator->intToStr(0));
        $this->assertEquals('000001', $this->happyTicketCalculator->intToStr(1));
        $this->assertEquals('000010', $this->happyTicketCalculator->intToStr(10));
        $this->assertEquals('000100', $this->happyTicketCalculator->intToStr(100));
        $this->assertEquals('001000', $this->happyTicketCalculator->intToStr(1000));
        $this->assertEquals('010000', $this->happyTicketCalculator->intToStr(10000));
        $this->assertEquals('100000', $this->happyTicketCalculator->intToStr(100000));
    }

    public function setUp(): void
    {
        $this->happyTicketCalculator = new HappyTicketCalculator();
    }
}