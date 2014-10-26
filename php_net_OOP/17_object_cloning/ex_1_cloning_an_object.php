<?php

//een object wordt gecloned door z'n __clone() magic method. Deze magic method
//kan niet direct aangeroepen worden, enkel via keyword clone



class SubObject {
  static $instances = 0;
  public $instance;
  
  public function __construct() {
    $this->instance = ++self::$instances;
  }
  
  public function __clone() {
    $this->instance = ++self::$instances;
  }
}

class MyCloneable {
  public $object1;
  public $object2;
  
  function __clone() {
    //forceer een kopij van dit object
    $this->object1 = clone $this->object1;
  }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

print ("Original object : ") . PHP_EOL;
var_dump($obj);

print ("Cloned object : ") . PHP_EOL;
var_dump($obj2);