
<?php

require_once ("./classes/models/contact.class.php"); // MODEL
require_once ("./classes/controlers/contact-contr.class.php"); // CONTROLER

// (DATABASE)
$contactObj = new ContactContr($lang); //SEND LANGUAGE(PRIMARY KEY)
$contact = $contactObj->getAllData(); // GET DATA
