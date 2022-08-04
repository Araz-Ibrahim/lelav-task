<?php


abstract class About extends Db {

  // ABOUT ACTION
  protected function getActionAllData($lang) {

    $sql = "SELECT * FROM about_action WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }

  // ABOUT AWARD
  protected function getAwardAllData($lang) {

    $sql = "SELECT * FROM about_award WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }

  // ABOUT INFO
  protected function getInfoAllData($lang) {

    $sql = "SELECT * FROM about_info WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }

  // ABOUT PROMO
  protected function getPromoAllData($lang) {

    $sql = "SELECT * FROM about_promo WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }

  // ABOUT TEAM
  protected function getTeamAllData($lang) {

    $sql = "SELECT * FROM about_team WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }

   // ABOUT TEAM
   protected function getOurTeamAllData($lang) {

    $sql = "SELECT * FROM our_team WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }

  // ABOUT TOGETHER
  protected function getTogetherAllData($lang) {

    $sql = "SELECT * FROM about_together WHERE lang_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($lang));
    $results = $stmt->fetchAll();

    return $results;
  }
}