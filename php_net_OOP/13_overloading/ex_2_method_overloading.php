<?php

//ook voor methods bestaan er overloading methodes

/*
__call() is triggered when invoking inaccessible methods in an object context.

__callStatic() is triggered when invoking inaccessible methods in a static context. 
 */

class MethodTest {
  
  public function __call($name, $arguments) {
    echo "Calling object method $name" . implode(", ", $arguments) . PHP_EOL;
  }
  
  public function __callStatic($name, $arguments) {
    echo "Calling static method $name" . implode(", ", $arguments) . PHP_EOL;
  }
}

$obj = new MethodTest();
$obj->runTest('in object context');

MethodTest::runTest('in static context');