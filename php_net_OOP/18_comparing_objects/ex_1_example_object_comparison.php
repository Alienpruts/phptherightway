<?php

//Twee objecten kunnen vergeleken worden met elkaar op dezelfde manier als bij 
//variabelen : comparison operator (==) en indentity operator (===)
// == : zijn gelijk als beide objecten dezelfde properties en methodes hebben EN ze
//instanties van hetzelfde type zijn
// === : zijn gelijk als, en enkel als, ze een instantie van dezelfde klasse zijn

function bool2str($bool) {

  if ($bool === FALSE) {
    return 'FALSE';
  }
  else {
    return 'TRUE';
  }
}

function compareObjects(&$o1, &$o2) {
  
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . PHP_EOL;
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . PHP_EOL;
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . PHP_EOL;
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . PHP_EOL;
}

class Flag {
  public $flag;
  
  function Flag($flag = TRUE) {
    $this->flag = $flag;
  }
}

class OtherFlag {
  
  public $flag;
  
  function OtherFlag($flag = TRUE) {
    $this->flag = $flag;
  }
}

$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();

echo "Twee instanties van dezelfde klasse ( Flag en Flag)" . PHP_EOL;
compareObjects($o, $p);

echo PHP_EOL . "Twee referenties naar dezelfde instantie ( Flag en kopij van Flag )" . PHP_EOL;
compareObjects($o, $q);

echo PHP_EOL . "Instanties van twee verschillende klasses ( Flag en OtherFlag )" . PHP_EOL;
compareObjects($o, $r);
