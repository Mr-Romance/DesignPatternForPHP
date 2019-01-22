<?php
include("Fly.php");
include("MyDuck.php");
include("FlyWithRocket.php");
include("FlyWithWinds.php");
include("YellowDuck.php");
use Strategy\FlyWithRocket;
use Strategy\YellowDuck;
use Strategy\FlyWithWinds;

// 初始化时，用翅膀飞行
$yellow_duck=new YellowDuck(new FlyWithWinds());
$yellow_duck->doFly();

// 改成用火箭飞
$yellow_duck->setFly(new FlyWithRocket());
$yellow_duck->doFly();


