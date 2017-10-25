<?php

namespace Date;

/**
 * Class TimeRealComparator
 * @package Time
 */
class TimeNaturalComparator implements TimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getUnixTime() > $o2->getUnixTime();
    }

}
