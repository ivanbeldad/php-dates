<?php

namespace Date;

class TimeConverter
{

    /** @var int */
    const DEFAULT_PRECISION = 2;
    /** @var float */
    const DAYS_PER_YEAR = 365.25;
    /** @var float */
    const MONTHS_PER_YEAR = 12;
    /** @var float */
    const DAYS_PER_MONTH = (self::DAYS_PER_YEAR / self::MONTHS_PER_YEAR);
    /** @var float */
    const HOURS_PER_DAY = 24;
    /** @var float */
    const MINUTES_PER_HOUR = 60;
    /** @var float */
    const SECONDS_PER_MINUTE = 60;
    /** @var float */
    const SECONDS_PER_HOUR = self::SECONDS_PER_MINUTE * self::MINUTES_PER_HOUR;
    /** @var float */
    const SECONDS_PER_DAY = self::SECONDS_PER_HOUR * self::HOURS_PER_DAY;
    /** @var float */
    const MINUTES_PER_DAY = self::MINUTES_PER_HOUR * self::HOURS_PER_DAY;
    /** @var float */
    const SECOND_PER_YEAR = self::SECONDS_PER_DAY * self::DAYS_PER_YEAR;

    /**
     * @param float $seconds
     * @param int $precision
     * @return float
     */
    public static function secondsToMinutes($seconds, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($seconds / self::SECONDS_PER_MINUTE), $precision);
    }

    /**
     * @param float $seconds
     * @param int $precision
     * @return float
     */
    public static function secondsToHours($seconds, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($seconds / self::SECONDS_PER_HOUR), $precision);
    }

    /**
     * @param float $seconds
     * @param int $precision
     * @return float
     */
    public static function secondsToDays($seconds, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($seconds / self::SECONDS_PER_DAY), $precision);
    }

    /**
     * @param float $seconds
     * @param float $daysPerMonth
     * @param int $precision
     * @return float
     */
    public static function secondsToMonths(
        $seconds,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($seconds / ($daysPerMonth * self::SECONDS_PER_DAY)), $precision);
    }

    /**
     * @param float $seconds
     * @param float $daysPerYear
     * @param int $precision
     * @return float
     */
    public static function secondsToYears(
        $seconds,
        $daysPerYear = self::DAYS_PER_YEAR,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($seconds / ($daysPerYear * self::SECONDS_PER_DAY)), $precision);
    }

    /**
     * @param float $minutes
     * @param int $precision
     * @return float
     */
    public static function minutesToSeconds($minutes, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($minutes * self::SECONDS_PER_MINUTE), $precision);
    }

    /**
     * @param float $minutes
     * @param int $precision
     * @return float
     */
    public static function minutesToHours($minutes, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($minutes / self::MINUTES_PER_HOUR), $precision);
    }

    /**
     * @param float $minutes
     * @param int $precision
     * @return float
     */
    public static function minutesToDays($minutes, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($minutes / self::MINUTES_PER_DAY), $precision);
    }

    /**
     * @param float $minutes
     * @param float $daysPerMonth
     * @param int $precision
     * @return float
     */
    public static function minutesToMonths(
        $minutes,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($minutes / self::MINUTES_PER_DAY / $daysPerMonth), $precision);
    }

    /**
     * @param float $minutes
     * @param float $daysPerMonth
     * @param float $daysPerYear
     * @param int $precision
     * @return float
     */
    public static function minutesToYears(
        $minutes,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $daysPerYear = self::DAYS_PER_YEAR,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($minutes / self::MINUTES_PER_DAY / $daysPerMonth / $daysPerYear), $precision);
    }

    /**
     * @param float $hours
     * @param int $precision
     * @return float
     */
    public static function hoursToSeconds($hours, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($hours * self::SECONDS_PER_HOUR), $precision);
    }

    /**
     * @param float $hours
     * @param int $precision
     * @return float
     */
    public static function hoursToMinutes($hours, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($hours * self::MINUTES_PER_HOUR), $precision);
    }

    /**
     * @param float $hours
     * @param int $precision
     * @return float
     */
    public static function hoursToDays($hours, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($hours / self::HOURS_PER_DAY), $precision);
    }

    /**
     * @param float $hours
     * @param float $daysPerMonth
     * @param int $precision
     * @return float
     */
    public static function hoursToMonths(
        $hours,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($hours / self::HOURS_PER_DAY / $daysPerMonth), $precision);
    }

    /**
     * @param float $hours
     * @param float $daysPerMonth
     * @param float $daysPerYear
     * @param int $precision
     * @return float
     */
    public static function hoursToYears(
        $hours,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $daysPerYear = self::DAYS_PER_YEAR,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($hours / self::HOURS_PER_DAY / $daysPerMonth / $daysPerYear), $precision);
    }

    /**
     * @param float $days
     * @param int $precision
     * @return float
     */
    public static function daysToSeconds($days, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($days * self::SECONDS_PER_DAY), $precision);
    }

    /**
     * @param float $days
     * @param int $precision
     * @return float
     */
    public static function daysToMinutes($days, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($days * self::MINUTES_PER_DAY), $precision);
    }

    /**
     * @param float $days
     * @param int $precision
     * @return float
     */
    public static function daysToHours($days, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($days * self::HOURS_PER_DAY), $precision);
    }

    /**
     * @param float $days
     * @param float $daysPerMonth
     * @param int $precision
     * @return float
     */
    public static function daysToMonths(
        $days,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($days / $daysPerMonth), $precision);
    }

    /**
     * @param float $days
     * @param float $daysPerMonth
     * @param float $daysPerYear
     * @param int $precision
     * @return float
     */
    public static function daysToYears(
        $days,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $daysPerYear = self::DAYS_PER_YEAR,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($days / $daysPerMonth / $daysPerYear), $precision);
    }

    /**
     * @param float $months
     * @param float $daysPerMonth
     * @param int $precision
     * @return float
     */
    public static function monthsToSeconds(
        $months,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($months * $daysPerMonth * self::SECONDS_PER_DAY), $precision);
    }

    /**
     * @param float $months
     * @param float $daysPerMonth
     * @param int $precision
     * @return float
     */
    public static function monthsToMinutes(
        $months,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($months * $daysPerMonth * self::MINUTES_PER_DAY), $precision);
    }

    /**
     * @param float $months
     * @param float $daysPerMonth
     * @param int $precision
     * @return float
     */
    public static function monthsToHours(
        $months,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($months * $daysPerMonth * self::HOURS_PER_DAY), $precision);
    }

    /**
     * @param float $months
     * @param float $daysPerMonth
     * @param int $precision
     * @return float
     */
    public static function monthsToDays(
        $months,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($months * $daysPerMonth), $precision);
    }

    /**
     * @param float $months
     * @param float $daysPerMonth
     * @param float $daysPerYear
     * @param int $precision
     * @return float
     */
    public static function monthsToYears(
        $months,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $daysPerYear = self::DAYS_PER_YEAR,
        $precision = self::DEFAULT_PRECISION)
    {
        $seconds = self::monthsToSeconds($months, $daysPerMonth, 100);
        $years = self::secondsToYears($seconds, $daysPerYear, $precision);
        return $years;
    }

    /**
     * @param float $years
     * @param float $daysPerYear
     * @param int $precision
     * @return float
     */
    public static function yearsToSeconds(
        $years,
        $daysPerYear = self::DAYS_PER_YEAR,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($years * $daysPerYear * self::SECONDS_PER_DAY), $precision);
    }

    /**
     * @param float $years
     * @param float $daysPerYear
     * @param int $precision
     * @return float
     */
    public static function yearsToMinutes($years, $daysPerYear = self::DAYS_PER_YEAR, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($years * $daysPerYear * self::MINUTES_PER_DAY), $precision);
    }

    /**
     * @param float $years
     * @param float $daysPerYear
     * @param int $precision
     * @return float
     */
    public static function yearsToHours($years, $daysPerYear = self::DAYS_PER_YEAR, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($years * $daysPerYear * self::HOURS_PER_DAY), $precision);
    }

    /**
     * @param float $years
     * @param float $daysPerYear
     * @param int $precision
     * @return float
     */
    public static function yearsToDays($years, $daysPerYear = self::DAYS_PER_YEAR, $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($years * $daysPerYear), $precision);
    }

    /**
     * @param float $years
     * @param float $daysPerMonth
     * @param float $daysPerYear
     * @param int $precision
     * @return float
     */
    public static function yearsToMonths(
        $years,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $daysPerYear = self::DAYS_PER_YEAR,
        $precision = self::DEFAULT_PRECISION)
    {
        return round(floatval($years * $daysPerYear / $daysPerMonth), $precision);
    }

    /**
     * @param float $time
     * @param int $limit
     * @param float $daysPerMonth
     * @param float $daysPerYear
     * @return DateObject
     */
    public static function secondsToDateObject(
        $time,
        $limit = Measure::DAY,
        $daysPerMonth = self::DAYS_PER_MONTH,
        $daysPerYear = self::DAYS_PER_YEAR)
    {
        $time = $time + 0.0000001;

        // YEAR
        $years = TimeConverter::secondsToYears($time, $daysPerYear, 10000);
        $fraction = $years - floor($years);
        if ($limit < Measure::YEAR) {
            $fraction = $years;
            $years = 0;
        }

        // MONTH
        $months = TimeConverter::yearsToMonths($fraction, $daysPerYear, $daysPerMonth, 10000);
        $fraction = $months - floor($months);
        if ($limit < Measure::MONTH) {
            $fraction = $months;
            $months = 0;
        }

        // DAYS
        $days = TimeConverter::monthsToDays($fraction, $daysPerMonth, 10000);
        $fraction = $days - floor($days);
        if ($limit < Measure::DAY) {
            $fraction = $days;
            $days = 0;
        }

        // HOURS
        $hours = TimeConverter::daysToHours($fraction, 10000);
        $fraction = $hours - floor($hours);
        if ($limit < Measure::HOUR) {
            $fraction = $hours;
            $hours = 0;
        }

        // MINUTES
        $minutes = TimeConverter::hoursToMinutes($fraction, 10000);
        $fraction = $minutes - floor($minutes);
        if ($limit < Measure::MINUTE) {
            $fraction = $minutes;
            $minutes = 0;
        }

        // SECONDS
        $seconds = TimeConverter::minutesToSeconds($fraction, 10000);

        $years = floor($years);
        $months = floor($months);
        $days = floor($days);
        $hours = floor($hours);
        $minutes = floor($minutes);
        $seconds = floor($seconds);

        return new DateObject([
            "year" => $years,
            "month" => $months,
            "day" => $days,
            "hour" => $hours,
            "minute" => $minutes,
            "second" => $seconds,
        ]);
    }

    private function __construct()
    {
    }

}
