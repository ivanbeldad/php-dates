<?php

namespace Date;

/**
 * Class DateTimeComparator
 * @package Date
 */
class DateTimeComparator implements DateComparator
{

    function compareTo($o1, $o2)
    {
        return $o1->getTime() > $o2->getTime();
    }

}
