<?php
namespace drmonkeyninja;

class Collection{

    protected $items = [];

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function get(){
        return $this->items;
    }

    public function count(){
        return count($this->items);
    }
}