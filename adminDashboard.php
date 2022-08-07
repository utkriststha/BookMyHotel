<?php
    include_once "adminHeader.php";
?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Booking', 'Hotel', 'Users', 'View', 'Enquiry', 'Average'],
                ['Jan', 165, 938, 522, 998, 450, 614.6],
                ['Feb', 135, 1120, 599, 1268, 288, 682],
                ['Mar', 157, 1167, 587, 807, 397, 623],
                ['Apr', 139, 1110, 615, 968, 215, 609.4],
                ['May', 136, 691, 629, 1026, 366, 569.6],
                ['Jun', 136, 691, 629, 1026, 366, 569.6],
                ['Jul', 136, 691, 629, 1026, 366, 569.6],
                ['Aug', 136, 691, 629, 1026, 366, 569.6],
                ['Sep', 136, 691, 629, 1026, 366, 569.6]
            ]);

            var options = {
                // title: 'Monthly Evaluation',
                vAxis: {
                    title: 'Unit'
                },
                hAxis: {
                    title: 'Year'
                },
                seriesType: 'bars',
                series: {
                    5: {
                        type: 'line'
                    }
                }
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Income', 'Expenses'],
                ['Jan', 165, 93],
                ['Feb', 135, 112],
                ['Mar', 157, 116],
                ['Apr', 139, 111],
                ['May', 136, 691],
                ['Jun', 136, 691],
                ['Jul', 136, 691],
                ['Aug', 136, 691],
                ['Sep', 136, 691]
            ]);

            var options = {
                // title: 'Income and Expense Analysis',
                vAxis: {
                    title: 'AUD'
                },
                hAxis: {
                    title: 'Year'
                },
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>

    <div class='profileContainer'>
        <div class="profileNav admin">
            <div>
                <li class="tabs  current"><a href="adminDashboard.php">Dashboard</a></li>
                <li class="tabs"><a href="adminBooking.php">Booking</a></li>
                <li class="tabs"><a href="adminHotel.php">Hotel</a></li>
                <li class="tabs"><a href="adminUser.php">Users</a></li>
            </div>
        </div>
        <div class="profileContent admin">
            <div class="personalDetails">
                <div class="headding">
                    <h2>Dashboard</h2>
                </div>
                <div class="information">
                    <div class="tabs">
                        <div class="tab">
                            <i class="fas fa-bookmark"></i>
                            <div>
                                <h3>Booking</h3>
                                <h4>2,344</h4>
                            </div>
                        </div>
                        <div class="tab">
                            <i class="fas fa-hotel"></i>
                            <div>
                                <h3>Hotels</h3>
                                <h4>786</h4>
                            </div>
                        </div>
                        <div class="tab">
                            <i class="fas fa-user"></i>
                            <div>
                                <h3>Users</h3>
                                <h4>3,278</h4>
                            </div>
                        </div>
                        <div class="tab">
                            <i class="fas fa-dollar-sign"></i>
                            <div>
                                <h3>Revenue</h3>
                                <h4>$1.3M</h4>
                            </div>
                        </div>
                        <div class="tab">
                            <i class="fas fa-eye"></i>
                            <div>
                                <h3>Views</h3>
                                <h4>2.7M</h4>
                            </div>
                        </div>
                        <div class="tab">
                            <i class="fas fa-envelope-open-text"></i>
                            <div>
                                <h3>Enquiry</h3>
                                <h4>474</h4>
                            </div>
                        </div>
                    </div>
                    <div class="report">
                        <h2>Monthly Evaluation</h2>
                        <div id="chart_div" class="evaluation chart"></div>
                    </div>
                    <div class="report">
                        <h2>Income and Expenses Analysis</h2>
                        <div id="curve_chart" class="incomeExpense chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="maincolumn">
                    <div>
                        <h4>Book<span>My</span>Hotel</h4>
                        <p>Another step towards Australian tourism</p>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="columnblock">
                    <div class="column">
                        <ul>
                            <li><a href="BookMyHotel.html#home">Home</a></li>
                            <li><a href="BookMyHotel.html#catagories">Catagories</a></li>
                            <li><a href="BookMyHotel.html#discounts">Discounts</a></li>
                            <li><a href="BookMyHotel.html#explore">Explore</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class="copyright">Copyright &copy; 2021 BookMyHotel. Designed by G4</p>
    </footer> -->
</body>

</html>