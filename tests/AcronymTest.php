<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercism/src/Acronym.php';

class AcronymTest extends TestCase
{
    public function testAcronym(): void
    {
        $this->assertSame('ASAP', acronym('As Soon As Possible'));
        $this->assertSame('LCD', acronym('Liquid-crystal display'));
        $this->assertSame('TGIF', acronym("Thank George It's Friday!"));
    }

}
