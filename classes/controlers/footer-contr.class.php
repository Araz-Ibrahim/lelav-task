<?php
// CONTROLER
class FooterContr extends Footer  {
  public string $lang;

  public function __construct($lang) {
    $this->lang = $lang;
  }

  public function getAllData() {
    return $this->getData($this->lang);
  }
}