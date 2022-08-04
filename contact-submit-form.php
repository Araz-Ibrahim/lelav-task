<?php

require_once ("./classes/db.class.php"); // MODEL
require_once ("./classes/models/contact-submit-form.class.php"); // MODEL
require_once ("./classes/controlers/contact_submit_form-contr.class.php"); // CONTROLER

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$contactUsFormObj = new ContactSubmitFormContr($name, $email, $subject, $message);
$contactUsFormObj->insertFormToDb();

header("location: index.php"); // Redirect to home page.