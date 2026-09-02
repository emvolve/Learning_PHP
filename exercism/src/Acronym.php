<?php

declare(strict_types=1);

function acronym(string $text): string
{
    // https://www.php.net/manual/en/book.pcre.php
    // Regular Expressions (Perl-Compatible)
    // preg - Perl Regular Expressions
    $tokens = preg_split('/[\s-]+/', $text, -1, PREG_SPLIT_NO_EMPTY);

    $acronym = '';
    foreach ($tokens as $token) {
        $acronym .= mb_strtoupper($token[0]);
    }
    return $acronym;
}
