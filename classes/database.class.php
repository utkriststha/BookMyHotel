<?php
//Database class that creates connection to the database;
class Database {
  private $server="localhost";
  private $user="root";
  private $password="";
  private $db = "hotelbookingsystem";

//Method that makes the connection to the database.
  protected function connect(){
    try {
      //Using PDO function to create connection with database.
      $handle = new PDO("mysql:host=$this->server;dbname=$this->db", "$this->user", "$this->password");
      $handle -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $handle;

    } catch (PDOException $e) {
      die("Oops. There has been an error while connecting to the database.");
      return $e -> getMessage();
    }
  }
}