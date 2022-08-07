<?php
    include_once "adminHeader.php";
?>
    <div class='profileContainer'>
        <div class="profileNav admin">
            <div>
                <li class="tabs"><a href="adminDashboard.php">Dashboard</a></li>
                <li class="tabs"><a href="adminBooking.php">Booking</a></li>
                <li class="tabs"><a href="adminHotel.php">Hotel</a></li>
                <li class="tabs current"><a href="adminUser.php">Users</a></li>
            </div>
        </div>
        <div class="profileContent admin">
            <div class="personalDetails">
                <div class="headding">
                    <h2>User Details</h2>
                </div>
                <div class="information">
                    <div class="report">
                        <h2>User Details</h2>
                        <table class="reportTable">
                            <thead>
                                <th>Id</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                            </thead>
                            <tbody>
                            <?php
                                    $userRecords = $_SESSION["userRecords"];
                                    for ($i=0; $i <count($userRecords) ; $i++) { 
                                        echo('<tr>'.
                                    '<td>'.$userRecords[$i]["userID"].'</td>'.
                                    '<td>'.$userRecords[$i]["firstName"]." ".$userRecords[$i]["lastName"].'</td>'.
                                    '<td>'.$userRecords[$i]["username"].'</td>'.
                                    '<td>'.$userRecords[$i]["gender"].'</td>'.
                                    '<td>'.$userRecords[$i]["DOB"].'</td>'.
                                    '<td>'.$userRecords[$i]["email"].'</td>'.
                                    '<td>'.$userRecords[$i]["phoneNumber"].'</td>'.
                                    '<td>'.$userRecords[$i]["country"].'</td>'.
                                    '</tr>');
                                    }   
                                ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>