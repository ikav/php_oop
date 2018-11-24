<?php

class Product {
  private $name;
  private $price;
  private $discount;

  public function __construct($name, $price, $discount = 0) {
    $this->name = $name;
    $this->price = $price;
    $this->discount = $discount;
  }
  
  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getDiscount() {
    return $this->discount;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function setPrice($price) {
    $this->price = $price;
  }

  public function setDiscount($discount) {
    $this->discount = $discount;
  }
  
  public function getProduct() {
    $product = 'Наименование: ' . $this->getName() . '<br>' . 
         'Цена: ' . $this->getPrice();
    if ($this->discount > 0) {
      $product .= '<br>' . 'Скидка: ' . $this->getDiscount() . "% <br>" .
                  'Цена со скидкой: ' . ($this->getPrice() - ($this->getPrice() * $this->getDiscount() / 100));
    }
    
    return $product;
  }

}
