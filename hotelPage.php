<?php 
    include_once "header.php";
    // displaying hotel name based on the button clicked.
    echo "<div class='hotelTitle'>";
    if (isset($_GET['hotelName'])){
        $_SESSION['name']= $_GET['hotelName'];
        echo  "<h1>".$_GET['hotelName']."</h1>";
    }
    else{
        $_SESSION['name']= $_GET['data'];
        echo  "<h1>".$_GET['data']."</h1>";
    }
?>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="https://pix10.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?s=1024x768" style="width:100%;height: 500px;">
            <div class="text">Entrance</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8aG90ZWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" style="width:100%;height: 500px;">
            <div class="text">Swimming Pool</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="https://media.radissonhotels.net/image/radisson-brand/guestroom/16256-115887-f64430522_3xl.jpg?impolicy=HomeHero" style="width:100%;height: 500px;">
            <div class="text">Rooms</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <!-- </div> -->

    <div class="hotelDetails">
        <div class="description">
            <div class="column">
                <p>Sense Pavillion features a restaurant, shared lounge, a garden and terrace in Horana. The accommodation provides a 24-hour front desk and room service for guests. Guest rooms at the hotel are equipped with a seating area, a flat-screen
                    TV with satellite channels and a private bathroom with a hairdryer and a shower. Continental and buffet breakfast options are available daily at Sense Pavillion. Guests at the accommodation will be able to enjoy activities in and around
                    Horana, like cycling and fishing</p>
            </div>
            <div class="column">
                <p>Sense Pavillion features a restaurant, shared lounge, a garden and terrace in    Horana. The accommodation provides a 24-hour front desk and room service for guests. Guest rooms at the hotel are equipped with a seating area, a flat-screen
                    TV with satellite channels and a private bathroom with a hairdryer and a shower. Continental and buffet breakfast options are available daily at Sense Pavillion. Guests at the accommodation will be able to enjoy activities in and around
                    Horana, like cycling and fishing

            </div>
        </div>
        <h1>Popular Facilities</h1>
        <div class="description">
            <div class="column">
                <ul>
                    <h2>Bathroom:</h2>
                    <li>Toilet paper</li>
                    <li>Towels</li>
                    <li>Towels/sheets (extra fee)</li>
                    <li>Bath or shower</li>
                    <li>Private bathroom</li>
                    <li>Toilet</li>
                    <li>Free toiletries</li>
                    <li>Hairdryer</li>
                    <li>Shower</li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <h2>Outdoors:</h2>
                    <li>Outdoor furniture</li>
                    <li>Balcony</li>
                    <li>Terrace</li>
                    <li>Garden</li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <h2>General:</h2>
                    <li>Paid WiFi</li>
                    <li>Air conditioning</li>
                    <li>Tile/marble floor</li>
                    <li>Private entrance</li>
                    <li>Fan</li>
                    <li>Family rooms</li>
                    <li>Ironing facilities</li>
                    <li>Air conditioning</li>
                </ul>

            </div>
            <div class="column">
                <ul>
                    <h2>Food & Drink:</h2>
                    <li>Fruits </li>
                    <li>Additional charge</li>
                    <li>Bottle of water </li>
                    <li>Additional charge</li>
                    <li>Restaurant</li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <h2>Parking:</h2>
                    <li>Secure parking</li>
                    <li>Accessible</li>
                    <li>Valet parking service</li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <h2>Health:</h2>
                    <li>Nearby hospital</li>
                    <li>Fitness center</li>
                    <li>Gym</li>
                    <li>Sauna and Steam room</li>
                </ul>
            </div>
        </div>

        <div class="description">
            <div class="column">
                <h1>Location</h1>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.423614531296!2d151.2115826153267!3d-33.87874238065347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae1710c8d379%3A0xebe5801ff7f61459!2sCharles%20Sturt%20University%20Study%20Centres%2C%20Sydney!5e0!3m2!1sen!2sau!4v1627895462110!5m2!1sen!2sau"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="column">
                <h1>Ratings and Reviews</h1>
                <div class="subHeading">
                    <div class="reviews">
                        <div class="stars">
                            <i class="fas fa-star fa-3x"></i>
                            <i class="fas fa-star fa-3x"></i>
                            <i class="fas fa-star fa-3x"></i>
                            <i class="fas fa-star fa-3x"></i>
                            <i class="fas fa-star fa-3x"></i>
                        </div>
                        <h4>8.6 Rating <span>&#183;</span> 5,678 Reviews</h4>
                    </div>
                    <!-- <button class="readMorebtn">
                        Read More
                    </button> -->
                </div>

                <div class="container">
                    <img src="https://randomuser.me/api/portraits/men/30.jpg" alt="Avatar" style="width:90px">
                    <div>
                        <h3>Chris Fox</h3>
                        <p>Guests at the accommodation will be able to enjoy activities in and around Horana, like cycling and fishing.</p>
                    </div>
                </div>

                <div class="container">
                    <img src="https://randomuser.me/api/portraits/women/82.jpg" alt="Avatar" style="width:90px">
                    <div>
                        <h3>Magham Smith</h3>
                        <p>Guests at the accommodation will be able to enjoy activities in and around Horana, like cycling and fishing.</p>
                    </div>
                </div>
                <div class="container">
                    <img src="https://randomuser.me/api/portraits/women/60.jpg" alt="Avatar" style="width:90px">
                    <div>
                        <h3>Emma Bishop</h3>
                        <p>Guests at the accommodation will be able to enjoy activities in and around Horana, like cycling and fishing.</p>
                    </div>
                </div>
            </div>
        </div>

        <h1>Available Rooms</h1>
        <div class="bookRoom">
            <?php
                if(isset($_SESSION["isLogedIn"])){
            ?>
                <form action="includes/booking.inc.php" method="post">
                <?php
                }
                else{
                    echo('<form action="login.php?login=notlogedin" method="post">');
                }
            ?>

            <table class="roomTable">
                <thead>
                    <th>Room Type</th>
                    <th>Guests</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Select Rooms</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Standard Single bedroom</td>
                        <td>2</td>
                        <td>
                            <ul>
                                <li>Breakfast Included</li>
                                <li>Beautiful Harbour View</li>
                                <li>10% Discount in the Gift Shop</li>
                            </ul>
                        </td>
                        <td><input name ="singleBedPrice" value="$200" readonly></td>
                        <td>
                            <input type="number" name = "single" value="0">
                        </td>
                    </tr>
                    <tr>
                        <td>Standard Double Bedroom</td>
                        <td>
                        4
                        </td>
                        <td>
                            <ul>
                                <li>Breakfast Included</li>
                                <li>Beautiful Harbour View</li>
                                <li>10% Discount in the Gift Shop</li>
                            </ul>
                        </td>
                        <td><input name ="doubleBedPrice" value="$250" readonly></td>
                        <td>
                            <input type="number" name = "double" placeholder="0">
                        </td>
                    </tr>
                    <tr>
                        <td>Standard Three Bedroom</td>
                        <td>6</td>
                        <td>
                            <ul>
                                <li>Breakfast Included</li>
                                <li>Beautiful Harbour View</li>
                                <li>10% Discount in the Gift Shop</li>
                            </ul>
                        </td>
                        <td><input name ="threeBedPrice" value="$300" readonly></td>
                        <td>
                            <input type="number" name = "three" placeholder="0">
                        </td>
                    </tr>
                    <tr>
                        <td>Royal Suite</td>
                        <td>10</td>
                        <td>
                            <ul>
                                <li>Breakfast Included</li>
                                <li>Beautiful Harbour View</li>
                                <li>10% Discount in the Gift Shop</li>
                            </ul>
                        </td>
                        <td><input name ="royalPrice" value="$500" readonly></td>
                        <td>
                            <input type="number" name = "suite" placeholder="0">
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php
                if (isset($_GET["error"])) {
                    // Error handling for not selecting room.
                    if ($_GET["error"]== "roomnotselected") {
                            echo '<div class="alert">
                            <p>Room Not Selected !</p>
                        </div>';
                    }
                }
                ?>
            <div class="reserveBar">
                <h4>Note: Select the rooms you want to reserver and press reserve button</h4>
                <button name = "paymentButton" class="reservebtn">Book</button>              
            </div>
            </form>
        </div>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 4000);
        }
    </script>

<?php 
    include_once "footer.php";
?>