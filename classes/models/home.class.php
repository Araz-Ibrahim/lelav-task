<?php


abstract class Home extends Db {

  // HOME ABOUT 
  protected function getAboutAllData($lang) {

    $sql = "SELECT * FROM home_about WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }

  // HOME HEADER
  protected function getHeaderAllData($lang) {

    $sql = "SELECT * FROM home_header WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }

  // HOME PORTFOLIO
  protected function getPortfolioAllData($lang) {

    $sql = "SELECT * FROM home_portfolio WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }
}