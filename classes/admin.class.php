<?php
// Admin is the Model class from MVC model.
class Admin extends Database{
  //Method that returns admin records from database.
  protected function getAdmin($email){
    $sql = "Select * from admin Where admin_email =?;";
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$email]);
    $result= $stmt->fetch();
    return $result;
  }
}