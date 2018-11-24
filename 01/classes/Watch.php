<?php

class Watch extends Product {
  private $accuracy;
  private $gender;
  
  public function __construct($accuracy, $gender, $name, $price, $discount=0) {
    parent::__construct($name, $price, $discount);
    $this->accuracy = $accuracy;
    $this->gender = $gender;
  }
  
  public function getAccuracy() {
    return $this->accuracy;
  }

  public function getGender() {
    if ($this->gender === 'male' || $this->gender === 'man'){
      $myGender = 'мужчин';
    } elseif (($this->gender === 'female' || $this->gender === 'woman')) {
      $myGender = 'женщин';
    } else {
      $myGender = 'мужчин или женщин';
    }
    return $myGender;
  }

  public function setAccuracy($accuracy) {
    $this->accuracy = $accuracy;
  }

  public function setGender($gender) {
    $this->gender = $gender;
  }
  
  public function getProduct() {
    $product = parent::getProduct();
    $product .= '<br>' . 'Точность хода: ' . $this->getAccuracy() . 
                '<br>' . 'Прекрасные выбор для ' . $this->getGender();
    
    return $product;
  }
  
}
