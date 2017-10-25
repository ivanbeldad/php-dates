<?php

namespace Date;

/**
 * Class DateTimeFilter
 * @package Time
 */
class DateTimeFilter
{

    /** @var DateTimeArrayList */
    protected $dateTimeArrayList;

    /**
     * DateTimeFilter constructor.
     * @param DateTimeArrayList $dateTimeArrayList
     */
    protected function __construct($dateTimeArrayList)
    {
        $this->dateTimeArrayList = $dateTimeArrayList;
    }

    /**
     * @param DateTimeArrayList $dateTimeArrayList
     * @return DateTimeFilter
     */
    public static function builder($dateTimeArrayList)
    {
        return new DateTimeFilter($dateTimeArrayList);
    }

    /**
     * @return DateTimeArrayList
     */
    public function build()
    {
        return $this->dateTimeArrayList;
    }

    /**
     * @param int[] $years
     * @return DateTimeFilter
     */
    public function filterByYears(array $years)
    {
        $this->dateTimeArrayList = $this->dateTimeArrayList->filter(function (DateTime $date) use ($years) {
            return in_array($date->getYear(), $years);
        });
        return $this;
    }

    /**
     * @param int[] $month
     * @return DateTimeFilter
     */
    public function filterByMonths(array $month)
    {
        $this->dateTimeArrayList = $this->dateTimeArrayList->filter(function (DateTime $date) use ($month) {
            return in_array($date->getMonth(), $month);
        });
        return $this;
    }

    /**
     * @param int[] $days
     * @return DateTimeFilter
     */
    public function filterByDays(array $days)
    {
        $this->dateTimeArrayList = $this->dateTimeArrayList->filter(function (DateTime $date) use ($days) {
            return in_array($date->getDay(), $days);
        });
        return $this;
    }

    /**
     * @param int[] $days
     * @return DateTimeFilter
     */
    public function filterByDaysOfWeek(array $days)
    {
        $this->dateTimeArrayList = $this->dateTimeArrayList->filter(function (DateTime $date) use ($days) {
            return in_array($date->getDayOfWeek(), $days);
        });
        return $this;
    }

    /**
     * @param int[] $seasons
     * @return DateTimeFilter
     */
    public function filterBySeasons(array $seasons)
    {
        $this->dateTimeArrayList = $this->dateTimeArrayList->filter(function (DateTime $date) use ($seasons) {
            return in_array($date->getSeason(), $seasons);
        });
        return $this;
    }

    /**
     * @param int[] $hours
     * @return DateTimeFilter
     */
    public function filterByHours(array $hours)
    {
        $this->dateTimeArrayList = $this->dateTimeArrayList->filter(function (DateTime $date) use ($hours) {
            return in_array($date->getHour(), $hours);
        });
        return $this;
    }

    /**
     * @param int[] $minutes
     * @return DateTimeFilter
     */
    public function filterByMinutes(array $minutes)
    {
        $this->dateTimeArrayList = $this->dateTimeArrayList->filter(function (DateTime $date) use ($minutes) {
            return in_array($date->getMinute(), $minutes);
        });
        return $this;
    }

    /**
     * @param int[] $seconds
     * @return DateTimeFilter
     */
    public function filterBySeconds(array $seconds)
    {
        $this->dateTimeArrayList =  $this->dateTimeArrayList->filter(function (DateTime $date) use ($seconds) {
            return in_array($date->getSecond(), $seconds);
        });
        return $this;
    }

}
