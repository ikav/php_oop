<?php

trait getInstance {
  public static function getInstance () {
    if (self::$_instance === null) {
      self::$_instance = new self;
      echo 'Создан новый объект: '; 
    } else {
      echo '<br>Новый объект НЕ создан!!! Возвращаем ссылку на тот же объект: '; 
    }
    
    return self::$_instance;
  }
}
