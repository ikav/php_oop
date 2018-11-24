<?php

require_once 'classes/Product.php';
require_once 'classes/Watch.php';

$myWatch = new Watch(0.01, 'female and male', 'Tissot', 1000, 10);
echo $myWatch->getProduct();
