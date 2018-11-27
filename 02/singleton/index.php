<?php

require_once 'classes/Singleton.php';

$obj = Singleton::getInstance();
var_dump($obj);
$obj2 = Singleton::getInstance();
var_dump($obj2);
$obj3 = Singleton::getInstance();
var_dump($obj3);


