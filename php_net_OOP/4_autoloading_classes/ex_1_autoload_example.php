<?php

//LET OP :

//spl_autoload_register() provides a more flexible alternative for autoloading classes. 
//For this reason, using __autoload() is discouraged and may be deprecated or removed 
//in the future.

function __autoload($class_name){
  include $class_name . ".php";
}

$obj = new TestClass1();
$obj2 = new TestClass2();

var_dump($obj) . PHP_EOL;
var_dump($obj2) . PHP_EOL;


//zelfde voorbeeld maar met spl_autoload_register()
//comment deze code uit en comment __autoload 
//als er al een __autoload bestaat moet deze geregistreerd worden, zie manual
//hier doen we dat uiteraard niet
/**
function berts_autoloader($class_name) {
  include $class_name . ".php";
}

spl_autoload_register("berts_autoloader");

$obj = new TestClass1();
$obj2 = new TestClass2();

var_dump($obj) . PHP_EOL;
var_dump($obj2) . PHP_EOL;
 */