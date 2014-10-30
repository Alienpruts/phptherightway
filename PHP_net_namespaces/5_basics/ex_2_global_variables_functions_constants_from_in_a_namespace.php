<?php

namespace Foo;

//we declareren hier functies in de namespace Foo waarvan we weten dat ze standaard
//php functies zijn. Hiermee tonen we aan dat we globale functies kunnen aanroepen
//als we de \ notatie gebruiken (de globale namespace)
function strlen(){}

const INI_ALL = 3;
class Exception {}

$a = \strlen('hi'); // geeft 2 terwijl je niets zou verwachten
$b = \INI_ALL; // geeft 7 terwijl je 3 zou verwachten
$c = new \Exception('error');

var_dump($a);
var_dump($b);
var_dump($c);

