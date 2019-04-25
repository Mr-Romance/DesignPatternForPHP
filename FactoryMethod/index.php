<?php
include 'Pizza.php';
include 'PizzaFactory.php';
include 'BBkFactorySH.php';
include 'PizzaNYStyle.php';
include 'PizzaShangHai.php';

use FactoryMethod\BBkFactorySH;

$bbk_sh = new BBkFactorySH();

$bbk_sh->orderPizza('shang_hai');