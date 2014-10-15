<?php

//interfaces zijn extendable tov elkaar

interface a {

  public function foo();
}

interface b extends a {

  public function baz(Baz $baz);
}

//dit zal werken

class c implements b {

  public function baz(Baz $baz) {
    
  }

  public function foo() {
    print "Hellow, I am c" . PHP_EOL;
  }

}

//dit zal niet werken, omdat de signature niet correct overgenomen is in baz
/**
class d implements b {

  public function baz(Foo $foo) {
    
  }

  public function foo() {
    
  }

}
*/
$obj = new c();
$obj->foo();
    
//$obj = new d();