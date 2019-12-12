<?php
declare(strict_types=1);

final class Advent01
{
    private $email;

    public static function fuelFor(int $mass): int
    {
	    $calcAmt = intdiv($mass, 3) - 2;
	    return $calcAmt > 0 ? $calcAmt : 0;
    }
}
