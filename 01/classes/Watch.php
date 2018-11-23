<?php

class Watch extends Product {
  private $accuracy;
  private $gender;
  
  function __construct($accuracy, $gender, $name, $price, $discount=0) {
    parent::__construct($name, $price, $discount);
    $this->accuracy = $accuracy;
    $this->gender = $gender;
  }
  
  function getAccuracy() {
    return $this->accuracy;
  }

  function getGender() {
    return $this->gender;
  }

  function setAccuracy($accuracy) {
    $this->accuracy = $accuracy;
  }

  function setGender($gender) {
    $this->gender = $gender;
  }
  
}
