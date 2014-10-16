<?php

//een methode van een trait die geimplementeerd wordt in een classe heeft voorrang
//op een eventueel dezelfde methode in de klasse zelf.

class Base {

  public function sayHello() {
    echo 'Hello ';
  }

}

trait SayWorld {

  public function sayHello() {
    parent::sayHello();
    echo 'World!';
  }

}

class MyHelloWorld extends Base {

  use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

echo PHP_EOL . "=============================" . PHP_EOL;

trait HelloWorld {

  public function sayHello() {
    echo 'Hello World!';
  }

}

class TheWorldIsNotEnough {

  use HelloWorld;

  public function sayHello() {
    echo 'Hello Universe!';
  }

}

$o = new TheWorldIsNotEnough();
$o->sayHello();
