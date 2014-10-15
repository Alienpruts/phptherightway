<?php

//Interfaces stellen je in staat om te specifieren welke methodes een klasse
//MOET implementeren, zonder te defininiëren hoe die methodes zouden moeten werken
//Alle methodes in een interface moeten public zijn EN ze moeten allemaal (met 
//signature en al) 100% overgenomen worden door de implementerende klasse

interface iTemplate {

  public function setVariable($name, $var);

  public function getHtml($template);
}

//deze implementatie zal werken
class Template implements iTemplate {

  private $vars = array();

  public function setVariable($name, $var) {
    $this->vars[$name] = $var;
  }

  public function getHtml($template) {

    foreach ($this->vars as $name => $value) {
      $template = str_replace('{' . $name . '}', $value, $teplate);
    };

    return $template;
  }

}

//dit zal niet werken, want we hebben slechts 1 van de methods geimplementeerd
//Een goede IDE zoals Netbeans zal een warning op het scherm tonen
/**
class BadTemplate implements iTemplate {

  private $vars = array();

  public function setVariable($name, $var) {
    $this->vars[$name] = $var;
  }

}
 */
