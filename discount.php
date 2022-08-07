<?php
    include_once "header.php";
?>
    <div class="searchblock afterSearchBlock selective">
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
    <h1 class="contentSection headding">Discounts</h1>
    <section class="contentSection" id="discounts">
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


            <div class="hotel">
                <span class="discount">-45%</span>
                <img src="https://images.unsplash.com/photo-1574691250077-03a929faece5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80" alt="Little National Hotel">
                <div class="content">
                    <h3 class="name">Little National Hotel</h3>
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
                        <a href="hotelPage.php?hotelName=Little National Hotel"><button class="btn">View</button></a>
                    </div>

                </div>
            </div>

            <div class="hotel">
                <span class="discount">-30%</span>
                <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Meriton Suites">
                <div class="content">
                    <h3 class="name">Meriton Suites</h3>
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
                        <a href="hotelPage.php?hotelName=Meriton Suites"><button class="btn">View</button></a>
                    </div>
                </div>
            </div>



            <div class="hotel">
                <span class="discount">-10%</span>
                <img src="https://images.unsplash.com/photo-1574060603747-421196bce3f4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80" alt="Duxton Hotel">
                <div class="content">
                    <h3 class="name">Duxton Hotel</h3>
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
                        <a href="hotelPage.php?hotelName=Duxton Hotel"><button class="btn">View</button></a>
                    </div>
                </div>
            </div>
    </section>


<?php
    include_once "footer.php";
?>