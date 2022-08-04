<?php
// MODEL
abstract class Header extends db {

  protected function getData($lang) {

    $sql = "SELECT * FROM nav WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }
}