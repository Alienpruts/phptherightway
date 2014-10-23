<?php

final class BaseClass {
  
  public function test() {
    echo "BaseClass::test() called" . PHP_EOL;
  }
  
  //hier maakt het niet uit of je de methode final doet, heel de klasse is het
  final public function moreTesting() {
    echo "BaseClass::moreTesting() called" . PHP_EOL;
  }
}

//zal een fout geven, een final class mag geen kinderen hebben

class ChildClass extends BaseClass {
  
}

