<?php
    include_once 'header.php';
?>
    <div class='profileContainer'>
        <div class="profileNav">
            <div>
                <li class="tabs"><a href="userProfile.php">Personal Details</a></li>
                <li class="tabs current"><a href="userProfilePreference.php">Preference</a></li>
                <li class="tabs"><a href="userProfilePayment.php">Payment Details</a></li>
                <li class="tabs"><a href="userProfileSecurity.php">Security</a></li>
            </div>
        </div>
        <div class="profileContent">

            <div class="preference">
                <div class="headding">
                    <div>
                        <h2>Preference</h2>
                        <h4>Update your preference</h4>
                    </div>
                </div>
                <div class="information">
                    <form>
                        <ul>
                            <li>
                                <div>
                                    <label for="Currency">Currency</label>
                                    <select id="Currency" name="Currency">
                                        <option value>AUD</option>
                                        <option value="usd">USD</option>
                                        <option value="npr">NPR</option>
                                        <option value="pkr">PKR</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="language">Language</label>
                                    <select id="language" name="language">
                                    <option value>English</option>
                                    <option value="nepali">Nepali</option>
                                    <option value="urdu">Urdu</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="emailNotification">Do you want email notification?</label>
                                    <select id="emailNotification" name="emailNotification">
                                    <option value>Yes</option>
                                    <option value="no">No</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="email">Notification send to </label>
                                    <input type="email" name="email" id="email" placeholder="utkrist.shrestha12@gmail.com">
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="guestNum">Default number of Guests</label>
                                    <input type="number" name="guestNum" id="guestNum" placeholder="3">
                                </div>
                            </li>

                            <div class="buttons">
                                <button class="danger">Cancel</button>
                                <button class="save">Save</button>
                            </div>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once 'footer.php';
?>