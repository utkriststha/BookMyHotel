<?php
// PaymentControl is the Control class from MVC model.
class PaymentControl extends Payment{
  public function createPayment ($firstName, $lastName, $email, $cardNo, $expiry){
    $this -> setPayment($firstName, $lastName, $email, $cardNo, $expiry);
  }
  
}