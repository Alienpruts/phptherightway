<?php

require_once 'ex_1_simple_class_definition.php';

class ExtendClass extends SimpleClass {
  
  //herdefinieer parent methode
  function displayYar() {
    echo "Extending class" . PHP_EOL;
    parent::displayYar();
  }
}

$extended = new ExtendClass();
$extended->displayYar();
