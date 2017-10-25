<?php

namespace Date;

use Collection\ArrayList;

/**
 * Class DateTimeArrayList
 * @package Time
 */
class DateTimeArrayList extends ArrayList
{

    /** @var DateTime */
    protected $type;

    /**
     * DateTimeArrayList constructor.
     * @param array $elements
     */
    public function __construct(array $elements = [])
    {
        $this->type = DateTime::now();
        parent::__construct($elements);
    }

    /**
     * @param Date $element
     */
    public function add($element)
    {
        parent::add($element);
    }

    /**
     * @param int $index
     * @param Date $element
     */
    public function addAt($index, $element)
    {
        parent::addAt($index, $element);
    }

    /**
     * @param Date[] $elements
     */
    public function addAll($elements)
    {
        parent::addAll($elements);
    }

    /**
     * @param int $index
     * @param Date[] $elements
     */
    public function addAllAt($index, $elements)
    {
        parent::addAllAt($index, $elements);
    }

    /**
     * @param int $index
     * @return Date
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
     * @return Date[]
     */
    public function toArray()
    {
        return parent::toArray();
    }

    /**
     * @param Date $element
     * @return bool
     */
    public function containts($element)
    {
        return parent::containts($element);
    }

    /**
     * @param Date $element
     * @return int
     */
    public function indexOf($element)
    {
        return parent::indexOf($element);
    }

    /**
     * @param callable|DateTimeComparator $comparator
     * @param bool $ascendent
     */
    public function sort($comparator, $ascendent = true)
    {
        parent::sort($comparator, $ascendent);
    }

    /**
     * @param callable $callable
     */
    public function forEachDo(callable $callable)
    {
        parent::forEachDo($callable);
    }

    /**
     * @param callable $callable
     * @return DateTimeArrayList|mixed
     */
    public function filter(callable $callable)
    {
        return parent::filter($callable);
    }

    /**
     * @param callable $callable
     * @return DateTimeArrayList|mixed
     */
    public function map(callable $callable)
    {
        return parent::map($callable);
    }

    /**
     * @param callable $callable
     * @param mixed $initialValue
     * @return mixed
     */
    public function reduce(callable $callable, $initialValue)
    {
        return parent::reduce($callable, $initialValue);
    }

}
