<?php

try {
  $it = new RecursiveDirectoryIterator('../Recursive_directory_iterator');
  while ($it->valid()) {
    echo $it->getSubPathname() . $it->key() . PHP_EOL;
    
    //positie naar voor gaan
    $it->next();
  }
}
catch (Exception $ex) {
  echo $ex->getMessage();
}
