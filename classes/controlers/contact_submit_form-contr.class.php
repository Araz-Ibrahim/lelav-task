<?php

class ContactSubmitFormContr extends ContactSubmitForm {

  private $name;
  private $email;
  private $subject;
  private $message;

  public function __construct($name, $email, $subject, $message) {
    $this->name = $name;
    $this->email = $email;
    $this->subject = $subject;
    $this->message = $message;
  }

  public function insertFormToDb() {
    $this->setContactUsData($this->name, $this->email, $this->subject, $this->message);
  }
}