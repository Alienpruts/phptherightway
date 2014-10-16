<?php

//traits kunnen abstrate methodes bevatten om die methode gedwongen te laten 
//opnemen in de implementerende klasse

trait Hello {

  public function sayHelloWorld() {
    echo 'Hello' . $this->getWorld();
  }

  abstract public function getWorld();
}

class MyHelloWorld {

  private $world;

  use Hello;

  public function getWorld() {
    return $this->world;
  }

  public function setWorld($val) {
    $this->world = $val;
  }

}
