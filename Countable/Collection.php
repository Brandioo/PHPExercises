<?php

class Collection implements Countable{


    private $items;
    public function __construct(array $items)
    {
        $this->items = $items;
    }
    public function count(){
        return count($this->items);
    }
}
$config = [
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => 'root'
];
$collection = new Colletion($config);

echo count($collection);