<?php

//nu wordne in vorgige voorbeelden ook de directories getoond, wat we niet willen
//met dot methode kun je dit bereiken

try {
  $rdi = new RecursiveDirectoryIterator('../Recursive_directory_iterator');
  $it = new RecursiveIteratorIterator($rdi);
  while ( $it->valid()) {
    if (!$it->isDot()) {
      echo $it->key() . PHP_EOL;
    }
    
    $it->next();
  }
}
catch (Exception $ex) {
  echo $ex->getMessage();
}