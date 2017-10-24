<?php

namespace Date;

/**
 * Class DateMinutesComparator
 * @package Date
 */
class DateMinutesComparator implements DateComparator
{

    function compareTo($o1, $o2)
    {
        return $o1->getMinute() > $o2->getMinute();
    }

}
