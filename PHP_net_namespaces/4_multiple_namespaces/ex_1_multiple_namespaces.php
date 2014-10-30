<?php

//meerdere namespaces kunnen in 1 file gedeclareerd worden. Deze manier is niet
//aangeraden voor de leesbaarheid

namespace MyProject;

const CONNECT_OK = 1;

class Connection { /* ... */
}

function connect() { /* ... */
}

namespace AnotherProject;

const CONNECT_OK = 1;

class Connection { /* ... */
}

function connect() { /* ... */
}
