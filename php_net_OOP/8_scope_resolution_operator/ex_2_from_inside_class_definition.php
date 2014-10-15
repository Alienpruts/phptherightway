<?php

//Drie speciale keywords bij scope resolution :
// self = zoek in de betreffende klasse
// parent = zoek in de parent klasse indien inherited
// static = statische var, enkel en alleen in deze klasse

require_once 'ex_1_from_outside_class_definition.php';

class OtherClass extends MyClass {
  
  public static $static = "static var";
  
  public static function doubleColon() {
    echo parent::CONST_VALUE . PHP_EOL;
    echo self::$static . PHP_EOL;
  }
}

$classname = "OtherClass";
echo $classname::doubleColon();

OtherClass::doubleColon();