<?php

//traits kunnen ook statische variabelen, methodes en properties bevatten

trait Counter {

  public function inc() {
    static $c = 0;
    $c = $c + 1;
    echo "$c\n";
  }

}

class C1 {

  use Counter;
}

class C2 {

  use Counter;
}

$o = new C1();
$o->inc(); // echo 1
$p = new C2();
$p->inc(); // echo 1

trait StaticExample {

  public static function doSomething() {
    return 'Doing something';
  }

}

class Example {

  use StaticExample;
}

print Example::doSomething() . PHP_EOL;


trait PropertiesTrait {
    public $x = 1;
}

class PropertiesExample {
    use PropertiesTrait;
}

$example = new PropertiesExample;
print $example->x;