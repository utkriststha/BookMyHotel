<?php
    include_once 'header.php';
?>
    <div class='profileContainer'>
        <div class="profileNav">
            <div>
                <li class="tabs current"><a href="userProfile.php">Personal Details</a></li>
                <li class="tabs"><a href="userProfilePreference.php">Preference</a></li>
                <li class="tabs"><a href="userProfilePayment.php">Payment Details</a></li>
                <li class="tabs"><a href="userProfileSecurity.php">Security</a></li>
            </div>
        </div>
        <div class="profileContent">
            <div class="personalDetails">
                <div class="headding">
                    <div>
                        <h2>Personal Details</h2>
                        <h4>Update your personal information</h4>
                    </div>
                    <img src="https://images.unsplash.com/photo-1522778147829-047360bdc7f6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzN8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
                <div class="information">
                    <form action="includes/profile.inc.php" method="POST">
                        <ul>
                            <li>
                                <div>
                                    <label for="title">Title</label>
                                    <select id="title" name="title">
                                        <?php
                                            if($_SESSION['title']==null){
                                               echo('<option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>');
                                            }
                                            else{
                                                if ($_SESSION['title']=="Mr."){
                                                    echo('<option value="Mr.">Mr.</option>'.
                                                    '<option value="Mrs.">Mrs.</option>');
                                                }
                                                else{
                                                echo('<option value="Mrs.">Mrs.</option>'.
                                                '<option value="Mr.">Mr.</option>');
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <li>
                                    <div>
                                        <label for="fName">First Name</label>
                                        <?php
                                            $profileDetails=$_SESSION["profileDetails"];
                                            if($_SESSION['fName']==null){
                                                echo('<input type="text" name="fName" id="fName" value="'. $profileDetails[0]["firstName"].'">');
                                            }
                                            else{
                                            echo ('<input type="text" name="fName" id="fName" value="'. $_SESSION['fName'].'">');
                                            }
                                        ?>
                                    </div>
                                    <div>
                                        <label for="lName">Last Name</label>
                                        <?php
                                            if($_SESSION['lName']==null){
                                                echo('<input type="text" name="lName" id="lName" value="'. $profileDetails[0]["lastName"].'">');
                                            }
                                            else{
                                            echo ('<input type="text" name="lName" id="lName" value="'. $_SESSION['lName'].'">');
                                            }
                                        ?>
                                    </div>
                                </li>
                            </li>
                            <li>
                                <div>
                                <label for="gender">Gender</label>
                                    <select id="gender" name="gender">
                                    <?php
                                            if($_SESSION['gender']==null){
                                               echo('<option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>');
                                            }
                                            else{
                                                if($_SESSION['gender']=="Male"){
                                                    echo('<option value="Male">Male</option>'.
                                                    '<option value="Female">Female</option>'.
                                                    '<option value="Other">Other</option>');
                                                }
                                                elseif($_SESSION['gender']=="Female"){
                                                    echo('<option value="Female">Female</option>'.
                                                    '<option value="Male">Male</option>'.
                                                    '<option value="Other">Other</option>');
                                                }
                                                else{
                                                    echo('<option value="Other">Other</option>'.
                                                    '<option value="Male">Male</option>'.
                                                    '<option value="Female">Female</option>');
                                                }
                                                
                                            }
                                        ?>
                                </select>
                                </div>
                                <div>
                                    <label for="dob">Date of Birth</label>
                                    <?php
                                          if($_SESSION['dob']==null){
                                            echo('<input text="date" name="dob" id="dob" value="'. $profileDetails[0]["DOB"].'">');
                                        }
                                        else{
                                            echo ('<input text="date" name="dob" id="dob" value="'. $_SESSION['dob'].'">');
                                            }
                                        ?>
                                </div>
                                <div>
                                    <label for="country">Country </label>
                                    <?php
                                          if($_SESSION['country']==null){
                                            echo('<input type="text" name="country" id="country" value="'. $profileDetails[0]["country"].'">');
                                        }
                                        else{
                                            echo ('<input type="text" name="country" id="country" value="'. $_SESSION['country'].'">');
                                            }
                                        ?>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="username">Username</label>
                                    <?php
                                          if($_SESSION['username']==null){
                                            echo('<input type="text" name="username" id="username" value="'. $profileDetails[0]["username"].'">');
                                        }
                                        else{
                                            echo ('<input type="text" name="username" id="username" value="'. $_SESSION['username'].'">');
                                            }
                                        ?>
                                </div>
                                <div>
                                    <label for="email">Email ID</label>
                                    <?php
                                          if($_SESSION['email']==null){
                                            echo('<input type="text" name="email" id="email" value="'. $profileDetails[0]["email"].'">');
                                        }
                                        else{
                                            echo ('<input type="text" name="email" id="email" value="'. $_SESSION['email'].'">');
                                            }
                                        ?>
                                </div>
                                <div>
                                    <label for="phoneNumber">Phone Number</label>

                                    <?php
                                          if($_SESSION['phoneNumber']==null){
                                            echo('<input type="text" name="phoneNumber" id="phoneNumber" value="'. $profileDetails[0]["phoneNumber"].'">');
                                        }
                                        else{
                                            echo ('<input type="text" name="phoneNumber" id="phoneNumber" value="'. $_SESSION['phoneNumber'].'">');
                                            }
                                        ?>
                                </div>
                            </li>
                            <div class="buttons">
                                <button class="danger">Cancel</button>
                                <button type="submit" name="submit" class="save">Save</button>
                            </div>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    include_once 'footer.php';
?>