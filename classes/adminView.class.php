<?php
// AdminView is the View class from MVC model.
class AdminView extends Admin{
  public function adminLogin($email){
    $result = $this -> getAdmin($email);
    return $result;
  }
}