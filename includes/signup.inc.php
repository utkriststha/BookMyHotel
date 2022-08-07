<?php 
include_once 'class-autoload.inc.php'; 

// sends user back to sign up page if illegal entering
if (isset($_POST["submit"])){
  // retrives data inputed in the form from sign up page
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["password"];
    $repeatpwd = $_POST["repeatpwd"];
    
    $validate = new Validation();
    if ($validate ->invalidUid($username) !== false) {
      header("location: ../signup.php?error=invaliduid");
      exit();
    }
    if ($validate ->invalidEmail($email) !== false) {
      header("location: ../signup.php?error=invalidemail");
      exit();
    }
    if ($validate ->passwordMatch($password, $repeatpwd) !== false) {
      header("location: ../signup.php?error=passworddoesnotmatch");
      exit();
    }
    if ($validate -> uidExists($username, $email) !== false) {
      header("location: ../signup.php?error=usernametaken");
      exit();
    }

// Calling a function to create a users account.
    $newUser = new UsersControl();
    $newUser -> createUser($fname, $lname, $email, $username, $password);

    session_start();
    // $_SESSION["firstName"]=$fname;
    // $_SESSION["lastName"]=$lname;
    // $_SESSION["email"]=$email;
    $_SESSION["user_uid"]=$username;
    header("location: ../includes/profile.inc.php?signin=true");
    exit();
  }
else{
    header("location: ../signup.php");
    exit();
}