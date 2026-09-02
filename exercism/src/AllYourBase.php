<?php

declare(strict_types=1);

function rebase(int $fromBase, array $digits, int $toBase): array
{
    if ($fromBase < 2) {
        throw new InvalidArgumentException('input base must be >= 2');
    }

    if ($toBase < 2) {
        throw new InvalidArgumentException('output base must be >= 2');
    }

    foreach ($digits as $digit) {
        if ($digit < 0 || $digit >= $fromBase) {
            throw new InvalidArgumentException(
                'all digits must satisfy 0 <= d < input base'
            );
        }
    }

    $decimalValue = hornerDecimalValue($digits, $fromBase);

    return decimalToBaseDigits($decimalValue, $toBase);
}

function hornerDecimalValue(array $digits, int $fromBase): int
{
    // value = d₂·b² + d₁·b¹ + d₀·b⁰ -- 'classic view'
    // but refactor: value = d₀ + b·(d₁ + b·(d₂)) -- algebraically identical

    // So instead of computing powers:
    /*
        result = 0
        for each digit d, left to right:
        result = result × b + d
     */

    $result = 0;
    foreach ($digits as $digit) {
        $result = $result * $fromBase + $digit;
    }

    return $result;
}

function decimalToBaseDigits(int $decimalValue, int $toBase): array
{
    if ($decimalValue === 0) {
        return [0];
    }

    // Traditionally - find the largest power of the base that's less than the number - requiring us to figure out how
    // many digits the answer will have before computing the answer.
    // Instead, repeatedly divide by the target base, keeping the remainder each time, until the number reaches zero
    // The remainders, read in reverse order (last remainder first), are the answer's digits. So our formula becomes:

    /*
        digits = []
        while n > 0:
            digits.prepend(n mod b)
            n = n div b (integer division)
    */

    $result = [];
    while ($decimalValue > 0) {
        $result[]     = $decimalValue % $toBase;
        $decimalValue = intdiv($decimalValue, $toBase);
    }

    return array_reverse($result);
}