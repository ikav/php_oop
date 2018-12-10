<?php
require_once 'autoload.php';

try{
    App::init();
}
catch (PDOException $e){
    echo "Не могу подключиться к базе данных!";
    var_dump($e->getTrace());
}
catch (Exception $e){
    echo $e->getMessage();
}
