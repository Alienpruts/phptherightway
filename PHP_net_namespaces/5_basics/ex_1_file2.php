<?php

namespace Foo\Bar;

include './ex_1_file1.php';

const FOO = 2;

function foo() {
  
}


class Foo {

  static function staticMethod() {
    
  }

}

//testen van Namespaces

foo(); // Foo\Bar\foo
foo::staticMethod(); // Foo\Bar\Foo class met static method
echo FOO; // Foo\Bar\FOO constante

subnamespace\foo(); // Foo\Bar\subnamespace\foo functie
subnamespace\foo::staticMethod(); // Foo\Bar\subnamespace\ Foo klasse met method
echo subnamespace\FOO; // Foo\Bar\subnamespace\FOO constante

\Foo\Bar\foo(); // Foo\Bar\foo functie
\Foo\Bar\foo::staticmethod(); // classe Foo\Bar\foo, method staticmethod
echo \Foo\Bar\FOO; // constant Foo\Bar\FOO