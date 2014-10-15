<?php

class MyClass {
  
  const CONST_VALUE = "a constant value";
}

//vanaf PHP 5.3 kun je variabelen gebruiken als classname
$classname = "MyClass";
echo $classname::CONST_VALUE . PHP_EOL;

echo "==============================================" . PHP_EOL;

echo MyClass::CONST_VALUE;
