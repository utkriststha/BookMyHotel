<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Fredoka+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="js/script.js" defer></script>
    <title>BookMyHotel</title>
</head>

<body>
    <div class="navbar" id="home">
        <a class="logo" href="index.php">Book<span>My</span>Hotel</a>
        <ul class="navlinks">
            <li><a href="index.php#home">Home</a></li>
            <li><a href="index.php#catagories">Categories</a></li>
            <li><a href="index.php#discounts">Discounts</a></li>
            <li><a href="index.php#explore">Explore</a></li>

        </ul>
        <div class="accountlogin">
        <?php
                      if (isset($_SESSION["firstName"])) {
                        echo("<div class='profileimg'>");
                        echo('<img src="https://images.unsplash.com/photo-1522778147829-047360bdc7f6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzN8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"" alt="profile" height="60px" > ');
                        echo ('<a class = "user-name" href ="includes/profile.inc.php?header=true">Hi, '.$_SESSION["firstName"].'</a>');
                        echo("</div>");
                        echo('<a class="logout" href="includes/logout.inc.php"><i class="fas fa-sign-out-alt"></a></i></li>');
                        
                      }
                      else{
                        echo '<a class = "login" href="signup.php">Sign up</a>';
                        echo '<a class = "signup" href="login.php">Log in</a>';
                        
                      }
                    ?> 
        </div>
        <a href="#" class="toggleBtn">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
    </div>
