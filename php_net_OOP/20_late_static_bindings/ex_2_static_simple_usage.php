<?php

//Late static binding introduceert een keyword dat de klasse referentieert die
//at runtime aangeropen werd. Zo kunnen we in ons voorbeeld B referentieren ipv
//A in het vorige voorbeeld


class A {
  public static function who() {
    echo __CLASS__;
  }
  
  public static function test() {
    //hier wordt Late Static binding toegepast
    //hier roep je de functie van in de klasse die die functie aanroept
    static::who();
  }
}

class B extends A {
  public static function who() {
    echo __CLASS__;
  }
}

//geeft nu B als output weer ipv A door Late Static Binding
B::test();