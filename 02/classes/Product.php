<?php

abstract class Product 
{
  private $name;
  private $price;
  private $num;

//  private static $profit = 0;

  public function __construct($name, $price, $num) {
    $this->name = $name;
    $this->price = $price;
    $this->num = $num;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function setPrice($price) {
    $this->price = $price;
  }
  
  public function getNum() {
    return $this->num;
  }

  public function setNum($num) {
    $this->num = $num;
  }
    
  public abstract function getTotalCost();
  
  public abstract function getType();
  
  public abstract function getSalePrice();
          
  public abstract function getProfit();

}
