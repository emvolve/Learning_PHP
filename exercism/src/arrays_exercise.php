<?php

function language_list(...$items_to_add): array
{
    // returns an empty array if no argument passed
    // If arguments passed, it will already be an array - e.g. language_list("PHP", "Haskell", "Java") will return
    // ["PHP", "Haskell", "Java"]
    return $items_to_add;
}

function add_to_language_list($languages, $language_to_add)
{
    $languages[] = $language_to_add;
    return $languages;
}

function prune_language_list($languages): array
{
    // no guard needed - array_slice([], 1) returns [] (empty array)
    return array_slice($languages, 1);
}

function current_language($language_list)
{
    return $language_list[0];
}

function language_list_length($language_list): int
{
    return count($language_list);
}
