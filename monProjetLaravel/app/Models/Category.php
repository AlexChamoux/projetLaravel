<?php

require('Item.php');
require('Pointure.php');
class Category
{

    private array $items = [];

    public function __construct(array $data = [])
    {
        $this->transformToObject($data);
    }

    public function transformToObject(array $data)
    {
        foreach ($data as $var) {
            if (isset($var['pointure'])) {
                $this->items[] = new Pointure($var);
            } else {
                $this->items[] = new Item($var);
            }
        }
    }


    public function getItems(): array
    {
//        var_dump($this->items);
        return $this->items;
    }

}
