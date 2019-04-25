<?php

namespace FactoryMethod;

/**
 *  披萨类
 *
 * Class Pizza
 * @package FactoryMethod
 */
class Pizza
{
    protected $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function prepare() {
        echo $this->name . '正在准备披萨...';
        echo '<br>';
    }

    public function cut() {
        echo $this->name . '披萨切片...';
        echo '<br>';
    }

    public function box() {
        echo $this->name . '披萨打包完毕';
        echo '<br>';
    }
}