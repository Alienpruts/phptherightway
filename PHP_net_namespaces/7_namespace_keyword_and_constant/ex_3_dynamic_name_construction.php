<?php

//je kan __NAMESPACE__ gebruiken om dynamisch namen toe te kennen.

namespace MyProject;

//dit is een voorbeeld van een rudimentaire autoloader
function get($classname) {
  $a = __NAMESPACE__ . '\\' . $classname;
  return new $a;
}