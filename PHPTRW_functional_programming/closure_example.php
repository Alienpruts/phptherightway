<?php

//een closure is een anonieme functie die gebruik kan maken van variabelen die niet
//in zijn scope gedefinieerd is en ZONDER globale variabelen

function criteria_greather_than($min) {
  return function($item) use ($min) {
    return $item > $min;
  };
}

$input = array(1, 2, 3, 4, 5, 6);

//array_filter() op deze input, we definieren $min rechtstreeks in de functie
$output = array_filter($input, criteria_greather_than(3));

var_dump($output);