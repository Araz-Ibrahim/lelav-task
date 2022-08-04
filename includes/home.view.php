
<?php

require_once ("./classes/models/home.class.php"); // MODEL
require_once ("./classes/controlers/home-contr.class.php"); // CONTROLER

// ======== (DATABASE) ========
$homeObj = new HomeContr($lang); //SEND LANGUAGE(PRIMARY KEY)

// HOME ABOUT
$homeAbout = $homeObj->getAboutData(); // GET DATA

// HOME HEADER
$homeHeader = $homeObj->getHeaderData(); // GET DATA

// HOME PORTFOLIO
$homePortfolio = $homeObj->getPortfolioData(); // GET DATA
