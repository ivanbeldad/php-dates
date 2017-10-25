<?php

namespace Time;

/**
 * Class TimeFilter
 * @package Time
 */
class TimeFilter
{

    /** @var TimeArrayList */
    protected $timeArrayList;

    /**
     * TimeFilter constructor.
     * @param TimeArrayList $timeArrayList
     */
    protected function __construct($timeArrayList)
    {
        $this->timeArrayList = $timeArrayList;
    }

    /**
     * @param TimeArrayList $timeArrayList
     * @return TimeFilter
     */
    public static function builder($timeArrayList)
    {
        return new TimeFilter($timeArrayList);
    }

    /**
     * @return TimeArrayList
     */
    public function build()
    {
        return $this->timeArrayList;
    }

    /**
     * @param int[] $hours
     * @return TimeFilter
     */
    public function filterByHours(array $hours)
    {
        $this->timeArrayList = $this->timeArrayList->filter(function (Time $date) use ($hours) {
            return in_array($date->getHour(), $hours);
        });
        return $this;
    }

    /**
     * @param int[] $minutes
     * @return TimeFilter
     */
    public function filterByMinutes(array $minutes)
    {
        $this->timeArrayList = $this->timeArrayList->filter(function (Time $date) use ($minutes) {
            return in_array($date->getMinute(), $minutes);
        });
        return $this;
    }

    /**
     * @param int[] $seconds
     * @return TimeFilter
     */
    public function filterBySeconds(array $seconds)
    {
        $this->timeArrayList =  $this->timeArrayList->filter(function (Time $date) use ($seconds) {
            return in_array($date->getSecond(), $seconds);
        });
        return $this;
    }

}
