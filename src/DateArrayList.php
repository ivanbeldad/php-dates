<?php

namespace Date;

use Collection\ArrayList;

class DateArrayList extends ArrayList
{

    /** @var string */
    protected $type;

    /**
     * DateArrayList constructor.
     * @param DateObject[] $elements
     */
    public function __construct(array $elements = [])
    {
        $this->type = new DateObject();
        parent::__construct($elements);
    }

    /**
     * @param DateObject $element
     */
    public function add($element)
    {
        parent::add($element);
    }

    /**
     * @param int $index
     * @param DateObject $element
     */
    public function addAt($index, $element)
    {
        parent::addAt($index, $element);
    }

    /**
     * @param DateObject[] $elements
     */
    public function addAll($elements)
    {
        parent::addAll($elements);
    }

    /**
     * @param int $index
     * @param DateObject[] $elements
     */
    public function addAllAt($index, $elements)
    {
        parent::addAllAt($index, $elements);
    }

    /**
     * @param int $index
     * @return DateObject
     */
    public function get($index)
    {
        return parent::get($index);
    }

    /**
     * @param int $index
     */
    public function remove($index)
    {
        parent::remove($index);
    }

    /**
     *
     */
    public function clear()
    {
        parent::clear();
    }

    /**
     * @return int
     */
    public function size()
    {
        return parent::size();
    }

    /**
     * @return DateObject[]
     */
    public function toArray()
    {
        return parent::toArray();
    }

    /**
     * @param DateObject $element
     * @return bool
     */
    public function containts($element)
    {
        return parent::containts($element);
    }

    /**
     * @param DateObject $element
     * @return int
     */
    public function indexOf($element)
    {
        return parent::indexOf($element);
    }

    /**
     * @param callable|DateComparator $comparator
     * @param bool $ascendent
     */
    public function sort($comparator, $ascendent = true)
    {
        parent::sort($comparator, $ascendent);
    }

}
