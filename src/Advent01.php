<?php
declare(strict_types=1);

final class Advent01
{
    public static function fuelFor(int $mass): int
    {
	    $calcAmt = intdiv($mass, 3) - 2;
	    return $calcAmt > 0 ? $calcAmt + Advent01::fuelFor($calcAmt) : 0;
    }
    public static function totalFuel(array $masses): int
    {
	    $total_fuel = 0;
	    foreach ($masses as $mass){
		    $total_fuel = $total_fuel + self::fuelFor($mass);
	    }
	    return $total_fuel;
    }
}
