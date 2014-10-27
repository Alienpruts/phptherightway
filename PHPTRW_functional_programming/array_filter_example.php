<?php

//Het gebruik van functioneel programmeren wordt vooral gedemonstreerd door 
//anonymous functions, zoals hier bvb het gebruik van array_filter()

$input = array(1, 2, 3, 4, 5);
//creert een anonieme functie and zet het in een var

$filter_even = function($item) {
  return ($item % 2) == 0;
};

//array_filter functie accepteert data en de functie
$output1= array_filter($input, $filter_even);

//functie moet eigenlijk niet echt aan een var geassigned zijn, je kan dit ook in
//één regel gooien

$output2 = array_filter($input, function($item) {
  return ($item % 2) == 0;
});

var_dump($output1);
var_dump($output2);
