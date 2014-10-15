<?php

//visibility : in welke mate mag een method of property gebruikt worden?
// PUBLIC : vrij beschikbaar , ieder object kan dit aanspreken
// PROTECTED : enkel objecten van zelfde class en extended classes
// PRIVATE : enkel dezelfde class die hem definieert mag hem gebruiken

class MyClass {

  public $public = "Public";
  protected $protected = "Protected";
  private $private = "Private";

  public function printHello() {
    echo $this->public . PHP_EOL;
    echo $this->protected . PHP_EOL;
    echo $this->private . PHP_EOL;
  }

}

class MyClass2 extends MyClass {

  protected $protected = "Protected 2";

  function printHello() {

    echo $this->public . PHP_EOL;
    echo $this->protected . PHP_EOL;
    echo $this->private . PHP_EOL;
  }

}

$obj = new MyClass();
echo $obj->public . PHP_EOL; //werkt
//echo $obj->protected; //Fatal error
//echo $obj->private; //fatal error

$obj->printHello(); //werkt, omdat zowel public, private als proteced in orde is
echo " ================================================" . PHP_EOL;


$obj2 = new MyClass2();
echo $obj2->public . PHP_EOL; //werkt
//echo $obj2->protected; //Fatal error
echo $obj2->private; //undefined

$obj2->printHello(); //public en protected2 werken, private niet (werkt enkel in Myclass)
