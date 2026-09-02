<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercism/src/PizzaPi.php';

class PizzaPiTest extends TestCase
{

    private PizzaPi $pizzaPi;

    protected function setUp(): void {
        $this->pizzaPi = new PizzaPi();
    }

    public function testCalculateLeftOverSlices()
    {
        $this->assertSame(0, $this->pizzaPi->calculateLeftOverSlices(2, 4));
        $this->assertSame(2, $this->pizzaPi->calculateLeftOverSlices(4, 3));
    }

    public function testCalculateSauceRequirement()
    {
        $this->assertSame(4, $this->pizzaPi->calculateSauceRequirement(8, 250));
    }

    public function testCalculateDoughRequirement()
    {
        $this->assertSame(1440, $this->pizzaPi->calculateDoughRequirement(4, 8));
    }

    public function testCalculateCheeseCubeCoverage()
    {
        // $pizza_pi->calculateCheeseCubeCoverage(25, 0.5, 30); == 331
        $this->assertSame(331, $this->pizzaPi->calculateCheeseCubeCoverage(25, 0.5, 30));
    }
}
