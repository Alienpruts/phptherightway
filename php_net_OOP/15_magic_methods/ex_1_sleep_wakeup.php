<?php

// magic methods zijn methodes die automatisch aangeroepen worden bij bepaalde
//'events'. __construct was al een veelgebruikt voorbeeld.

//__sleep wordt aangeroepen indien functie serialize() gebruikt wordt. Je kan bvb
//het te serializen object op schonen. Deze methode zou een array met te serializen
//date moeten retourneren. Indien het dit niet serialise je NULL en wordt E_NOTICE
// gegeven

//__wakeup wordt aangeroepen indien functie unserialize() gebruikt wordt. Je kan
//bvb je object reconstrueren. Hoofdfunctie van __wakeup is om een databaseverbinding
//te herstellen voor te unserializen

class Connection {
  
  private $dsn, $username, $password;
  
  public function __construct($dsn, $username, $password) {
    $this->dsn = $dsn;
    $this->username = $username;
    $this->password = $password;
    
    $this->connect();
    
  }
  private function connect() {
    echo "I just made a virtual connection to a virtual database " . PHP_EOL;
  }

  public function __sleep() {
    return array('dsn', 'username', 'password');
  }
  
  public function __wakeup() {
    $this->connect();
  }
}

$test = new Connection('dns', 'bert', 'blabla');
var_dump($test);
$serialize = serialize($test);
var_dump($serialize);
echo "=================================" . PHP_EOL;
$object = unserialize($serialize);
var_dump($object);