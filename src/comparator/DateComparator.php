<?php


namespace Date;

use Collection\Comparator;

interface DateComparator extends Comparator
{

    /**
     * @param Date $o1
     * @param Date $o2
     * @return int
     */
    function compareTo($o1, $o2);

}
