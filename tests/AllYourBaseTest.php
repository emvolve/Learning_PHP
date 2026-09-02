<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercism/src/AllYourBase.php';

class AllYourBaseTest extends TestCase
{
    public function testHornerDecimalValue(): void
    {
        $this->assertSame(5, hornerDecimalValue([1, 0, 1], 2));
        $this->assertSame(42, hornerDecimalValue([1, 0, 1, 0, 1, 0], 2));
        $this->assertSame(42, hornerDecimalValue([1, 1, 2, 0], 3));
    }

    public function testDecimalToBaseDigits(): void
    {
        $this->assertSame([1, 0, 1, 0, 1, 0],
            decimalToBaseDigits(42, 2));
        $this->assertSame([1, 1, 2, 0], decimalToBaseDigits(42, 3));
    }

    //function rebase(int $fromBase, array $digits, int $toBase): array
    public function testRebase(): void
    {
        $this->assertSame([1, 3], rebase(10, [1, 0], 7));
        $this->assertSame([4, 4, 0], rebase(6, [1, 0, 1, 2], 7));
        $this->assertSame([1,2,0,1,0,1,1,2,2,1,2], rebase(7, [6,0,0,3,2,0], 3));
    }

}