<?php

namespace Date;

/**
 * Class DateSecondsComparator
 * @package Date
 */
class DateSecondsComparator implements DateComparator
{

    function compareTo($o1, $o2)
    {
        return $o1->getSeconds() > $o2->getSeconds();
    }

}
