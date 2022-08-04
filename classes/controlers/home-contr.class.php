<?php
// CONTROLER
class HomeContr extends Home {
  public string $lang;

  // CONSTRUCTOR
  public function __construct($lang) {
    $this->lang = $lang;
  }

  // HOME ABOUT
  public function getAboutData() {
    return $this->getAboutAllData($this->lang);
  }

  // HOME HEADER
  public function getHeaderData() {
    return $this->getHeaderAllData($this->lang);
  }

  // HOME PORTFOLIO
  public function getPortfolioData() {
    return $this->getPortfolioAllData($this->lang);
  }
}