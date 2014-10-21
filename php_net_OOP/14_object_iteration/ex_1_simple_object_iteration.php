<?php

//php voorziet in iteratie voor objecten. Buiten de klasse gaan alleen visible properties
//beschikbaar zijn voor iteratie, in een klasse zal alles beschikbaar zijn.

class MyClass {

  public $var1 = "value 1";
  public $var2 = "value 2";
  public $var3 = "value 3";
  protected $protected = "protected var";
  private $private = "private var";

  function iterateVisible() {

    echo "MyClass::iterateVisible()" . PHP_EOL;

    foreach ($this as $key => $value) {
      print "$key => $value" . PHP_EOL;
    }
  }

}

$class = new MyClass();

foreach ($class as $key => $value) {
  print "$key => $value" . PHP_EOL;
}

echo "========================================" . PHP_EOL;

$class ->iterateVisible();
