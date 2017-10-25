<?php

namespace Date;

/**
 * Class DateDayComparator
 * @package Date
 */
class DateDayComparator implements DateComparator
{

    function compareTo($o1, $o2)
    {
        return $o1->getDay() > $o2->getDay();
    }

}
