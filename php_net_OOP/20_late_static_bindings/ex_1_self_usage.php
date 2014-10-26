<?php

//Late static binding is een feature waarin een klasse gereferenced kan worden in
//een context van static inheritance.

class A {
  public static function who() {
    echo __CLASS__;
  }
  
  public static function test() {
    self::who();
  }
}

class B extends A {
  public static function who() {
    echo __CLASS__;
  }
}

//geeft A, terwijl je zou verwachten dat het B is. Dit komt door inheritence
//in vb 2 wordt getoond hoe je dit kan omzeilen.
B::test();
