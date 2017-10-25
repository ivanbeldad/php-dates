<?php

namespace Date;

class DateFilterBuilder
{

    /** @var DateFilter */
    protected $dateFilter;

    /**
     * DateFilterBuilder constructor.
     * @param DateFilter $dateFilter
     */
    public function __construct(DateFilter $dateFilter)
    {
        $this->dateFilter = $dateFilter;
    }

    /**
     * @param int[] $seasons
     * @return $this
     */
    public function filterBySeasons(array $seasons)
    {
        $this->dateFilter->filterBySeasons($seasons);
        return $this;
    }

    /**
     * @param int[] $years
     * @return $this
     */
    public function filterByYears(array $years)
    {
        $this->dateFilter->filterByYears($years);
        return $this;
    }

    /**
     * @param int[] $month
     * @return $this
     */
    public function filterByMonths(array $month)
    {
        $this->dateFilter->filterByMonths($month);
        return $this;
    }

    /**
     * @param int[] $days
     * @return $this
     */
    public function filterByDaysOfMonths(array $days)
    {
        $this->dateFilter->filterByDaysOfMonths($days);
        return $this;
    }

    /**
     * @param int[] $days
     * @return $this
     */
    public function filterByDaysOfWeek(array $days)
    {
        $this->dateFilter->filterByDaysOfWeek($days);
        return $this;
    }

    /**
     * @param int[] $hours
     * @return $this
     */
    public function filterByHours(array $hours)
    {
        $this->dateFilter->filterByHours($hours);
        return $this;
    }

    /**
     * @param int[] $minutes
     * @return $this
     */
    public function filterByMinutes(array $minutes)
    {
        $this->dateFilter->filterByMinutes($minutes);
        return $this;
    }

    /**
     * @param int[] $seconds
     * @return $this
     */
    public function filterBySeconds(array $seconds)
    {
        $this->dateFilter->filterBySeconds($seconds);
        return $this;
    }

    /**
     * @return DateArrayList
     */
    public function build()
    {
        return $this->dateFilter->get();
    }

}
