<?php
    include_once "header.php";
?>
    <div class="searchblock">
        <h2>Search for hotels..</h2>
        <br>
        <form action="includes/search.inc.php" method="POST">
            <ul class="searchbar">
                <li class="location"><input type="text" name="location" id="location" placeholder="Enter suburb or postcode" required></li>
                <li class="checkin"><input type="text" name="checkInDate" id="checkin" placeholder="Check In" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}"></li>
                <li class="checkout"><input type="text" name="checkOutDate" id="checkout" placeholder="Checkout" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}"></li>
                <li class="guests"><input type="text" name="numberOfGuests" id="guests" placeholder="Guests"></li>
                <button type = "submit" class="searchbtn" name ="submit_index"><i class="fas fa-search"></i></button>
            </ul>
        </form>
    </div>

    <section class="contentSection" id="catagories">
        <div class="headingbar">
            <h1 class="heading">Catagories</h1>
            <a href="categories.php"><button class="more btnTop">More</button></a>
        </div>

        <div class="container">

            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1568624762916-a97d652769d3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fHN5ZG5leSUyMGNpdHl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                <div class="content">
                    <h3 class="name">City View</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">9,385 Hotel</h4>
                        <a href="includes/categories.inc.php?category=City View"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>

            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1569314516237-411aa03c2a44?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGJlYWNoc2lkZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                <div class="content">
                    <h3 class="name">Beachside</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">12,345 Hotel</h4>
                        <a href="includes/categories.inc.php?category=Beachside"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>

            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1621788549737-49fe7172aab5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fGNvdHRhZ2UlMjBob3RlbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                <div class="content">
                    <h3 class="name">Cottage</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">11,678 Hotel</h4>
                        <a href="includes/categories.inc.php?category=Cottage"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>
            <a href="categories.php"><button class="more btnBottom">More</button></a>
        </div>
    </section>

    <section class="contentSection" id="discounts">

        <div class="headingbar">
            <h1 class="heading">Discounts</h1>
            <a href="discount.php"><button class="more btnTop">More</button></a>
        </div>

        <div class="container">

            <div class="hotel">
                <span class="discount">-45%</span>
                <img src="https://images.unsplash.com/photo-1622396481608-de991f7727af?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw5fHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt="">
                <div class="content">
                    <h3 class="name">Hotel Sangrila</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <hr>
                    <div class="view">
                        <h4 class="price">AU$210</h4>
                        <a href="hotelPage.php?hotelName=Hotel Sangrila"><button class="btn">View</button></a>
                    </div>

                </div>
            </div>

            <div class="hotel">
                <span class="discount">-30%</span>
                <img src="https://images.unsplash.com/photo-1622405631950-d9fae1bf0c10?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyOXx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt="">
                <div class="content">
                    <h3 class="name">Hotel Pokhara</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <hr>
                    <div class="view">
                        <h4 class="price">AU$190</h4>
                        <a href="hotelPage.php?hotelName=Hotel Pokhara"><button class="btn">View</button></a>
                    </div>
                </div>
            </div>

            <div class="hotel">
                <span class="discount">-10%</span>
                <img src="https://images.unsplash.com/photo-1621370115429-9758ccdf88f8?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4Nnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" alt="">
                <div class="content">
                    <h3 class="name">Hotel Tepu</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <hr>
                    <div class="view">
                        <h4 class="price">AU$240</h4>
                        <a href="hotelPage.php?hotelName=Hotel Tepu"><button class="btn">View</button></a>
                    </div>
                </div>
            </div>
            <a href="discount.php"><button class="more btnBottom">More</button></a>
        </div>

    </section>

    <section class="contentSection" id="explore">
        <div class="headingbar">
            <h1 class="heading">Explore</h1>
            <a href="explore.php"><button class="more btnTop">More</button></a>
        </div>

        <div class="container">

            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1590716209211-ea74d5f63573?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fHN5ZG5leSUyMGNpdHl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                <div class="content">
                    <h3 class="name">Sydney</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">380 Hotels</h4>
                        <a href="includes/explore.inc.php?city=Sydney"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>

            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1591701729564-3b5325d5a4bd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Z29sZCUyMGNvYXN0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                <div class="content">
                    <h3 class="name">Gold Coast</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">189 Hotels</h4>
                        <a href="includes/explore.inc.php?city=Gold Coast"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>

            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1510546020578-a35ae9fcfb0f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y2FuYmVycmF8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                <div class="content">
                    <h3 class="name">Canberra</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">109 Hotels</h4>
                        <a href="includes/explore.inc.php?city=Canberra"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>
            <a href="explore.php"><button class="more btnBottom">More</button></a>
        </div>
    </section>

<?php
    include_once 'footer.php';
?>