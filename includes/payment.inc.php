<?php 
include_once "class-autoload.inc.php";

try{
if (isset($_POST["submit"])){
  //retrives data inputed in the form from payment page.
  $fname = $_POST["first_name"];
  $lname = $_POST["last_name"];
  $email = $_POST["email"];
  $cardNo = $_POST["card_No"];
  $expiry = $_POST["expiryNo"];

  $validate = new Validation();

  if ($validate -> invalidCardNumber($cardNo) == false) {
    header("location: ../index.php?error=invalidCardNo");
    exit();
  }

  if ($validate ->invalidEmail($email) !== false) {
    header("location: ../index.php?error=invalidEmail");
    exit();
  }
  // Creates payement records.
  $payment = new PaymentControl();
  $payment-> createPayment($fname, $lname, $email, $cardNo,$expiry);
  header("location: ../completePayment.php");
  exit();
  }
  else{
    header("location: ../index.php");
    exit();
}
}
catch (Exception $e){
  echo "there has been an error.";

}