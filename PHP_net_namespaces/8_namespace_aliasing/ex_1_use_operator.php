<?php

//Je kan externe namespaces aanspreken en 'usen' in jouw code. Vergelijk : linux
// symbolic links. Je kan klasse namen, interface namen en namespace namen importeren
//op deze manier

namespace Foo;
use My\Full\Classname as Another;

use My\Full\NSname;

use ArrayObject;

use function My\Full\functionname;

use function My\Full\functionname as func;

//PHP 5.6
use const My\Full\CONSTANT;

$obj = new namespace\Another;
$obj = new Another;
NSname\subns\func();
$a = new \ArrayObject(array(1));

echo CONSTANT;
