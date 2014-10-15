<?php

class MyDestructibleClass {
  function __construct() {
    print "In constructor" . PHP_EOL;
    $this->name = "MyDestructableClass";
  }
  
  function __destruct() {
    print "Destroying " . $this->name . PHP_EOL;
  }
}

$obj = new MyDestructibleClass();