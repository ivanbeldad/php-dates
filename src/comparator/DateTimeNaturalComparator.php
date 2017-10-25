<?php

namespace Date;

/**
 * Class DateTimeRealComparator
 * @package Time
 */
class DateTimeNaturalComparator implements DateTimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getUnixTime() > $o2->getUnixTime();
    }

}
