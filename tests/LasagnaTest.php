<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercism/src/Lasagna.php';

class LasagnaTest extends TestCase
{

    private Lasagna $lasagna;

    protected function setUp(): void
    {
        $this->lasagna = new Lasagna();
    }

    public function testExpectedCookTime()
    {
        $this->assertSame(40, $this->lasagna->expectedCookTime());
    }

    public function testTotalPreparationTime()
    {
        $this->assertSame(20, $this->lasagna->totalPreparationTime(10));
    }

    public function testAlarm()
    {
        $this->assertSame("Ding!", $this->lasagna->alarm());
    }

    public function testRemainingCookTime()
    {
        $this->assertSame(25, $this->lasagna->remainingCookTime(15));
    }

    public function testTotalElapsedTime()
    {
        $this->assertSame(29, $this->lasagna->totalElapsedTime(4, 21));
    }
}
