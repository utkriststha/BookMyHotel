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
    <h1 class="contentSection headding">Explore</h1>
    <section class="contentSection" id="explore">
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


            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1618032593076-64793c24427d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" alt="">
                <div class="content">
                    <h3 class="name">Tasmania</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">280 Hotels</h4>
                        <a href="includes/explore.inc.php?city=Tasmania"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>

            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1562161092-01d53ec54edd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" alt="">
                <div class="content">
                    <h3 class="name">Perth</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">199 Hotels</h4>
                        <a href="includes/explore.inc.php?city=Perth"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>

            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1611840717112-30daa589f13b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="">
                <div class="content">
                    <h3 class="name">Melbourne</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">309 Hotels</h4>
                        <a href="includes/explore.inc.php?city=Melbourne"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include_once "footer.php";
?>