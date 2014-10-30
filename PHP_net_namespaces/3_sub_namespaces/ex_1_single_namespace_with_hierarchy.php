<?php

//je kan namespaces 'onderverdelen' zoals in subdirectories

namespace MyProject\Sub\Level;

const CONNECT_OK = 1;
class Connection {}
function connect() {}

//dit creërt drie dingen :
// de constant MyProject|Sub|Level|CONNECT_OK
// de klasse MyProject|Sub|Level|Connection
// de functie MyProject|Sub|Level|connect
