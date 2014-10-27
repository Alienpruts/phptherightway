<?php

//dmv functie serialize() krijg je een string met een byte-size representation van
//een variable (hier een object). Serializen saved niet de methods van een klasse
//enkel de variabelen in een object.
//Om te unserializen() moet je eerst een klassedefinitie van dat object ingeladen
//hebben (via bvb require)

include './classa.inc';

$a = new A();
$s = serialize($a);
file_put_contents('store', $s);

echo "Serialized A" . PHP_EOL;




