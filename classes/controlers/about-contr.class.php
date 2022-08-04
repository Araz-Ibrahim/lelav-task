<?php
// CONTROLER
class AboutContr extends About  {
  public string $lang;

  public function __construct($lang) {
    $this->lang = $lang;
  }

  // ACTION
  public function getActionData() {
    return $this->getActionAllData($this->lang);
  }

  // AWARD
  public function getAwardData() {
    return $this->getAwardAllData($this->lang);
  }

  // INFO
  public function getInfoData() {
    return $this->getInfoAllData($this->lang);
  }

  // PROMO
  public function getPromoData() {
    return $this->getPromoAllData($this->lang);
  }

  // TEAM
  public function getTeamData() {
    return $this->getTeamAllData($this->lang);
  }

  // TEAM
  public function getOurTeamData() {
    return $this->getOurTeamAllData($this->lang);
  }

  // TOGETHER
  public function getTogetherData() {
    return $this->getTogetherAllData($this->lang);
  }
}