<?php

require_once './ex_2_iteration_using_iterator_interface.php';

// Je kan ook gebruik maken van Iteratoraggregate interface. Die interface dicteert
//enkel het gebruik van één methode (getIterator), die een instantie moet retourneren
//van een klasse die een Iterator interface implemeneteert

class MyCollection implements IteratorAggregate {

  private $items = array();
  private $count = 0;

  public function getIterator() {
    return new MyIterator($this->items);
  }

  public function add($value) {
    $this->items[$this->count++] = $value;
  }

}

$coll = new MyCollection();
$coll->add("value 1");
$coll->add("Value 2");
$coll->add("Value 3");

foreach ($coll as $key => $value) {
  echo "key/value : $key / $value " . PHP_EOL;
}
