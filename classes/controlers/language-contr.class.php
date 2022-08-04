<?php

session_start();

class LanguageContr {

  // GET LANGUAGE

  // 1 - English (default)
  // 2 - Kurdish
  public static function getLanguage() {
    if(empty($_SESSION["Lang"]) || $_SESSION["Lang"] == "1") {
      $lang = "1"; // En
    } else {
      $lang = "2"; // Ku
    }
    return $lang;
  }

  // SET LANGUAGE (TOGGLE)
  public static function setLanguage() {

    $lang = $_SESSION["Lang"];

    if($lang == "1") {
      $_SESSION["Lang"] = "2"; // Ku
    } else {
      $_SESSION["Lang"] = "1"; // En
    }
    header("location:" . $_SESSION['TrackingURL']); // Redirect to current page.
  }

  // CHNAGE BODY DIRECTION
  public static function autoBodyDirection($lang) {
    return ($lang == "2") ? "direction: rtl" : "direction: ltr";
  }

  // CHNAGE TEXT DIRECTION
  public static function autoTextDirection($lang) {
    return ($lang == "2") ? "text-right" : "text-left";
  }
}