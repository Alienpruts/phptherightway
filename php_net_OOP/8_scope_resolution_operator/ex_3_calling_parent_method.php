<?php

//Wanneer een extending class een methode van de parent overrides zal hij niet
//automatisch de parent methode oproepen. Idem voor constructors, deconstructors
//overloading en magic methods
//TIP : Netbeans zal automatisch de parent methode oproepen bij een autocomplete

class MyClass {

  protected function myFunc() {
    echo "MyClass::myFunc()" . PHP_EOL;
  }

}

class OtherClass extends MyClass {
  
  public function myFunc() {
    
    //roep de parent functie aan
    parent::myFunc();
    echo "OtherClass::myFunc()" . PHP_EOL;
  }
}

$class = new OtherClass();
$class->myFunc();
