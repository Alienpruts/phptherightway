<?php

//Overloading betekent dat properties en methodes 'on the fly' gegenereerd kunnen
//worden dmv magic methods. Er zijn 4 overloading methods :

/**
  __set() is run when writing data to inaccessible properties.

  __get() is utilized for reading data from inaccessible properties.

  __isset() is triggered by calling isset() or empty() on inaccessible properties.

  __unset() is invoked when unset() is used on inaccessible properties.
 */
Class PropertyTest {

  private $data = array();
  public $declared = 1;
  private $hidden = 2;

  public function __set($name, $value) {
    echo "Setting $name to $value " . PHP_EOL;
    $this->data[$name] = $value;
  }

  public function __get($name) {
    echo "Getting $name " . PHP_EOL;
    if (array_key_exists($name, $this->data)) {
      return $this->data[$name];
    }

    $trace = debug_backtrace();

    $error_msg = "Undefined property via __get() : $name" . PHP_EOL;
    $error_msg .= "in " . $trace[0]['file'] . PHP_EOL;
    $error_msg .= "on line " . $trace[0]['line'];
    trigger_error($error_msg, E_USER_NOTICE);

    return NULL;
  }

  public function __isset($name) {
    echo "Is $name set?" . PHP_EOL;
    return isset($this->data[$name]);
  }
  
  public function __unset($name) {
    echo "Unsetting $name" . PHP_EOL;
    unset($this->data[$name]);
  }
  
  public function getHidden() {
    
    return $this->hidden;
  }
}

echo "<pre>\n";

$obj = new PropertyTest;

$obj->a = 1;
echo $obj->a . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";

echo $obj->declared . "\n\n";

echo "Let's experiment with the private property named 'hidden':\n";
echo "Privates are visible inside the class, so __get() not used...\n";
echo $obj->getHidden() . "\n";
echo "Privates not visible outside of class, so __get() is used...\n";
echo $obj->hidden . "\n";
