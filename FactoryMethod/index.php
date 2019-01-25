<?php
include "Pizza.php";
include "CheesePizza.php";
include "VeggiePizza.php";
include "FactoryMethod.php";
include "ChicagoPizzaFactory.php";
include "NYPizzaFactory.php";

use FactoryMethod\ChicagoPizzaFactory;
use FactoryMethod\NYPizzaFactory;

$chi_pizza_fac = new ChicagoPizzaFactory();
$ny_pizza_fac = new NYPizzaFactory();

$chi_pizza = $chi_pizza_fac->orderPizza('cheeese');
var_dump('得到芝加哥口味披萨：');
var_dump($chi_pizza->getPizzaName());

$ny_pizza = $ny_pizza_fac->orderPizza('veggie');
var_dump('得到纽约口味披萨');
var_dump($ny_pizza->getPizzaName());
