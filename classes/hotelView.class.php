<?php

// HotelView is the View class from MVC model.
class HotelView extends Hotel{
  public function getHotelDetail($hotelName){
    return $this->getHotel($hotelName);
  }

  public function adminHotelDeatils(){
    return $this->getAllRecords();
  }

  public function hotelName(){
    return $this ->getHotelName();
  }
}