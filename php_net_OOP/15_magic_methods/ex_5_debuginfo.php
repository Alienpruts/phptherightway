<?php

//deze methode wordt aangeroepen als een object via var_dump() getoond wordt
//Werkt enkel bij PHP 5.6.0!!!!!
class C {
    private $prop;

    public function __construct($val) {
        $this->prop = $val;
    }

    public function __debugInfo() {
        return [
            'propSquared' => pow($this->prop, 2)
        ];
    }
}

var_dump(new C(42));

