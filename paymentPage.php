<?php
    include_once "header.php";
?>
    <div class="accountContainer">
        <section id="accountFormBlock">
            <div class="title">Payment</div>
            <div class="accountForm">
                <form action="includes/payment.inc.php" method="post">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                    <input type="text" name="email" placeholder="Email Address" required>
                    <input type="text" name="card_No" c placeholder="Card Number" required>
                    <div>
                        <input type="text" name="expiryNo" placeholder="MM/YY" required>
                        <input type="password" name="cvv" placeholder="CVV" required>
                    </div>
                    <button class="signupbutton" type="submit" name="submit">Confirm</button><br>
                </form>
            </div>
        </section>
    </div>
<?php    
    include_once "footer.php";
?>