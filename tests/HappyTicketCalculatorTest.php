<?php

declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use Ivan\G5Numbers\HappyTicket;
use Ivan\G5Numbers\HappyTicketCalculator;

class HappyTicketCalculatorTest extends TestCase
{
    protected HappyTicketCalculator $happyTicketCalculator;

//    public function testIsHappyTicket(): void
//    {
//        $ticket = new HappyTicket(123456);
//        $this->assertTrue($this->happyTicketCalculator->isHappyTicket('123456'));
//    }

    public function testCalculateHappyTicketsCount()
    {
        $this->assertTrue(true);
        $this->assertEquals(1, $this->happyTicketCalculator->calculateHappyTicketsCount('123456', '123456'));
        $this->assertEquals(1, $this->happyTicketCalculator->calculateHappyTicketsCount('123456', '123458'));
        $this->assertEquals(55252, $this->happyTicketCalculator->calculateHappyTicketsCount('000000', '999999'));
//        $this->assertEquals(1, $this->happyTicketCalculator->calculateHappyTicketsCount(100000, 199999));
    }

    public function setUp(): void
    {
        $this->happyTicketCalculator = new HappyTicketCalculator();
    }
}