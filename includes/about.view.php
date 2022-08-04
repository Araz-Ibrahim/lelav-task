
<?php

require_once ("./classes/models/about.class.php"); // MODEL
require_once ("./classes/controlers/about-contr.class.php"); // CONTROLER


// ========= (DATABASE) ==========
$aboutObj = new AboutContr($lang); //SEND LANGUAGE(PRIMARY KEY)

// ABOUT ACTION
$aboutAction = $aboutObj->getActionData(); // GET DATA

// ABOUT AWARD
$aboutAward = $aboutObj->getAwardData(); // GET DATA

// ABOUT INFO
$aboutInfo = $aboutObj->getInfoData(); // GET DATA

// ABOUT PROMO
$aboutPromo = $aboutObj->getPromoData(); // GET DATA

// ABOUT TEAM
$aboutTeam = $aboutObj->getTeamData(); // GET DATA

// OUR TEAM
$ourTeam = $aboutObj->getOurTeamData(); // GET DATA

// ABOUT TOGETHER
$aboutTogether = $aboutObj->getTogetherData(); // GET DATA