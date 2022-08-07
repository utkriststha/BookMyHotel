<?php
    include_once 'header.php';
?>
    <div class="searchblock afterSearchBlock">
        <form action="includes/search.inc.php" method="POST">
            <ul class="searchbar">
                <li class="location"><input type="text" name="location" id="location" placeholder="Sydney" required></li>
                <li class="checkin"><input type="text" name="checkInDate" id="checkin" placeholder="Check In" onfocus="(this.type='date')" onblur="if(this.placeholder==''){this.type='text'}"></li>
                <li class="checkout"><input type="text" name="checkOutDate" id="checkout" placeholder="Checkout" onfocus="(this.type='date')" onblur="if(this.placeholder==''){this.type='text'}"></li>
                <li class="guests"><input type="text" name="numberOfGuests" id="guests" place holder="3"></li>
                <button type="submit" name="submit_after_Search"  class="searchbtn"><i class="fas fa-search"></i></button>
            </ul>
        </form>

    </div>

    <div class='resultContainer'>
        <div class="resultNav">
            <h1>Search</h1>
            <form action="includes/search.inc.php" method="POST">
                <ul class="searchbar">
                    <li class="location"><input type="text" name="location" id="location" placeholder ="Enter a suburb" required></li>
                    <li class="checkin"><input type="text" name="checkInDate" id="checkin" placeholder="Check In" onfocus="(this.type='date')" onblur="if(this.placeholder==''){this.type='text'}"></li>
                    <li class="checkout"><input type="text" name="checkOutDate" id="checkout" placeholder="Checkout" onfocus="(this.type='date')" onblur="if(this.placeholder==''){this.type='text'}"></li>
                    <li class="guests">
                        <input type="text" name="numberOfGuests" id="guests" placeholder="Guest">
                        <button type="submit" name="submit_after_Search"  class="searchbtn">Search</button>
                    </li>
                </ul>
            </form>
        </div>

        
        <div class="resultContent">
            <div class="headding">
                <?php
                    echo "<h2>" . $_SESSION["totalResult"]. " hotels found"."</h2>";
                ?>
                <h4>Search in Sydney between anytime for 2 guests</h4>
            </div>

            <?php
            if($_SESSION["totalResult"]<=0){
            echo '<div class="resultHotels disableDiv">';
            }
            else{
            echo '<div class="resultHotels">';
            }
            ?>

                <div class="hotel">
                    <img class="mainImg" src="https://images.unsplash.com/photo-1568624762916-a97d652769d3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fHN5ZG5leSUyMGNpdHl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                    <div class="details">
                        <div>
                            <div class="name">

                                <?php
                                    $hotelInfo = $_SESSION["hotelInfo"];
                                    echo "<h2>" . $hotelName=$hotelInfo[0]["hotel_name"]. "</h2>";
                                ?>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="subDetail">
                                <?php
                                $hotelAddress = $_SESSION["hotelAddress"];
                                 echo "<h4>"
                                 . $hotelAddress[0]["street_name"].", "
                                 . $hotelAddress[0]["suburb"].", "
                                 . $hotelAddress[0]["state"].", "
                                 . $hotelAddress[0]["postcode"].", "
                                 . $hotelAddress[0]["city"]
                                 ."</h4>";
                                 echo "<h4>"
                                 .$hotelInfo[0]["rating"]. " rating"
                                 ."<span>&#183;</span>"
                                 .$hotelInfo[0]["review"]. " reviews"
                                 ."</h4>";
                                ?>
                            </div>
                        </div>
                        <?php
                            echo "<p>".$hotelInfo[0]["hotel_description"]. "</p>";
                        ?>
                    </div>
                    <div class="sidebar">
                        <img class="sideImg" src="https://images.unsplash.com/photo-1567636788276-40a47795ba4d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGhvdGVsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.423614531296!2d151.2115826153267!3d-33.87874238065347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae1710c8d379%3A0xebe5801ff7f61459!2sCharles%20Sturt%20University%20Study%20Centres%2C%20Sydney!5e0!3m2!1sen!2sau!4v1627895462110!5m2!1sen!2sau"
                                allowfullscreen="" loading="lazy">
                            </iframe>
                            <button class="mapbtn">Show Map</button>
                            <a href="hotelPage.php?data=<?=$hotelName?>"><button>View</button></a>
                            
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if($_SESSION["totalResult"]<=1){
            echo '<div class="resultHotels disableDiv">';
            }
            else{
            echo '<div class="resultHotels">';
            }
            ?>
                <div class="hotel">
                    <img class="mainImg" src="https://images.unsplash.com/photo-1567636788276-40a47795ba4d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGhvdGVsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                    <div class="details">
                        <div>
                            <div class="name">

                                <?php
                                    echo "<h2>" . $hotelName=$hotelInfo[1]["hotel_name"]. "</h2>";
                                ?>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="subDetail">
                                <?php
                                 echo "<h4>"
                                 . $hotelAddress[1]["street_name"].", "
                                 . $hotelAddress[1]["suburb"].", "
                                 . $hotelAddress[1]["state"].", "
                                 . $hotelAddress[1]["postcode"].", "
                                 . $hotelAddress[1]["city"]
                                 ."</h4>";
                                 echo "<h4>"
                                 .$hotelInfo[1]["rating"]. " rating"
                                 ."<span>&#183;</span>"
                                 .$hotelInfo[1]["review"]. " reviews"
                                 ."</h4>";
                                ?>
                            </div>
                        </div>
                        <?php
                            echo "<p>" .$hotelInfo[1]["hotel_description"]. "</p>";
                        ?>
                    </div>
                    <div class="sidebar">
                        <img class="sideImg" src="https://images.unsplash.com/photo-1569314516237-411aa03c2a44?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGJlYWNoc2lkZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.423614531296!2d151.2115826153267!3d-33.87874238065347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae1710c8d379%3A0xebe5801ff7f61459!2sCharles%20Sturt%20University%20Study%20Centres%2C%20Sydney!5e0!3m2!1sen!2sau!4v1627895462110!5m2!1sen!2sau"
                                allowfullscreen="" loading="lazy">
                            </iframe>
                            <button class="mapbtn">Show Map</button>
                            <a href="hotelPage.php?data=<?=$hotelName?>"><button>View</button></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            if($_SESSION["totalResult"]<=2){
            echo '<div class="resultHotels disableDiv">';
            }
            else{
            echo '<div class="resultHotels">';
            }
            ?>

            
                <div class="hotel">
                    <img class="mainImg" src="https://images.unsplash.com/photo-1611821261180-8e6867e77288?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80" alt="">
                    <div class="details">
                        <div>
                            <div class="name">

                                <?php
                                    echo "<h2>" . $hotelName=$hotelInfo[2]["hotel_name"]. "</h2>";
                                ?>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="subDetail">
                                <?php
                                 echo "<h4>"
                                 . $hotelAddress[2]["street_name"].", "
                                 . $hotelAddress[2]["suburb"].", "
                                 . $hotelAddress[2]["state"].", "
                                 . $hotelAddress[2]["postcode"].", "
                                 . $hotelAddress[2]["city"]
                                 ."</h4>";
                                 echo "<h4>"
                                 .$hotelInfo[2]["rating"]. " rating"
                                 ."<span>&#183;</span>"
                                 .$hotelInfo[2]["review"]. " reviews"
                                 ."</h4>";
                                ?>
                            </div>
                        </div>
                        <?php
                            echo "<p>" .$hotelInfo[2]["hotel_description"]. "</p>";
                        ?>
                    </div>
                    <div class="sidebar">
                        <img class="sideImg" src="https://images.unsplash.com/photo-1569314516237-411aa03c2a44?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGJlYWNoc2lkZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.423614531296!2d151.2115826153267!3d-33.87874238065347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae1710c8d379%3A0xebe5801ff7f61459!2sCharles%20Sturt%20University%20Study%20Centres%2C%20Sydney!5e0!3m2!1sen!2sau!4v1627895462110!5m2!1sen!2sau"
                                allowfullscreen="" loading="lazy">
                            </iframe>
                            <button class="mapbtn">Show Map</button>
                            <a href="hotelPage.php?data=<?=$hotelName?>"><button>View</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if($_SESSION["totalResult"]<=3){
            echo '<div class="resultHotels disableDiv">';
            }
            else{
            echo '<div class="resultHotels">';
            }
            ?>

                <div class="hotel">
                    <img class="mainImg" src="https://images.unsplash.com/photo-1567636788276-40a47795ba4d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGhvdGVsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                    <div class="details">
                        <div>
                            <div class="name">

                                <?php
                                    echo "<h2>" . $hotelName=$hotelInfo[3]["hotel_name"]. "</h2>";
                                ?>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="subDetail">
                                <?php
                                 echo "<h4>"
                                 . $hotelAddress[3]["street_name"].", "
                                 . $hotelAddress[3]["suburb"].", "
                                 . $hotelAddress[3]["state"].", "
                                 . $hotelAddress[3]["postcode"].", "
                                 . $hotelAddress[3]["city"]
                                 ."</h4>";
                                 echo "<h4>"
                                 .$hotelInfo[3]["rating"]. " rating"
                                 ."<span>&#183;</span>"
                                 .$hotelInfo[3]["review"]. " reviews"
                                 ."</h4>";
                                ?>
                            </div>
                        </div>
                        <?php
                            echo "<p>" .$hotelInfo[3]["hotel_description"]. "</p>";
                        ?>
                    </div>
                    <div class="sidebar">
                        <img class="sideImg" src="https://images.unsplash.com/photo-1567636788276-40a47795ba4d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGhvdGVsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.423614531296!2d151.2115826153267!3d-33.87874238065347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae1710c8d379%3A0xebe5801ff7f61459!2sCharles%20Sturt%20University%20Study%20Centres%2C%20Sydney!5e0!3m2!1sen!2sau!4v1627895462110!5m2!1sen!2sau"
                                allowfullscreen="" loading="lazy">
                            </iframe>
                            <button class="mapbtn">Show Map</button>
                            <a href="hotelPage.php?data=<?=$hotelName?>"><button>View</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if($_SESSION["totalResult"]<=4){
            echo '<div class="resultHotels disableDiv">';
            }
            else{
            echo '<div class="resultHotels">';
            }
            ?>


                <div class="hotel">
                    <img class="mainImg" src="https://images.unsplash.com/photo-1567636788276-40a47795ba4d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGhvdGVsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                    <div class="details">
                        <div>
                            <div class="name">

                                <?php
                                    echo "<h2>" . $hotelName=$hotelInfo[4]["hotel_name"]. "</h2>";
                                ?>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="subDetail">
                                <?php
                                 echo "<h4>"
                                 . $hotelAddress[4]["street_name"].", "
                                 . $hotelAddress[4]["suburb"].", "
                                 . $hotelAddress[4]["state"].", "
                                 . $hotelAddress[4]["postcode"].", "
                                 . $hotelAddress[4]["city"]
                                 ."</h4>";
                                 echo "<h4>"
                                 .$hotelInfo[4]["rating"]. " rating"
                                 ."<span>&#183;</span>"
                                 .$hotelInfo[4]["review"]. " reviews"
                                 ."</h4>";
                                ?>
                            </div>
                        </div>
                        <?php
                            echo "<p>" .$hotelInfo[4]["hotel_description"]. "</p>";
                        ?>
                    </div>
                    <div class="sidebar">
                        <img class="sideImg" src="https://images.unsplash.com/photo-1567636788276-40a47795ba4d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGhvdGVsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.423614531296!2d151.2115826153267!3d-33.87874238065347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae1710c8d379%3A0xebe5801ff7f61459!2sCharles%20Sturt%20University%20Study%20Centres%2C%20Sydney!5e0!3m2!1sen!2sau!4v1627895462110!5m2!1sen!2sau"
                                allowfullscreen="" loading="lazy">
                            </iframe>
                            <button class="mapbtn">Show Map</button>
                            <a href="hotelPage.php?data=<?=$hotelName?>"><button>View</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </div>
<?php
    include_once 'footer.php';
?>