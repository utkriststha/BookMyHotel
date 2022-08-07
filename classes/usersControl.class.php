<?php
// UsersControl is the Control class from MVC model.
 class UsersControl extends Users {
   public function createUser($fname, $lname, $email, $username, $password){
    $this -> setUser($fname, $lname, $email, $username, $password);
   }

   public function updateUser($firstName, $lastName, $username, $email,$users_id){
    $this->updateUserLogin($firstName, $lastName, $username, $email,$users_id);
   }
 }