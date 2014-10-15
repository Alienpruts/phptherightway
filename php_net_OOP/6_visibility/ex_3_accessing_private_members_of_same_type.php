<?php

// objecten van hetzelfde type hebben toegang to elkaars private en protected
//members.
class Test {
  
  private $foo;
  
  public function __construct($foo) {
    
    $this->foo = $foo;
  }
  
  private function bar() {
    echo "Accessed the private method" . PHP_EOL;
  }
  
  //functie baz accepteert object van type Test
  public function baz (Test $other) {
    
    //we kunnen de private property wijzigen
    $other->foo = "Hello";
    var_dump($other->foo);
  }
}

$test = new Test("test");
$test->baz(new Test ("other"));