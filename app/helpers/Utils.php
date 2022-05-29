<?php

class Utils
{
    public static function createDate(int $year, int $month, int $day): \Carbon\CarbonImmutable
    {
        return \Carbon\CarbonImmutable::createFromDate($year, $month, $day);
    }
}