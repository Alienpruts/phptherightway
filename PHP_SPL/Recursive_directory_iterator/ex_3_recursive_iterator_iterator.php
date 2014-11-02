<?php

// In voorbeeld 2 is de iterator niet in de subdirectory gegaan. Daarvoor heb je
//nog een recursiveIteratorIterator nodig (what's in a name)

try {
  $rdi = new RecursiveDirectoryIterator('../Recursive_directory_iterator');
  $it = new RecursiveIteratorIterator($rdi);
  while ( $it->valid()) {
    echo $it->getSubPathName() . $it->key() . PHP_EOL;
    
    $it->next();
  }
}
catch (Exception $ex) {
  echo $ex->getMessage();
}
