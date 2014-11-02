<?php

//Isdir methode retourneert true als de huidige iteratie een directory is. Zo kunnen
//we directories filteren

try {
  $rdi = new RecursiveDirectoryIterator('../Recursive_directory_iterator');
  $it = new RecursiveIteratorIterator($rdi);
  while ($it->valid()) {
    if( $it->isDir()){
      echo $it->key() . PHP_EOL;
    }
    
    $it->next();
  }
}
catch (Exception $exc) {
  echo $exc->getMessage();
}

