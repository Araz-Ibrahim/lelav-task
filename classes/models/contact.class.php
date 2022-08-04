<?php


abstract class Contact extends Db {
  protected function getData($lang) {

    $sql = "SELECT * FROM contact WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }
}