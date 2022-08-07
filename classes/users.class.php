<?php

// Users is the Model class from MVC model.
class Users extends Database{
  // Method that retrieves user records based on username or email.
  protected function getUser($username, $email){
    $sql = "Select * from users Where user_uid =? OR user_email =?;";
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$username, $email]);
    $result= $stmt->fetch();
    return $result;
  }
  //Method that creates user records.
  protected function setUser($fname, $lname, $email, $username, $password){
    $sql = "INSERT INTO  users (first_name, last_name, user_email, user_uid, user_password) VALUES(?,?,?,?,?)";
    $stmt = $this ->connect()->prepare($sql);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt -> execute([$fname, $lname, $email, $username, $hashedPassword]);
  }
  // Method that updates user record based on user id.
  protected function updateUserLogin($firstName, $lastName, $username, $email,$users_id){
    $sql = "Update users
            Set first_name=?, last_name=?, user_email=?, user_uid=?
            Where user_id=?";
    $stmt= $this->connect()->prepare($sql);
    $stmt->execute([$firstName, $lastName,$email, $username, $users_id]);
}

}