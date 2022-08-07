<?php
//Validation class
class Validation extends Database{

  //Method that check if a given username is valid.
  public function invalidUid($username){
    // searching algorithm
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result =true;
    }
    else{
      $result = false;
    }
    return $result;
  }
  //Method that check if a given email is valid.
  public function invalidEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result =true;
    }
    else{
      $result = false;
    }
    return $result;
  }

  //Method that check if a given card Number is valid.
  public function invalidCardNumber($cardNo){

    if (is_numeric($cardNo)) {
        $result =true;
    }
    else{
      $result = false;
    }
    return $result;
  }

  //Method that check if the password and repeated password is same.
  public function passwordMatch($password, $repeatpwd){
    $result="";
    if ($password !==$repeatpwd){
        $result =true;
    }
    else{
      $result = false;
    }
    return $result;
  }

  //Method that check if a given username or email already exist in database.
   public function uidExists($username, $email){
    $getUser = new UsersView();
    $resultData = $getUser->userLoginDetail($username, $email);
    if ($username = $resultData['user_uid'] || $email = $resultData['user_email']){
        $result = $resultData;
      }
      else {
        $result = false;
      }
    return $result;
  }

  //Method that check if a given admin email address is present in database.
  public function adminExists($email){
    $getAdmin = new adminView();
    $resultData = $getAdmin->adminLogin($email);
    
      if ($email = $resultData['admin_email']){
        $result = $resultData;
      }
      else {
        $result = false;
      }
    return $result;
  }

  //Method that check if the given login details is present in the database.
  public function loginUser ($username, $password){
    $uidExists= $this->uidExists($username, $username);
    // Condition that checks if the given login details is of customer or admin.
    if ($uidExists === false) {
      $adminExists = $this -> adminExists($username);
      if ($adminExists === false){
        header ("location: ../login.php?error=wronglogin");
        exit();
      }

      if (!$password = $adminExists["admin_password"]){
        header("location: ../login.php?error=wrongpassword");
        exit();
      }
      else{
        session_start();
        $_SESSION["firstName"] = $adminExists["first_name"];
        header("location: ../includes/admin.inc.php");
        exit();
      }
    }
    $passwordHashed = $uidExists["user_password"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword=== false){
      header("location: ../login.php?error=wronglogin");
      exit();
    }
    else if($checkPassword === true){
      session_start();
      $_SESSION["firstName"] = $uidExists["first_name"];
      $_SESSION["username"]=$username;
      $_SESSION["isLogedIn"] = true;
      if (!isset($_GET["login"])){
        
      }
      else{
        header('location: ../hotelPage.php?data='.$_SESSION["hotelName"]);
        exit();
      }
    }
 
  }

}