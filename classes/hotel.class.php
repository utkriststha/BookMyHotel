<?php
// Hotel is the Model class from MVC model.
class Hotel extends Database{
  //Method that retrieves hotel records based on hotel name and returns an associative array.
  public function getHotel($hotelName){
    $sql = 'SELECT * FROM hotels WHERE hotel_name = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$hotelName]);
    $result= $stmt->fetchAll();
    return($result);
  }

  //Method that retrieves hotel records based on hotel suburb or postcode and returns an associative array.
  public function getHotelDetails($hotelLocation){
    $sql = 'SELECT DISTINCT hotel_name, hotel_description, rating, review FROM hotels, address
    WHERE address.hotel_id = hotels.hotel_id AND address.suburb = ? OR address.hotel_id = hotels.hotel_id AND address.postcode = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$hotelLocation,$hotelLocation]);
    $result= $stmt->fetchAll();
    return $result;
  }

  //Method that retrieves hotel records based on city and returns an associative array.
  public function getExploreHotelDetails($city){
    $sql = 'SELECT DISTINCT hotel_name, hotel_description, rating, review FROM hotels, address
    WHERE address.hotel_id = hotels.hotel_id AND address.city = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$city]);
    $result= $stmt->fetchAll();
    return $result;
  }

  //Method that retrieves hotel records based on category and returns an associative array.
  public function getCategoryHotelDetails($category){
    $sql = 'SELECT DISTINCT hotel_name, hotel_description, rating, review FROM hotels
    WHERE category = ?';
    $stmt = $this -> connect()-> prepare($sql);
    $stmt -> execute([$category]);
    $result= $stmt->fetchAll();
    return $result;
  }

  //Method that retrieves all the hotel records and returns an associative array.
  public function getAllRecords(){
    $sql ='SELECT hotels.hotel_id, hotels.hotel_name,address.street_name, address.suburb, address.postcode, address.city, address.country FROM hotels, address WHERE hotels.hotel_id=address.hotel_id ORDER BY hotels.hotel_id ASC';
    $stmt = $this->connect()->query($sql);
    $result = $stmt->fetchAll();
    return $result;
  }

  //Method that retrieves hotel records where hotel_id is equal in hotels and booking table and returns an associative array.
  public function getHotelName(){
    $sql = 'SELECT hotels.hotel_name FROM hotels,booking WHERE hotels.hotel_id= booking.hotel_id;';
    $stmt = $this->connect()->query($sql);
    $result = $stmt->fetchAll();
    return $result;
  }
  

}