<?php


namespace Date;

use Collection\Comparator;

interface DateComparator extends Comparator
{

    /**
     * @param DateObject $o1
     * @param DateObject $o2
     * @return int
     */
    public function compareTo($o1, $o2);

}
