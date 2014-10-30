<?php

//alternatieve syntax voor meerdere namespaces in 1 file
//het blijft afgeraden meerdere namespaces in 1 file te doen

namespace MyProject {

  const CONNECT_OK = 1;

  class Connection { /* ... */
  }

  function connect() { /* ... */
  }

}

namespace AnotherProject {

  const CONNECT_OK = 1;

  class Connection { /* ... */
  }

  function connect() { /* ... */
  }

}
