<?php

//Deze STATISCHE methode wordt aangeroepen door een var_export() van een klasse

class A {
  public $var1;
  public $var2;
  
  public function __set_state($array) {
    echo "Test" . PHP_EOL;
    $obj = new A();
    $obj->var1 = $array['var1'];
    $obj->var2 = $array['var2'];
    return $obj;
  }
}

$a = new A();
$a->var1 = 5;
$a->var2 = 'foo';

//dit levert $b = A::__set_state($array(
//                'var1' => 5,
//                'var2' => 'foo'
eval('$b = ' . var_export($a, TRUE) . ";");

var_dump($b);
