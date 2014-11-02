<?php

//je kan altijd filter's toevoegen, maar het is simpeler om een filteriterator
//te gebruiken

class PHProFilter extends FilterIterator {
  //creer een instantie van de locater iterator
  
  public function __construct(RecursiveIteratorIterator $iterator) {
    parent::__construct($iterator);
    $this->rewind();
  }
  
  //filter om alleen .php files te tonen
  public function accept() {
    $file = $this->getInnerIterator()->current();
    
    //filter alles eruit wat geen file is
    if (!$file->isFile()) {
      return FALSE;
    }
    
    //als het geen PHP bestand is, skip
    if ($file->getBasename('.php') == $file->getBasename()) {
      return FALSE;
    }
    
    return TRUE;
  }
}

try {
  $rdi = new RecursiveDirectoryIterator('../Recursive_directory_iterator');
  $rii = new RecursiveIteratorIterator($rdi);
  $it = new PHProFilter($rii);
  
  while($it->valid()) {
    if($it->isFile()) {
      echo $it->getRealPath() . PHP_EOL;
    }
    
    $it->next();
  }
}
catch (Exception $exc) {
  echo $exc->getTraceAsString();
}


