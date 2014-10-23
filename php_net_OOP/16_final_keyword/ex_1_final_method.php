<?php

//methodes/properties die als final gedeclareerd worden mogen niet overridden worden
//door een childklasse

class BaseClass {
  public function test() {
    echo "BaseClass::test() called" . PHP_EOL;
  }
  
  final public function moreTesting() {
    echo "BaseClass::moreTesting() called" . PHP_EOL;
  }
}

//zal een error geven
class ChildClass extends BaseClass {
  public function moreTesting() {
    echo "ChilcClass::moreTesting() called" . PHP_EOL;
  }
}

