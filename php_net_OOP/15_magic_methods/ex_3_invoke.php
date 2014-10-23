<?php

//__invoke() wordt aangeroepen als een object als een functie aangeroepen wordt

Class CallableClass {
  public function __invoke($x) {
    echo "Dit is __invoke speaking" . PHP_EOL;
    var_dump($x);
  }
}

$obj = new CallableClass();
$obj(5);
var_dump(is_callable($obj));