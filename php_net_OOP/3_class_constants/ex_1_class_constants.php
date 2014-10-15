<?php

class MyClass {
  
  const CONSTANT = "constant value";
  
  public function showConstant() {
    echo self::CONSTANT;
  }
}

//4 manieren om een class Constante te tonen

//rechtstreeks
echo Myclass::CONSTANT . PHP_EOL;

//via variabelenaam
$classname = "MyClass";
echo $classname::CONSTANT . PHP_EOL;

//via methode
$class = new MyClass();
$class->showConstant();

//sinds PHP 5.3 : via instantie
echo $class::CONSTANT;
