<?php

//Een klasse kan een method van een trait een andere visibility geven als hij
//die method implementeert, al dan niet als een kopij

trait HelloWorld {

  public function sayHello() {
    echo 'Hello World!';
  }

}

// Change visibility of sayHello
class MyClass1 {

  use HelloWorld {
    sayHello as protected;
  }
}

// Alias method with changed visibility
// sayHello visibility not changed
class MyClass2 {

  use HelloWorld {
    sayHello as private myPrivateHello;
  }
}
