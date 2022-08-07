<?php
// Payment is the Model class from MVC model.
class Payment extends Database{
  //Method that creates payment record.
  protected function setPayment($firstName, $lastName, $email, $cardNo, $expiry){
    $sql = "INSERT INTO payment(first_name, last_name, email_address, card_number, expiry_date) VALUES (?,?,?,?,?)";
    $stmt = $this ->connect()->prepare($sql);
    $stmt -> execute([$firstName, $lastName, $email, $cardNo, $expiry]);
  }
}