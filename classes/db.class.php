<?php
// DATABASE
abstract class Db {
  protected function connect() {
    try {
      $username = "root";
      $password = "";
      $dbh = new PDO('mysql:host=localhost;dbname=lelav', $username, $password);
      return $dbh;
    } catch (PDOException $e) {
      print "Error!:" . $e->getMessage() . "<br/>";
      die(); // Kill the connection
    }
  }
}