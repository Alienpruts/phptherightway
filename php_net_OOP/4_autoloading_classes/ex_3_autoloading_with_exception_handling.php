<?php

//we proberen een try - catch block met exception handling
/**
  function __autoload($name) {
  echo "I want to load $name" . PHP_EOL;
  throw new Exception("Unable to load $name");
  }

  try {
  $obj = new DitBestaatNiet();
  } catch (Exception $ex) {
  echo $ex->getMessage() . PHP_EOL;
  }
 * */
//idem, maar met spl_autoload_register

function BertsAutoloader($name) {
  echo "Bert's autoloader probeert $name te laden." . PHP_EOL;
  throw new Exception("Bert kan $name niet vinden");
}

spl_autoload_register("BertsAutoloader");

try {
  $obj = new DitBestaatNiet();
}
catch (Exception $ex) {
  echo $ex->getMessage() . PHP_EOL;
}