<?php

//In een niet static context zal de aangeroepen klasse de klasse zijn van het object

class A {
  
  private function foo() {
    echo "Success" . PHP_EOL;
  }
  
  public function test() {
    $this->foo();
    static::foo();
  }
}

class B extends A {
  //foo() wordt overgeverfd van A, dus de call zal succesvol zijn
}

class C extends A {
  private function foo() {
    //de originele methode wordt overridden, de scope zal dus C zijn
  }
}

$b = new B();
$b->test();
$c = new C();
//dit zal falen.
$c->test();