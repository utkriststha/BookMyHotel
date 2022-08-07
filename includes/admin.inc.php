<?php
session_start();
include_once 'class-autoload.inc.php';

$hotelView = new HotelView();
$hotelRecords = $hotelView->adminHotelDeatils();
$hotelName = $hotelView->hotelName();

$profileContr = new ProfileContr();
$userRecords = $profileContr->getUserDetails();
$userName = $profileContr->getUserName();

$bookingControl = new BookingControl();
$bookingRecords = $bookingControl->getBookingDetails();

// Session variable creation
$_SESSION["hotelRecords"] = $hotelRecords;
$_SESSION["hotelName"]=$hotelName;
$_SESSION["userRecords"] = $userRecords;
$_SESSION["userName"]=$userName;
$_SESSION["bookingRecords"] = $bookingRecords;

header("location: ../adminDashboard.php");
exit();