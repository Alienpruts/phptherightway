<?php

class Foo {

  public static function staticMethod() {
    echo "This is a static method";
  }

}

Foo::staticMethod();

$foo = new Foo(); //werkt zowieso
$foo->staticMethod(); // werkt ook, enkel met static methods kun je die aanspreken met instantie
