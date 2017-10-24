<?php

namespace Date;

/**
 * Class DateDayOfWeekComparator
 * @package Date
 */
class DateDayOfWeekComparator implements DateComparator
{

    function compareTo($o1, $o2)
    {
        return $o1->getDayOfWeek() > $o2->getDayOfWeek();
    }

}
