<?php
include_once 'class-autoload.inc.php';
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $emailFrom = $_POST['email'];
  $message = $_POST['message'];
  
  // To send email to a gmail account, changes as been made in the php.ini and sendmail.ini files in local host;

// Changes made in C:\xampp\php\php.ini
//   [mail function]
// SMTP=smtp.gmail.com

// smtp_port=587

// sendmail_from = raymonshrestha@gmail.com

// sendmail_path = "C:\xampp\sendmail\sendmail.exe -t"

// Changes made in C:\xampp\sendmail\sendmail.ini
// [sendmail]

// smtp_server=smtp.gmail.com

// smtp_port=587

// smtp_ssl=auto

// auth_username= d28018091@gmail.com
// auth_password=testEmail69420

  $sendMail = new Email($name, $subject, $emailFrom,$message);
  $sendMail->contactEmail();

  header("Location:../contact.php?mailsend");

}
