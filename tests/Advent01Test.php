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
    public function testFuelFor1969Is654(): void
    {
	    $this->assertEquals(
		    654,
		    Advent01::fuelFor(1969)
	    );
    }
    public function testFuelFor100756Is33583(): void
    {
	    $this->assertEquals(
		    33583,
		    Advent01::fuelFor(100756)
	    );
    }
}

