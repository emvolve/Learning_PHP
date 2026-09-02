<?php

//Deliberately uses unsafe type conversions to demo type juggling
class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $number1 = implode('', $digitsOfNumber1);
        $number2 = implode('', $digitsOfNumber2);

        return (int)$number1 + (int)$number2;
    }

    public function isPalindrome(int $number): bool
    {
        return (string)$number === strrev((string)$number);
    }

    public function validate(string $input): string
    {
        if ($input == '') {
            return "Required field";
        }
        if ((int)$input <= 0) {
            return "Must be a whole number larger than 0";
        }
        return '';
    }

}