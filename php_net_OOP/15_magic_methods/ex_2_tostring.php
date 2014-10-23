<?php

// Deze magic methode laat een klasse toe te kiezen hoe die klasse reageert als
//het als een string behandeld wordt. bvb bij een echo $obj. MOET een string retourneren
//anders E_RECOVERABLE_ERROR

class TestClass {
  
  public $foo;
  
  public function __construct($foo) {
    $this->foo = $foo;
  }
  
  public function __toString() {
    return $this->foo . " this comes from toString";
  }

}

$new = new TestClass("Bert is zot");
echo $new->foo . PHP_EOL;
echo $new;
