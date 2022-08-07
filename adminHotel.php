<?php
    include_once "adminHeader.php";
?>
    <div class='profileContainer'>
        <div class="profileNav admin">
            <div>
                <li class="tabs"><a href="adminDashboard.php">Dashboard</a></li>
                <li class="tabs"><a href="adminBooking.php">Booking</a></li>
                <li class="tabs current"><a href="adminHotel.php">Hotel</a></li>
                <li class="tabs"><a href="adminUser.php">Users</a></li>
            </div>
        </div>
        <div class="profileContent admin">
            <div class="personalDetails">
                <div class="headding">
                    <h2>Hotels</h2>
                </div>
                <div class="information">
                    <div class="report">
                        <h2>Hotel Details</h2>
                        <table class="reportTable">
                            <thead>
                                <th>Hotel Id</th>
                                <th>Hotel Name</th>
                                <th>Street Name</th>
                                <th>Suburb</th>
                                <th>City</th>
                                <th>Postcode</th>
                                <th>Country</th>
                            </thead>
                            <tbody>
                            <?php
                                    $hotelRecords = $_SESSION["hotelRecords"];
                                    for ($i=0; $i <count($hotelRecords) ; $i++) { 
                                        echo('<tr>'.
                                    '<td>'.$hotelRecords[$i]["hotel_id"].'</td>'.
                                    '<td>'.$hotelRecords[$i]["hotel_name"].'</td>'.
                                    '<td>'.$hotelRecords[$i]["street_name"].'</td>'.
                                    '<td>'.$hotelRecords[$i]["suburb"].'</td>'.
                                    '<td>'.$hotelRecords[$i]["city"].'</td>'.
                                    '<td>'.$hotelRecords[$i]["postcode"].'</td>'.
                                    '<td>'.$hotelRecords[$i]["country"].'</td>'.
                                    '</tr>');
                                    }   
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="hotel_table">
       
        </div>
    </div>
</body>

</html>