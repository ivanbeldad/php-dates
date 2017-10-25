<?php

namespace Date;

use RuntimeException;

class DateFilter
{

    /** @var DateArrayList */
    private $dates;

    /**
     * DateFilterBuilder constructor.
     * @param DateArrayList $dates
     */
    private function __construct(DateArrayList $dates)
    {
        $this->dates = $dates;
        $this->checkErrors();
        new Date();
    }

    /**
     * @param DateArrayList $dates
     * @return DateFilterBuilder
     */
    public static function builder(DateArrayList $dates)
    {
        $dateFilter = new DateFilter($dates);
        return new DateFilterBuilder($dateFilter);
    }

    /**
     * @param int[] $seasons
     */
    public function filterBySeasons(array $seasons)
    {
        $this->dates = $this->dates->filter(function (Date $date) use ($seasons) {
            return in_array($date->getSeason(), $seasons);
        });
    }

    /**
     * @param int[] $years
     */
    public function filterByYears(array $years)
    {
        $this->dates = $this->dates->filter(function (Date $date) use ($years) {
            return in_array($date->getYear(), $years);
        });
    }

    /**
     * @param int[] $month
     */
    public function filterByMonths(array $month)
    {
        $this->dates = $this->dates->filter(function (Date $date) use ($month) {
            return in_array($date->getMonth(), $month);
        });
    }

    /**
     * @param int[] $days
     */
    public function filterByDaysOfMonths(array $days)
    {
        $this->dates = $this->dates->filter(function (Date $date) use ($days) {
            return in_array($date->getDay(), $days);
        });
    }

    /**
     * @param int[] $days
     */
    public function filterByDaysOfWeek(array $days)
    {
        $this->dates = $this->dates->filter(function (Date $date) use ($days) {
            return in_array($date->getDayOfWeek(), $days);
        });
    }

    /**
     * @param int[] $hours
     */
    public function filterByHours(array $hours)
    {
        $this->dates = $this->dates->filter(function (Date $date) use ($hours) {
            return in_array($date->getHour(), $hours);
        });
    }

    /**
     * @param int[] $minutes
     */
    public function filterByMinutes(array $minutes)
    {
        $this->dates = $this->dates->filter(function (Date $date) use ($minutes) {
            return in_array($date->getMinute(), $minutes);
        });
    }

    /**
     * @param int[] $seconds
     */
    public function filterBySeconds(array $seconds)
    {
        $this->dates =  $this->dates->filter(function (Date $date) use ($seconds) {
            return in_array($date->getSecond(), $seconds);
        });
    }

    /**
     * @return DateArrayList
     */
    public function get()
    {
        return $this->dates;
    }

    private function checkErrors()
    {
        foreach ($this->dates as $date) {
            if (!($date instanceof Date)) {
                throw new RuntimeException("DateFilter only can receive an array of Dates");
            }
        }
    }

}
