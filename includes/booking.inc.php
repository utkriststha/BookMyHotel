<?php
session_start(); 
include_once 'class-autoload.inc.php'; 

// sends user back to hotel page if illegal entering
if (isset($_POST["paymentButton"])){
// retrives data inputed in the form from user profile page.
  $checkInDate = $_SESSION["checkInDate"];
  $checkInDate =strtotime($checkInDate);
  $checkInDate = date('d-m-Y',$checkInDate);

  $checkOutDate = $_SESSION["checkOutDate"];
  $checkOutDate =strtotime($checkOutDate);
  $checkOutDate = date('d-m-Y',$checkOutDate);

  //retrieves current date.
  $bookingDate = date("d-m-Y");
  $guestNumber = $_SESSION["numberOfGuests"];
  $hotelName = strip_tags($_SESSION['name']);
 
  //Sets total amount based on total room number selected by user.
  try{
    if($_POST["single"]>0){
      $totalAmount=$_POST["singleBedPrice"];
    }
    elseif($_POST["double"]>0){
      $totalAmount=$_POST["doubleBedPrice"];
    }
    elseif($_POST["three"]>0){
      $totalAmount=$_POST["threeBedPrice"];
    }
    elseif($_POST["suite"]>0){
      $totalAmount=$_POST["royalPrice"];
    }
    else{
      throw new Exception();
      exit();
    }
    $booking = new BookingControl();
    $setBooking = $booking->setBookingDetails($guestNumber,$totalAmount,$bookingDate,$checkInDate,$checkOutDate,$hotelName);
    header("location: ../paymentPage.php");
    exit();
  }
  catch(Exception $e){
    header("location: ../hotelPage.php?data=$hotelName&error=roomnotselected");
    exit();
  } 
}
else{
  header("location: ../hotelPage.php");
  exit();
}