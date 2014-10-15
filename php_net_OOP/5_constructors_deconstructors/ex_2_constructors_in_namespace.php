<?php

namespace Foo;

//methodes met dezelfde naam van een klasse in een namespace worden vanaf
//PHP 5.3.3 gezien als gewone methode, anders als constructor

class Bar {
  public function Bar() {
    //PHP 5.3.2 == constructor
    //PHP 5.3.3 + == gewone method
  }
}