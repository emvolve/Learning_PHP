<?php

declare(strict_types=1);

function detectAnagrams(string $word, array $anagrams): array
{
    $solutions = [];

    foreach ($anagrams as $anagram) {
        if (isAnagram($word, $anagram)) {
            $solutions[] = $anagram;
        }
    }

    return $solutions;
}

// Two anagrams will always produce identical count_chars() output
// e.g. count_chars("cat", 1) == [97 => 1, 99 => 1, 116 => 1]
function isAnagram(string $a, string $b): bool
{
    // Word is not its own anagram
    if (strtolower($a) === strtolower($b)) {
        return false;
    }

    return count_chars(strtolower($a), 1) === count_chars(strtolower($b), 1);
}
