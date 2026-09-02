<?php

$greeting = "Hello, World!";
$name = "John Snow";

function buildMessage(string $greeting, string $name): string {
    $message = "$greeting My name is $name.";
    return $message;
}

$finalMessage = buildMessage($greeting, $name);
echo $finalMessage . PHP_EOL;

for ($i = 1; $i <= 5; $i++) {
    echo "Count: $i" . PHP_EOL;
}