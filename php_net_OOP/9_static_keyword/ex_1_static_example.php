<?php

//Een property als static declareren = maak deze propertie beschikbaar zelfs al
//is er geen instantie van de betreffende klasse. Sterker nog : een static property
//kan NIET benaderd worden door een instantie van die klasse (maar een method wel)

class Foo {

  public static $static = "Foo";

  public function staticValue() {
    return self::$static;
  }

}

class Bar extends Foo {

  public function fooStatic() {
    return parent::$static;
  }

}

print Foo::$static . PHP_EOL;

$foo = new Foo();

print $foo->staticValue() . PHP_EOL;
print $foo->static . PHP_EOL; // zal niet werken
print $foo::$static . PHP_EOL;

print Bar::$static . PHP_EOL;
$bar = new Bar();
print $bar->fooStatic() . PHP_EOL;
