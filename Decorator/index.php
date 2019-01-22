<?php
$arr2=[
    'name'=>'bob',
    'age'=>'20'
];

$arr=[
    'names'=>[
        'tom','jake'
    ],
    'ages'=>[
        10
    ]
];

$res_arr=[];
foreach($arr as $key=>&$value){
    $value=implode(',',$value);
    $res_arr[]=$key.":".$value;
}

var_dump(implode(';',$res_arr));exit;

var_dump(implode(',',$arr2));
var_dump(array_values($arr));
exit;

include 'Beverage.php';
include 'CondimentDecorator.php';
include 'DarkRoast.php';
include 'MaoShi.php';
include 'Milk.php';

use Decorator\DarkRoast;
use Decorator\Milk;
use Decorator\MaoShi;

// 客户点单:深度烘焙的猫屎咖啡，哦，再加一份牛奶
$darkRoast = new DarkRoast();

// 用猫屎装饰它
$beverage_with_maoshi = new MaoShi($darkRoast);

// 再用牛奶装饰它
$coffee_done = new Milk($beverage_with_maoshi);

var_dump('点单：' . $coffee_done->getDescription());
var_dump('总价格：￥' . $coffee_done->cost());
