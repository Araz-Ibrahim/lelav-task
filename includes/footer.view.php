
<?php

require_once ("./classes/models/footer.class.php"); // MODEL
require_once ("./classes/controlers/footer-contr.class.php"); // CONTROLER


// (DATABASE)
$footerObj = new FooterContr($lang); //SEND LANGUAGE(PRIMARY KEY)
$footer = $footerObj->getAllData(); // GET DATA
