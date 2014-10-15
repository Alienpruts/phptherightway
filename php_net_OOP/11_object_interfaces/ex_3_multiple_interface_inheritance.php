<?php

//Een interface kan van meerdere interfaces een child worden

interface a {

  public function foo();
}

interface b {

  public function bar();
}

interface c extends a, b {

  public function baz();
}

class d implements c {
  
  public function bar() {
    
  }

  public function baz() {
    
  }

  public function foo() {
    
  }

}
