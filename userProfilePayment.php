<?php
    include_once 'header.php';
?>
    <div class='profileContainer'>
        <div class="profileNav">
            <div>
                <li class="tabs"><a href="userProfile.php">Personal Details</a></li>
                <li class="tabs"><a href="userProfilePreference.php">Preference</a></li>
                <li class="tabs current"><a href="userProfilePayment.php">Payment Details</a></li>
                <li class="tabs"><a href="userProfileSecurity.php">Security</a></li>
            </div>
        </div>
        <div class="profileContent">
            <div class="payment">
                <div class="headding">
                    <div>
                        <h2>Payment details</h2>
                        <h4>Delete and Add card</h4>
                    </div>
                </div>
                <div class="information">
                    <form>
                        <ul>
                            <li>
                                <div>
                                    <label for="addCard">Add Card</label>
                                    <button name="addCard" id="addCard" class="append">Add</button>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>My Cards: </h3>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="ccn">OfficeCard</label>
                                    <input id="ccn" type="tel" readonly value="XXX XXX XXX 2179">
                                    <button name="activity" id="activity" class="primary">View</button>
                                    <button name="delAccount" id="delAccount" class="danger">Delete</button>
                                </div>
                                <div>
                                    <label for="ccn">PersonalCard</label>
                                    <input id="ccn" type="tel" readonly value="XXX XXX XXX 8929">
                                    <button name="activity" id="activity" class="primary">View</button>
                                    <button name="delAccount" id="delAccount" class="danger">Delete</button>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
    include_once 'footer.php';
?>