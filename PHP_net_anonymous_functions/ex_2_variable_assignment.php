<?php

//closures kunnen geassigned worden aan een variabele

$greet = function ($name) {
  echo 'Hello ' . $name . PHP_EOL;
};

$greet('World');
$greet('PHP');



