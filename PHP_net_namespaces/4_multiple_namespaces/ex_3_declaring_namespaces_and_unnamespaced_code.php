<?php

//je kan (meerdere) namespaces in één file declareren samen met non-namespaced
//code, met de bracket notatie

namespace MyProject {

  const CONNECT_OK = 1;

  class Connection { /* ... */
  }

  function connect() { /* ... */
  }

}

namespace {
  session_start();
  $a = MyProject\connect();
  echo MyProject\Connection::start();
}