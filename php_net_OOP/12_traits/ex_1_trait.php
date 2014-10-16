<?php

//Traits zijn herbruikbare methodes en properties zonder dat er een instantie
//moet zijn van die bepaalde trait, zoals een klasse dat wel heeft

trait ezcReflectionReturnInfo {
    function getReturnType() { /*1*/ }
    function getReturnDescription() { /*2*/ }
}

class ezcReflectionMethod {
    use ezcReflectionReturnInfo;
    /* ... */
}

class ezcReflectionFunction  {
    use ezcReflectionReturnInfo;
    /* ... */
}