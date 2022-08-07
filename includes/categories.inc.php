<?php
  include_once 'class-autoload.inc.php';

  if (isset($_GET["category"])){
    // retrieves data inputed in the form from category page.
    $category = $_GET["category"];
    
    //retrieves hotel records based on categories.
    $getHotelInfo = new Hotel();
    $result = $getHotelInfo -> getCategoryHotelDetails($category);
    //retrieves address records based on categories.
    $getHotelAddress = new Address();
    $address = $getHotelAddress -> getCategoryHotelAddress($category);

    session_start();
    $_SESSION["hotelInfo"]= $result;
    $_SESSION["hotelAddress"]= $address;
    $_SESSION["totalResult"] = count($result);
    header("location: ../afterSearch.php");
    exit();
  }
  else{
    header("location: ../categories.php");
    exit();
  }
