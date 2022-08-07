<?php
  include_once 'class-autoload.inc.php';

  if (isset($_GET["city"])){
    // retrives data inputed in the form from explore page.
    $city = $_GET["city"];
    //retrieves hotel records based on city.
    $getHotelInfo = new Hotel();
    $result = $getHotelInfo -> getExploreHotelDetails($city);
    //retrieves address records based on city.
    $getHotelAddress = new Address();
    $address = $getHotelAddress -> getExploreHotelAddress($city);

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
