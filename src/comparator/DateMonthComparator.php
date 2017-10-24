<?php

namespace Date;

/**
 * Class DateMonthComparator
 * @package Date
 */
class DateMonthComparator implements DateComparator
{

    function compareTo($o1, $o2)
    {
        return $o1->getMonth() > $o2->getMonth();
    }

}
