<?php

  $items = array (
      'public/img/eagle-bald.jpg',
      'public/img/eagle-eyes.jpg',
      'public/img/owl.jpg',
      'public/img/marsh-harrier.jpg',
      'public/img/falcon.jpg'
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
//    echo $template->render(array(
//      birdPath => 'public/img/eagle-bald.jpg',
//      birdName => 'Целеустремленный'
//    ));
    echo $template->render(array(
      'items' => $items
    ));
    
  }
  catch (Exception $e) {
   die('ERROR: ' . $e->getMessage());
  }