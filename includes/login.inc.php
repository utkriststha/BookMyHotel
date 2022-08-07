<?php
include_once 'class-autoload.inc.php'; 

// sends user back to sign up page if illegal entering.
if (isset($_POST["submit"])|| isset($_POST["pay_submit"])) {
  // retrives data inputed in the form from log in page.
  $username = $_POST["uid"];
  $password = $_POST["password"];

  //Checking if given username or password is validate.
  $login = new Validation();
  $login->loginUser($username,  $password);

  //Creates a profile for user.
  $profile = new ProfileContr();
  $profileDetails=$profile->getProfile($username);

  session_start();
  $_SESSION["profileDetails"]=$profileDetails;
  header("location: ../index.php");
  exit();
}
else{
  header("location: ../login.php");
  exit();
}