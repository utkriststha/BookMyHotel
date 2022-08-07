<?php
    include_once 'header.php';
?>
    <div class="accountContainer">
        <section id="accountFormBlock">
            <div class="title">Sign Up</div>
            <div class="accountForm">
                 <!-- inc.php extension page is not visible to user. post method does not show data in url -->
                <!-- Sends data entered in the field to signup.inc.php -->
      <form action="includes/signup.inc.php" method= "post">
          <input type = "text" name = "firstname"   placeholder = "First Name" required><br>
          <input type = "text" name = "lastname" placeholder = "Last Name" required><br>
          <input type = "text" name = "email" placeholder = "Email" required><br>
          <input type = "text" name = "uid" placeholder = "Username" required><br>
          <input type = "password" name = "password" placeholder = "Password" required><br>
          <input type = "password" name = "repeatpwd" placeholder = "Confirm Password" required><br>
          <button class = "signupbutton"type= "submit" name ="submit">Sign Up</button><br>
      </form> 
            </div>
            <div class="links">
                <p>Already have an account? <a class="loginlink" href="login.php">Log in</p></a>
            </div>
    <!--Error handling. -->
    <?php
    // tries to match the string passed as argument with the content in the url.
  if (isset($_GET["error"])) {

    // Error handling for invalid user.
    if ($_GET["error"]== "invaliduid") {
      echo "<p>Username is invalid!</p>";
    }

    // Error handling for invalid email.
    elseif ($_GET["error"]== "invalidemail") {
      echo "<p>Email is incorrect!</p>";
    }

    // Error handling for password and repeat password does not match.
    elseif ($_GET["error"]== "passworddoesnotmatch") {
      echo "<p>Password do not match!</p>";
    }

    // Error handling for user name taken.
    elseif ($_GET["error"]== "usernametaken") {
      echo "<p>Enter username is taken!</p>";
    }

    // Error handling for faliure of sql statment.
    elseif ($_GET["error"]== "stmtfailed") {
      echo "<p>Something went wrong, try again!</p>";
    }

    // Confirmation sign.
    elseif ($_GET["error"]== "none") {
      echo "<p>Sign up complete!</p>";
    }
  }
?>
    </div>

<?php
    include_once 'footer.php';
?>