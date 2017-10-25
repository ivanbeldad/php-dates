<?php

namespace Date;

/**
 * Class DateYearComparator
 * @package Date
 */
class DateYearComparator implements DateComparator
{

    function compareTo($o1, $o2)
    {
        return $o1->getYear() > $o2->getYear();
    }

}
