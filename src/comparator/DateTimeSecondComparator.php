<?php

namespace Time;

/**
 * Class DateTimeSecondComparator
 * @package Time
 */
class DateTimeSecondComparator implements DateTimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getSecond() > $o2->getSecond();
    }

}
