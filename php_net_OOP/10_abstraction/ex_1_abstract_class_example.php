<?php

// Abstracte klassen mogen niet geinstantieerd worden, en iedere klasse die tenminste
//1 abstracte methode heeft moet ook abstract zijn.
//abstracte methodes zijn leeg, ze definiëren geen implementatie, dat moet de overnemende
//klasse doen. Die methode moet in dezelfde (of minder restrectieve) visibility
//gedefinieerd worden. Ook de signature moet 100% hetzelfde zijn.

abstract class AbstractClass {

  abstract protected function getValue();

  abstract protected function prefixValue($prefix);

  public function printOut() {
    print $this->getValue() . PHP_EOL;
  }

}

class ConcreteClass1 extends AbstractClass {

  protected function getValue() {
    return "ConcreteClass1";
  }

  public function prefixValue($prefix) {
    return "{$prefix}ConcreteClass1";
  }

}

class ConcreteClass2 extends AbstractClass {

  public function getValue() {
    return "ConcreteClass2";
  }

  public function prefixValue($prefix) {
    return "{$prefix}ConcreteClass2";
  }

}

$class1 = new ConcreteClass1();
$class1->printOut();
echo $class1->prefixValue("FOO");

$class2 = new ConcreteClass2();
$class2->printOut();
echo $class2->prefixValue("FOO");

