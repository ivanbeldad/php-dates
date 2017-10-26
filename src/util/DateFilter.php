<?php


namespace Date;

/**
 * Class DateFilter
 * @package Time
 */
class DateFilter
{

    /** @var DateArrayList */
    protected $dateArrayList;

    /**
     * DateFilter constructor.
     * @param DateArrayList $dateArrayList
     */
    protected function __construct($dateArrayList)
    {
        $this->dateArrayList = $dateArrayList;
    }

    /**
     * @param DateArrayList $dateArrayList
     * @return DateFilter
     */
    public static function builder($dateArrayList)
    {
        return new DateFilter($dateArrayList);
    }

    /**
     * @return DateArrayList
     */
    public function build()
    {
        return $this->dateArrayList;
    }

    /**
     * @param int[] $years
     * @return DateFilter
     */
    public function filterByYears(array $years)
    {
        $this->dateArrayList = $this->dateArrayList->filter(function (Date $date) use ($years) {
            return in_array($date->getYear(), $years);
        });
        return $this;
    }

    /**
     * @param int[] $month
     * @return DateFilter
     */
    public function filterByMonths(array $month)
    {
        $this->dateArrayList = $this->dateArrayList->filter(function (Date $date) use ($month) {
            return in_array($date->getMonth()->getNumber(), $month);
        });
        return $this;
    }

    /**
     * @param int[] $days
     * @return DateFilter
     */
    public function filterByDays(array $days)
    {
        $this->dateArrayList = $this->dateArrayList->filter(function (Date $date) use ($days) {
            return in_array($date->getDay(), $days);
        });
        return $this;
    }

    /**
     * @param int[] $days
     * @return DateFilter
     */
    public function filterByDaysOfWeek(array $days)
    {
        $this->dateArrayList = $this->dateArrayList->filter(function (Date $date) use ($days) {
            return in_array($date->getDayOfWeek()->getNumber(), $days);
        });
        return $this;
    }

    /**
     * @param int[] $seasons
     * @return DateFilter
     */
    public function filterBySeasons(array $seasons)
    {
        $this->dateArrayList = $this->dateArrayList->filter(function (Date $date) use ($seasons) {
            return in_array($date->getSeason()->getNumber(), $seasons);
        });
        return $this;
    }

}
