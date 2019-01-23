<?php

namespace SimpleFactory;
class Pizza
{
    private $pizza_name;

    public function __construct($pizza_name)
    {
        $this->pizza_name = $pizza_name;
    }

    public function getPizzaName()
    {
        return $this->pizza_name;
    }

    public function prepare(){
        return '准备披萨'.$this->pizza_name;
    }

    public function cut(){
        return '切片'.$this->pizza_name;
    }

    public  function box(){
        return '包装'.$this->pizza_name;
    }
}