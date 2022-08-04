<?php

require_once ("./Classes/controlers/language-contr.class.php"); // CONTROLER

// CLASSES
require_once ("./classes/db.class.php"); // DATABASE
require_once ("./classes/models/header.class.php"); // MODEL
require_once ("./classes/controlers/header-contr.class.php"); // CONTROLER

// TRACKING URL
$_SESSION["TrackingURL"] = $_SERVER["PHP_SELF"];

// GET LANGUAGE CLASS 
$lang = LanguageContr::getLanguage(); // (STATIC FUNCTION)

// AUTO BODY DIRECTION
$autoBodyDirection = LanguageContr::autoBodyDirection($lang); // (STATIC FUNCTION)

// AUTO TEXT DIRECTION
$autoTextDirection = LanguageContr::autoTextDirection($lang); // (STATIC FUNCTION)

// (DATABASE)
$headerObj = new HeaderContr($lang); //SEND LANGUAGE(PRIMARY KEY)
$header = $headerObj->getAllData(); // GET DATA