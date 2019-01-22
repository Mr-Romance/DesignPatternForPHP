<?php

include '';

$indexObserver=new IndexObserver();
$res=$indexObserver->listenSubject();
var_dump($res);

