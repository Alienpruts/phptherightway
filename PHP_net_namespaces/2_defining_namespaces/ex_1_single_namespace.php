<?php

//Alles kan in namespaces stoppen, maar enkel klassen, traits, abstracts, interfaces
//functions en constantes worden 'beinvloedt' : enkel die kun je aanspreken dmv
//de namespace

//de namespace van een file moet altijd het eerste zijn wat in een bestand staat, 
//uitgezonderd de declare keyword.!

namespace MyProject;

const CONNECT_OK = 1 ;
class Connection {};
function connect() {}
