<?php
namespace App;

class Box {


    public array $items = [];

    public function __construct()    {

        $this->items = ['toy','pen','book'];

    }

    public function has($item) {
        return in_array($item, $this->items);
    }

    public function add($item) {
        $this->items[] = $item;
        return in_array($item, $this->items);
    }

}


