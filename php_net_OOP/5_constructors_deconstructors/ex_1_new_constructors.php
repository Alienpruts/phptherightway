<?php

class BaseClass {
  
  function __construct() {
    print "In BaseClass constructor" . PHP_EOL;
  }
}

class SubClass extends BaseClass {
  function __construct() {
    parent::__construct();
    print "In Subclass constructor" . PHP_EOL;
  }
}

class OtherSubClass extends BaseClass {
  //deze inherits BaseClass z'n constructor
}

$obj = new BaseClass();
$obj = new SubClass();
$obj = new OtherSubClass();