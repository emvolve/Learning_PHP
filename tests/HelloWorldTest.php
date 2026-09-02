<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercism/src/HelloWorld.php';

final class HelloWorldTest extends TestCase
{
    public function testSayHelloWorld(): void
    {
        $this->assertSame('Hello, World!', helloWorld());
    }
}

