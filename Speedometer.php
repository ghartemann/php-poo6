<?php

class Speedometer
{
    public const KM_MILES_CONVERSION = 1.60934;

    public static function convertKmToMiles(int $value): ?float
    {
        return $value / self::KM_MILES_CONVERSION;
    }

    public static function convertMilesToKm(int $value): ?float
    {
        return $value * self::KM_MILES_CONVERSION;
    }
}
