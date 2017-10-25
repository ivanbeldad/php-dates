<?php

namespace Date;

use Collection\ArrayList;

/**
 * Class TimeArrayList
 * @package Time
 */
class TimeArrayList extends ArrayList
{

    /** @var Time */
    protected $type;

    /**
     * TimeArrayList constructor.
     * @param array $elements
     */
    public function __construct(array $elements = [])
    {
        $this->type = Time::now();
        parent::__construct($elements);
    }

    /**
     * @param Time $element
     */
    public function add($element)
    {
        parent::add($element);
    }

    /**
     * @param int $index
     * @param Time $element
     */
    public function addAt($index, $element)
    {
        parent::addAt($index, $element);
    }

    /**
     * @param Time[] $elements
     */
    public function addAll($elements)
    {
        parent::addAll($elements);
    }

    /**
     * @param int $index
     * @param Time[] $elements
     */
    public function addAllAt($index, $elements)
    {
        parent::addAllAt($index, $elements);
    }

    /**
     * @param int $index
     * @return Time
     */
    public function get($index)
    {
        return parent::get($index);
    }

    /**
     * @param Time $element
     */
    public function remove($element)
    {
        parent::remove($element);
    }

    /**
     * @param int $index
     */
    public function removeAt($index)
    {
        parent::removeAt($index);
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
     * @return bool
     */
    public function isEmpty()
    {
        return parent::isEmpty();
    }

    /**
     * @return Time[]
     */
    public function toArray()
    {
        return parent::toArray();
    }

    /**
     * @param Time $element
     * @return bool
     */
    public function containts($element)
    {
        return parent::containts($element);
    }

    /**
     * @param Time $element
     * @return int
     */
    public function indexOf($element)
    {
        return parent::indexOf($element);
    }

    /**
     * @param callable|TimeComparator $comparator
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
     * @return TimeArrayList|mixed
     */
    public function filter(callable $callable)
    {
        return parent::filter($callable);
    }

    /**
     * @param callable $callable
     * @return TimeArrayList|mixed
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
