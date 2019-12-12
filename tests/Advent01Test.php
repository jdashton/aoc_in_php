<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Advent01Test extends TestCase
{
    public function testFuelFor12Is2(): void
    {
	    $this->assertEquals(
		    2,
		    Advent01::fuelFor(12)
	    );
    }
    public function testFuelFor14Is2(): void
    {
	    $this->assertEquals(
		    2,
		    Advent01::fuelFor(14)
	    );
    }
    public function testFuelFor1969Is966(): void
    {
	    $this->assertEquals(
		    966,
		    Advent01::fuelFor(1969)
	    );
    }
    public function testFuelFor100756Is50346(): void
    {
	    $this->assertEquals(
		    50346,
		    Advent01::fuelFor(100756)
	    );
    }
    public function testTotalFuelFor12And14Is4(): void
    {
	    $this->assertEquals(
		    4,
		    Advent01::totalFuel([12, 14])
	    );
    }
    public function testTotalFuelFor4Examples(): void
    {
	    $this->assertEquals(
		    4 + 966 + 50346,
		    Advent01::totalFuel([12, 14, 1969, 100756])
	    );
    }
}

