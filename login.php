<?php
include_once 'header.php';
?>
<div class="accountContainer">
    <section id="accountFormBlock">
        <div class="title">Log in</div>
        <div class="accountForm">
        <?php
            if(!isset($_GET["login"])){
                echo '<form action="includes/login.inc.php" method="post">';
            }
            else{
                echo '<form action="includes/login.inc.php?login=notlogedin" method="post">';
            }
            ?>
                <input type="text" name="uid" placeholder="Username / Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>

                
                <button class="loginbutton" type="submit" name="submit">Log In</button>
                    
                   
                
            </form>
        </div>
        <div class="links">
            <!-- <a class="fpassword" href="#">Forgotten password?</a> -->
            <p>Don't have an account? <a class="loginlink" href="signup.php">Create a New Acount</p></a>
        </div>

    <!--Error handling. -->
    <?php
    if (isset($_GET["error"])) {
        // Error handling for incorrect login details.
        if ($_GET["error"]== "wronglogin") {
            echo "<p>Incorrect login information!</p>";
        }
        if ($_GET["error"]== "wrongpassword") {
            echo "<p>Incorrect password!</p>";
        }
    }
     ?>  
    </section>
</div>

<?php
include_once 'footer.php';
?>


