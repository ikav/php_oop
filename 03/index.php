<?php

  // Подгружаем и активируем автозагрузчик Twig-а
  require_once 'lib/Twig/Autoloader.php';
  Twig_Autoloader​::​register​();
  
  try {
    // Указывает, где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');
    // Инициализируем Twig
    $twig = new Twig_Environment($loader);
    // Подгружаем шаблон
    $template = $twig->loadTemplate($template);
    // Передаем в шаблон переменные и значения
    // Выводим сформированное содержание
    echo $template->render(array(
      birdPath => 'public/img/eagle-bald.jpg',
      birdName => 'Целеустремленный'
    ));
  }
  catch (Exception $e) {
   die('ERROR: ' . $e->getMessage());
  }