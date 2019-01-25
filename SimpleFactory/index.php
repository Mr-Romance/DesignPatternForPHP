<?php
include "Pizza.php";
include "BBKPizza.php";
include "CheesePizza.php";
include "SimpleFactory.php";
include "VeggiePizza.php";

use SimpleFactory\BBKPizza;
use SimpleFactory\SimpleFactory;

$pizza_factory = new SimpleFactory();
$bbk_pizza = new BBKPizza($pizza_factory); // 必败客是调用披萨的地方
$the_pizza = $bbk_pizza->orderPizza('cheese'); // 制作披萨，细节过程在工厂中完成

var_dump($the_pizza->getPizzaName());





