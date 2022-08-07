<?php
session_start();
include_once "class-autoload.inc.php";
//Condition that checks which form send the data.
// True if form of user profile page sends data.
if (isset($_POST["submit"])) {
     //retrieves data inputed in the form from user profile page.
    $title = $_POST['title'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];

    $profileContr = new ProfileContr();
    $profileContr->updateUserProfile($title, $fName, $lName, $gender, $dob, $country, $username, $email, $phoneNumber);

    $_SESSION["firstName"] = $fName;
    $_SESSION['title'] = $title;
    $_SESSION['fName'] = $fName;
    $_SESSION['lName'] = $lName;
    $_SESSION['gender'] = $gender;
    $_SESSION['dob'] = $dob;
    $_SESSION['country'] = $country;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['phoneNumber'] = $phoneNumber;
    header("location: ../userProfile.php?created=success");
    exit();
} 
// True if form of sign up page sends data.
elseif($_GET["signin"]=="true") {
    echo 2;
    $username=$_SESSION["user_uid"];
    $user = new UsersView();
    $userDetails=$user->userLoginDetail($username,$username);
  
    $profile = new ProfileContr();
    $profile->setUserProfile($userDetails["first_name"],$userDetails["last_name"],$userDetails["user_uid"],$userDetails["user_email"],$userDetails["user_id"]);
    header("location:../login.php");
    exit();
}
// Any other form sends data
 else{   
    $_SESSION['title'] = null;
    $_SESSION['fName'] = null;
    $_SESSION['lName'] = null;
    $_SESSION['gender'] = null;
    $_SESSION['dob'] =null;
    $_SESSION['country'] = null;
    $_SESSION['username'] = null;
    $_SESSION['email'] = null;
    $_SESSION['phoneNumber'] = null;
    header("location:../userProfile.php");
    exit();
}
