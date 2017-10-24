<?php

require_once 'autoload.php';


class DateFilterBuilder
{
    /** @var Date[] */
    private $dates;

    /**
     * DateFilterBuilder constructor.
     * @param Date[] $dates
     */
    private function __construct(array $dates)
    {
        $this->dates = $dates;
        $this->checkErrors();
    }

    public static function generate(array $dates)
    {
        return new DateFilterBuilder($dates);
    }

    /**
     * @param int[] $seasons
     * @return $this
     */
    public function filterBySeasons(array $seasons)
    {
        $this->dates = array_filter($this->dates, function(Date $date) use ($seasons) {
            return in_array($date->getSeasonNumber(), $seasons);
        });
        return $this;
    }

    /**
     * @param int[] $years
     * @return $this
     */
    public function filterByYears(array $years)
    {
        $this->dates = array_filter($this->dates, function(Date $date) use ($years) {
            return in_array($date->getYear(), $years);
        });
        return $this;
    }

    /**
     * @param int[] $month
     * @return $this
     */
    public function filterByMonths(array $month)
    {
        $this->dates = array_filter($this->dates, function(Date $date) use ($month) {
            return in_array($date->getMonth(), $month);
        });
        return $this;
    }

    /**
     * @param int[] $days
     * @return $this
     */
    public function filterByDaysOfMonths(array $days)
    {
        $this->dates = array_filter($this->dates, function(Date $date) use ($days) {
            return in_array($date->getDay(), $days);
        });
        return $this;
    }

    /**
     * @param int[] $days
     * @return $this
     */
    public function filterByDaysOfWeek(array $days)
    {
        $this->dates = array_filter($this->dates, function(Date $date) use ($days) {
            return in_array($date->getDayOfWeek(), $days);
        });
        return $this;
    }

    /**
     * @param int[] $hours
     * @return $this
     */
    public function filterByHours(array $hours)
    {
        $this->dates = array_filter($this->dates, function(Date $date) use ($hours) {
            return in_array($date->getHours(), $hours);
        });
        return $this;
    }

    /**
     * @param int[] $minutes
     * @return $this
     */
    public function filterByMinutes(array $minutes)
    {
        $this->dates = array_filter($this->dates, function(Date $date) use ($minutes) {
            return in_array($date->getMinutes(), $minutes);
        });
        return $this;
    }

    /**
     * @param int[] $seconds
     * @return $this
     */
    public function filterBySeconds(array $seconds)
    {
        $this->dates = array_filter($this->dates, function(Date $date) use ($seconds) {
            return in_array($date->getSeconds(), $seconds);
        });
        return $this;
    }

    /**
     * @return Date[]
     */
    public function build()
    {
        return array_values($this->dates);
    }

    private function checkErrors()
    {
        foreach ($this->dates as $date) {
            if (!($date instanceof Date)) {
                throw new RuntimeException("DateFilterBuilder only can receive an array of Dates");
            }
        }
    }

}
