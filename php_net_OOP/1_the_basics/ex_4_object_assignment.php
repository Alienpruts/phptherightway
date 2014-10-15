<?php
require_once 'ex_1_simple_class_definition.php';

$instance = new SimpleClass();

$assigned = $instance;
$reference = &$instance;

$instance->var = "\$assigned will have this value";

$instance = NULL;

var_dump($instance);
var_dump($reference);
var_dump($assigned);