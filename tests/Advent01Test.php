<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Advent01Test extends TestCase
{
    public function testFuelFor12(): void
    {
	    $this->assertEquals(
		    2,
		    Advent01::fuelFor(12)
	    );
    }
    public function testFuelFor14(): void
    {
	    $this->assertEquals(
		    2,
		    Advent01::fuelFor(14)
	    );
    }
    public function testFuelFor1969(): void
    {
	    $this->assertEquals(
		    # 966, for part 2
		    654,
		    Advent01::fuelFor(1969)
	    );
    }
    public function testFuelFor100756(): void
    {
	    $this->assertEquals(
		    # 50346, for part 2
		    33583,
		    Advent01::fuelFor(100756)
	    );
    }
    public function testTotalFuelFor12And14(): void
    {
	    $this->markTestSkipped(
		    'Not applicable to part 1'
	    );
	    $this->assertEquals(
		    4,
		    Advent01::totalFuel([12, 14])
	    );
    }
    public function testTotalFuelFor4Examples(): void
    {
	    $this->markTestSkipped(
		    'Not applicable to part 1'
	    );
	    $this->assertEquals(
		    4 + 966 + 50346,
		    Advent01::totalFuel([12, 14, 1969, 100756])
	    );
    }
}

