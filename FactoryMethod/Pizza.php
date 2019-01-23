<?php


namespace FactoryMethod;

class Pizza
{
    private $pizza_name;

    /**
     * @return string
     */
    public function getPizzaName() : string
    {
        return $this->pizza_name;
    }

    /**
     * @param string
     * @return string
     */
    public function setPizzaName($pizza_name) :string
    {
        $this->pizza_name = $pizza_name;
    }

    public function __construct($pizza_name)
    {
        $this->pizza_name = $pizza_name;
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