<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercism/src/LuckyNumbers.php';

class LuckyNumbersTest extends TestCase
{
    private LuckyNumbers $luckyNumber;

    protected function setUp(): void
    {
        $this->luckyNumber = new LuckyNumbers();
    }

    public function testIsPalindrome()
    {
        $this->assertSame(true, $this->luckyNumber->isPalindrome(1441));
        $this->assertSame(false, $this->luckyNumber->isPalindrome(123));
    }

    public function testValidate()
    {
        $this->assertSame('', $this->luckyNumber->validate('123'));
        $this->assertSame('Required field', $this->luckyNumber->validate(''));
        $this->assertSame(
            'Must be a whole number larger than 0',
            $this->luckyNumber->validate('abc')
        );
    }

    public function testSumUp()
    {
        $this->assertSame(130, $this->luckyNumber->sumUp([1, 2, 3], [0, 7]));
    }
}
