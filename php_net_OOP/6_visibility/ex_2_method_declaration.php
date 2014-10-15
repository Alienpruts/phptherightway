<?php

//ook methods kunnen public, protected of private gedeclareerd worden
//default is public

class MyClass {

  public function __construct() {
    
  }

  public function MyPublic() {
    echo "Dit is de MyPublic function " . PHP_EOL;
  }

  protected function MyProtected() {
    echo "Dit is de MyProtected function " . PHP_EOL;
  }

  private function MyPrivate() {
    echo "Dit is de MyPrivate function " . PHP_EOL;
  }

  function Foo() {

    $this->MyPublic();
    $this->MyProtected();
    $this->MyPrivate();
  }

}

$obj = new MyClass();
$obj->MyPublic(); //werkt
//$obj->MyProtected(); //Fatal error, je spreekt hem buiten de class aan
//$obj->MyPrivate(); //Fatal error, je spreekt hem buiten de class aan
$obj->Foo(); //werkt, want ze worden alledrie binnen de class aangesproken door Foo

echo "=====================================================" . PHP_EOL;

class Bar {

  public function testPublic() {
    echo "Bar::testPublic" . PHP_EOL;
  }

  private function testPrivate() {
    echo "Bar::testPrivate" . PHP_EOL;
  }

  public function test() {
    var_dump($this);
    $this->testPublic();
    $this->testPrivate();
  }

}

class Foo extends Bar {

  public function testPublic() {
    echo "Foo::testPublic" . PHP_EOL;
  }

  private function testPrivate() {
    echo "Foo::testPrivate" . PHP_EOL;
  }

}

$obj = new Foo();
$obj->test(); // toont Foo::testpublic en Bar::testPrivate

//dit komt omdat de private function in Bar aangesproken wordt
