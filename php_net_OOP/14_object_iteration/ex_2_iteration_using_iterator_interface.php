<?php

// The Iterator interface kan geimplementeerd worden. Dit geeft de klasse veel meer
//'vrijheid' om te dicteren hoe alles getoond zal worden

class MyIterator implements Iterator {

  private $var = array();

  public function __construct($array) {
    if (is_array($array)) {
      $this->var = $array;
    }
  }

  public function current() {
    $var = current($this->var);
    echo "Current : $var" . PHP_EOL;
    return $var;
  }

  public function key() {
    $var = key($this->var);
    echo "key : $var " . PHP_EOL;
    return $var;
  }

  public function next() {
    $var = next($this->var);
    echo "Next : $var " . PHP_EOL;
    return $var;
  }

  public function rewind() {
    echo "Rewinding !" . PHP_EOL;
    reset($this->var);
    
  }

  public function valid() {
    $key = key($this->var);
    $var = ($key !== NULL && $key !== FALSE);
    echo "Valid : $var " . PHP_EOL;
    return $var;
}
  }

  //we maken een nieuwe instantie met een zelfgekozen array met values
$values = array(1, 2, 3);
$it = new MyIterator($values);

//itereer met een foreach loop, daardoor gaan we de iterator aanspreken
foreach ($it as $a => $b) {
  print "$a : $b " . PHP_EOL;
}
