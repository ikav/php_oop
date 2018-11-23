<?php

require_once 'classes/Product.php';
require_once 'classes/Watch.php';

$myWatch = new Watch(0.01, 'male', 'Tissot', 1000, 0);
echo $myWatch->getProduct();
