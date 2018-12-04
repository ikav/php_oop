<?php

  // Конфиг подключения к БД
  require_once "config/config.php";
  
  // Подгружаем и активируем автозагрузчик Twig-а
  require_once 'Twig/Autoloader.php';
  Twig_Autoloader::register();
  
  try {
    
    $sql = "SELECT * FROM birds";
    $res = $db->query($sql);
    
    while ($row = $res->fetchObject()) {
      $data[] = $row;
    }
    
    unset($db);
    
    // Указывает, где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');
    // Инициализируем Twig
    $twig = new Twig_Environment($loader);
    // Подгружаем шаблон
    $template = $twig->loadTemplate('galary_new.tmpl');
    // Передаем в шаблон переменные и значения
    // Выводим сформированное содержание
    echo $template->render(array(
      'items' => $data
    ));
    
  } catch (Exception $e) {
   die('Ошибка: ' . $e->getMessage());
  }