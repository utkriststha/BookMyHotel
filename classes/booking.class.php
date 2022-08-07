<?php
class Booking extends Database{
 protected function setBooking($hotelId,$userId,$numberOfGuest,$totalAmount,$bookingDate,$checkIn,$checkOut){
  $sql = "INSERT INTO  booking(hotel_id, user_id, numberOfGuest,total_amount, booking_date, check_in_date, check_out_date) VALUES(?,?,?,?,?,?,?)";
  $stmt = $this ->connect()->prepare($sql);
  $stmt -> execute([$hotelId,$userId,$numberOfGuest,$totalAmount,$bookingDate,$checkIn,$checkOut]);
  }

  protected function getAllRecords(){
    $sql = "SELECT booking.booking_id, hotels.hotel_name, users.first_name, users.last_name, booking.booking_date,booking.check_in_date,booking.check_out_date,booking.total_amount
    FROM hotels,users, booking
    WHERE booking.hotel_id=hotels.hotel_id AND booking.user_id=users.user_id;";
        $stmt = $this -> connect()-> query($sql);
        $result= $stmt->fetchAll();
        return $result;
  }
}