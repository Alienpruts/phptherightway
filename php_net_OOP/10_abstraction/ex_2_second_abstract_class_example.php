<?php

abstract Class AbstractClass {

  abstract protected function prefixName($name);
}

class ConcreteClass extends AbstractClass {

  //de child klasse mag extra argumenten hebben, maar moet tenminste hetgeen in 
  //de abstract klasse staat implementeren.
  public function prefixName($name, $separator = ".") {
    if ($name == "Pacman") {
      $prefix = "Mr";
    }
    elseif ($name == "Pacwoman") {
      $prefix = "Mrs";
    }
    else {
      $prefix = "";
    }
    return "{$prefix}{$separator} {$name}";
    
  }

}

$class = new ConcreteClass();
echo $class->prefixName("Pacman") . PHP_EOL;
echo $class->prefixName("Pacwoman", "|");
