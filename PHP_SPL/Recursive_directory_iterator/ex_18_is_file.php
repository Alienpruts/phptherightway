<?php


//SPL heeft methodes om info over bestanden weer te geven


try {
  $rdi = new RecursiveDirectoryIterator('../Recursive_directory_iterator', FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS);
  $ti = new RecursiveIteratorIterator($rdi);
  
  while($ti->valid()) {
    if ($ti->isFile()) {
      echo $ti->current() . PHP_EOL;
    }
    
    $ti->next();
  }
}
catch (Exception $exc) {
  echo $exc->getMessage();
}












