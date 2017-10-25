<?php

namespace Time;

/**
 * Class DateYearComparator
 * @package Time
 */
class DateYearComparator implements DateComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getYear() > $o2->getYear();
    }

}
