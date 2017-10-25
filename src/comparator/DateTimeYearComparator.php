<?php

namespace Date;

/**
 * Class DateTimeYearComparator
 * @package Time
 */
class DateTimeYearComparator implements DateTimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getYear() > $o2->getYear();
    }

}
