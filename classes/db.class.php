<?php
// DATABASE
abstract class Db {
  protected function connect() {
    try {
      $username = "root";
      $password = "";
      $dbh = new PDO('mysql:host=localhost;dbname=lelav', $username, $password);
      $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      return $dbh;
    } catch (PDOException $e) {
      print "Error!:" . $e->getMessage() . "<br/>";
      die(); // Kill the connection
    }
  }
}