<?php

  $items = array (
      array ('birdPath' => 'public/img/eagle-bald.jpg', 'birdName' => 'Целеустремленный'),
      array ('birdPath' => 'public/img/eagle-eyes.jpg', 'birdName' => 'Глаза орла'),
      array ('birdPath' => 'public/img/owl.jpg', 'birdName' => 'Совушка'),
      array ('birdPath' => 'public/img/marsh-harrier.jpg', 'birdName' => 'Болотный лунь'),
      array ('birdPath' => 'public/img/falcon.jpg', 'birdName' => 'Сокол')
  );
  
  // Подгружаем и активируем автозагрузчик Twig-а
  require_once 'Twig/Autoloader.php';
  Twig_Autoloader::register();
  
  
  try {
    // Указывает, где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');
    // Инициализируем Twig
    $twig = new Twig_Environment($loader);
    // Подгружаем шаблон
    $template = $twig->loadTemplate('galary.tmpl');
    // Передаем в шаблон переменные и значения
    // Выводим сформированное содержание
    echo $template->render(array(
      'items' => $items
    ));
    
  }
  catch (Exception $e) {
   die('ERROR: ' . $e->getMessage());
  }