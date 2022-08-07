<?php
// BookingControl is the Control class from MVC model.
class BookingControl extends Booking{
   // Method that creates a booking record.
   public function setBookingDetails($numberOfGuest,$totalAmount,$bookingDate,$checkIn,$checkOut,$hotelName){
  
    $hotel = new HotelView();
    $hotelDetails = $hotel->getHotelDetail($hotelName);

    $user = new UsersView();
    $userDetails = $user->userLoginDetail( $_SESSION["username"], $_SESSION["username"]);

     $this->setBooking($hotelDetails[0]["hotel_id"],$userDetails["user_id"],$numberOfGuest,$totalAmount,$bookingDate,$checkIn,$checkOut);
  }
  // Method that fetchs all booking records.
  public function getBookingDetails(){
     return $this->getAllRecords();
  }
}