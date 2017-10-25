<?php

namespace Time;

/**
 * Class TimeSecondComparator
 * @package Time
 */
class TimeSecondComparator implements TimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getSecond() > $o2->getSecond();
    }

}
