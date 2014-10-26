<?php

//Een referentie in PHP is een alias, waardoor twee verschillende variabelen kunnen
//ontstaan. Een object variabele heeft niet het object zelf als value, enkel een
//identifier van dit object. Wanneer van een object dus een alias gemaakt wordt, 
//zijn het origineel en de kopij geen aliases, ze hebben elk een kopij van de identifier
//die naar hetzelfde object verwijst

class A {
  public $foo = 1;
}

$a = new A();
$b = $a;

$b->foo = 2;
echo $a->foo . PHP_EOL;

$c = new A();
$d = &$c;

$d->foo = 2;
echo $c->foo . PHP_EOL;

$e = new A();

function foo($obj) {
  $obj->foo = 2;
}

foo($e);
echo $e->foo . PHP_EOL;

