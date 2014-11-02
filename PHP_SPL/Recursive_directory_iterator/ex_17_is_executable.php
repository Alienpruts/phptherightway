<?php


//SPL heeft methodes om info over bestanden weer te geven


try {
  $rdi = new RecursiveDirectoryIterator('../Recursive_directory_iterator', FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS);
  $ti = new RecursiveIteratorIterator($rdi);
  
  while($ti->valid()) {
    if (!$ti->isDir()) {
      if ($ti->isExecutable()) {
        echo $ti->current() . ' is executable' . PHP_EOL;
      } else {
        echo $ti->current() . ' is not executable' . PHP_EOL;
      }
    }
    
    $ti->next();
  }
}
catch (Exception $exc) {
  echo $exc->getMessage();
}












