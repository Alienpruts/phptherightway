<?php

//geeft uncaught exceptionerror
//$it = new RecursiveDirectoryIterator('/bogus');

//als er exceptions gethrowed worden best altijd met een try-catch blok werken
try {
  $it = new RecursiveDirectoryIterator('/bogus');
}
catch (Exception $ex) {
  echo $ex->getMessage();
}
