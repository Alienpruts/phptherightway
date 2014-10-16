<?php

//Indien er een conflict optreedt tussen meerdere traits waar er dezelfde methodes
//in voorkomen, dient dit conflict specifiek in de code opgelost te worden

trait A {

  public function smallTalk() {
    echo 'a';
  }

  public function bigTalk() {
    echo 'A';
  }

}

trait B {

  public function smallTalk() {
    echo 'b';
  }

  public function bigTalk() {
    echo 'B';
  }

}

class Talker {

  use A,
      B {
    B::smallTalk insteadof A;
    A::bigTalk insteadof B;
  }
}

class Aliased_Talker {

  use A,
      B {
    B::smallTalk insteadof A;
    A::bigTalk insteadof B;
    B::bigTalk as talk;
  }
}

$obj = new Talker();
$obj->smallTalk();
$obj->bigTalk();

echo "======================" . PHP_EOL;

$obj = new Aliased_Talker();
$obj->smallTalk();
$obj->bigTalk();
