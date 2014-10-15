<?php

class A {

  function foo() {

    if (isset($this)) {
      echo "\$this is defined (";
      echo get_class($this);
      echo ")" . PHP_EOL;
    }
    else {
      echo "\$this is not defined!" . PHP_EOL;
    }
  }

}

class B {

  function bar() {

    //zal een warning opleveren met E_STRICT
    A::foo();
  }

}

$a = new A();
$a->foo();

//zal een warning geven met E_STRICT
A::foo();
$b = new B();
$b->bar();

//zal een warning geven met E_STRICT
B::bar();
