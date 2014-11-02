<?php


//rewind 'spoelt' terug naar het begin van de iteratie


try {
  $rdi = new RecursiveDirectoryIterator('../Recursive_directory_iterator', FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS);
  $ti = new RecursiveIteratorIterator($rdi);
  
  while($ti->valid()) {
    if ($ti->isFile()) {
      echo $ti->__toString() . PHP_EOL;
    }
    
    $ti->next();
  }
  
  $ti->rewind();
  echo "====================" . PHP_EOL;
  echo 'After rewind : ' . PHP_EOL;
  echo $ti->__toString() . PHP_EOL;
}
catch (Exception $exc) {
  echo $exc->getMessage();
}


















