<?php


class Container implements ArrayAccess
{
    private array $container;

    public function __construct(array $items = [])
    {
        $this->container = $items;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($key)
    {
        return isset($this->container[$key]);
    }

    public function offsetUnset($key)
    {
        unset($this->container[$key]);
    }

    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}