<?php

//Anonieme functies zijn functies die geen voorafgaande declaraties nodig hebben, 
//maw, ze worden meteen gebruikt bij het aanmaken ervan
//deze worden het meest gebruike bij zogenaamde callback functions, zoals array_filter()

echo preg_replace_callback('~-([a-z])~', function ($match) {
  return strtoupper($match[1]);
}, 'hello-world');

//zal helloWorld outputten

