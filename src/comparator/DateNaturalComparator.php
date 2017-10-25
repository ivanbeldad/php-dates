<?php

namespace Time;

/**
 * Class DateRealComparator
 * @package Time
 */
class DateNaturalComparator implements DateComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getUnixTime() > $o2->getUnixTime();
    }

}
