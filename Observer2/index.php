<?php
include 'CatObserver.php';
include 'Subject.php';
include 'DogObserver.php';

// 观察者
$catObserver = new \Observer2\CatObserver();
$dogObserver=new Observer2\DogObserver();

// 主题
$subject = new \Observer2\Subject();

// 注册观察者
$subject->attach($catObserver);
$subject->attach($dogObserver);

// 主题有所变化，观察者得到对应的变化
$subject->updData(12);
$subject->updMsg('你妈妈喊你回家吃饭');



