<?php

//Functions kunnen declareren dat hun parameters van één bepaald object dienen
//te zijn, alsook van één bepaald interface, array of callable.
//Als er één bepaalde klasse getypehinted is kunnen ook children of implementations
//(van interfaces dan) gebruikt worden als dat argument

class MyClass {

  public function test(OtherClass $otherclass) {
    echo $otherclass->var;
  }

  public function test_array(array $input) {
    var_dump($input);
  }

  public function test_interface(Traversable $iterator) {
    echo get_class($iterator);
  }

  public function test_callable(callable $callback, $data) {
    call_user_func($callback, $data);
  }

}

class OtherClass {

  public $var = "Hello World";

}

$myclass = new MyClass();
$otherclass = new OtherClass();

//Fatal error, argument moet object van OtherClass klasse zijn
//$myclass->test('Hello');

//Fatal error, argument moet een instantie van Otherclass zijn
//$foo = new stdClass();
//$myclass->test($foo);

// Fatal Error: Argument 1 mag niet NULL zijn
//$myclass->test(NULL);

// Werkt: Prints Hello World
$myclass->test($otherclass);

// Fatal Error: Argument moet een array zijn
//$myclass->test_array('a string');

// Werkt: Prints the array
$myclass->test_array(array('a', 'b', 'c'));

// Werkt: Prints ArrayObject
$myclass->test_interface(new ArrayObject(array()));

// Werkt: Prints int(1)
$myclass->test_callable('var_dump', 1);
