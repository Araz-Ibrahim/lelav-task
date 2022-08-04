<?php

class ContactSubmitForm extends Db {

  // INSERT DATA TO DATABASE
  protected function setContactUsData($name, $email, $subject, $message) {
    $sql = "INSERT INTO contact_us_form(contact_us_name, contact_us_email, contact_us_subject, contact_us_message) VALUES(?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($name, $email, $subject, $message));
  }

}