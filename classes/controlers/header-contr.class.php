<?php
// CONTROLER
class HeaderContr extends Header {
  public string $lang;

  public function __construct($lang) {
    $this->lang = $lang;
  }

  public function getAllData() {
    return $this->getData($this->lang);
  }
}