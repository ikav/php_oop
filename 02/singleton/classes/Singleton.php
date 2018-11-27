<?php

require_once 'traits/getInstance.php';

class Singleton {
  
  protected static $_instance;
  
  private function __construct() {}
  
  use getInstance;
  
  private function __clone() { }
  private function __wakeup() { }
  
}

