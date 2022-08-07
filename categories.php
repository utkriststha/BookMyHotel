<?php
    include_once 'header.php';
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
    <h1 class="contentSection headding">Catagories</h1>
    <section class="contentSection" id="catagories">
        <div class="container">

            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1568624762916-a97d652769d3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fHN5ZG5leSUyMGNpdHl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="City view Hotels">
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
                <img src="https://images.unsplash.com/photo-1569314516237-411aa03c2a44?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGJlYWNoc2lkZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Beachside Hotels">
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
                <img src="https://images.unsplash.com/photo-1621788549737-49fe7172aab5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fGNvdHRhZ2UlMjBob3RlbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Cottages">
                <div class="content">
                    <h3 class="name">Cottages</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">11,678 Hotel</h4>
                        <a href="includes/categories.inc.php?category=Cottage"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>



            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="Villas">
                <div class="content">
                    <h3 class="name">Villas</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">399,654 villas</h4>
                        <a href="includes/categories.inc.php?category=Villa"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>


            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1611821261180-8e6867e77288?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80" alt="Cabins">
                <div class="content">
                    <h3 class="name">Cabins</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">31,482 cabins</h4>
                        <a href="includes/categories.inc.php?category=Cabin"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>

            <div class="hotel">
                <img src="https://images.unsplash.com/photo-1561811358-21aef14f0551?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" alt="Resorts">
                <div class="content">
                    <h3 class="name">Resorts</h3>
                    <hr>
                    <div class="view">
                        <h4 class="properties">17,537 resorts</h4>
                        <a href="includes/categories.inc.php?category=Resort"><button type = "submit" name ="submit" class="btn">View</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include_once 'footer.php';
?>