<?php
//Email class
class Email{
  private $name = "";
  private $subject = "";
  private $emailFrom = "";
  private $message = "";

 //Public constructor 
  public function __construct(String $name, String $subject, String $emailFrom, String $message){
    $this -> name = $name;
    $this -> subject = $subject;
    $this -> emailFrom = $emailFrom;
    $this -> message = $message;
  }
// Method that sends mail to admin.
  public function contactEmail(){
    $emailTo = "d28018091@gmail.com";
    $headers = "From: ". $this->emailFrom;
    $text = "You have received an email from ".$this->name.".\n\n".$this->message;
    mail($emailTo, $this->subject,$text,$headers);
  }
}