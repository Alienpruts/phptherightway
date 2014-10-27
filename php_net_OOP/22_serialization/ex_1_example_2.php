<?php

//dmv functie serialize() krijg je een string met een byte-size representation van
//een variable (hier een object). Serializen saved niet de methods van een klasse
//enkel de variabelen in een object.
//Om te unserializen() moet je eerst een klassedefinitie van dat object ingeladen
//hebben (via bvb require)


include './classa.inc';

$s = file_get_contents('store');
$a = unserialize($s);

echo "Unserialized A " . PHP_EOL;
$a->show_one();

