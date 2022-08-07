<?php
    include_once 'header.php';
?>
    <div class='profileContainer'>
        <div class="profileNav">
            <div>
                <li class="tabs"><a href="userProfile.php">Personal Details</a></li>
                <li class="tabs"><a href="userProfilePreference.php">Preference</a></li>
                <li class="tabs"><a href="userProfilePayment.php">Payment Details</a></li>
                <li class="tabs current"><a href="userProfileSecurity.php">Security</a></li>
            </div>
        </div>
        <div class="profileContent">
            <div class="security">
                <div class="headding">
                    <div>
                        <h2>Security</h2>
                        <h4>Change password and account setting</h4>
                    </div>
                </div>
                <div class="information">
                    <form>
                        <ul>
                            <li>
                                <div>
                                    <label for="changePassword">Change Password</label>
                                    <button name="changePassword" id="changePassword" class="append">Change</button>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="activity">Activity</label>
                                    <button name="activity" id="activity" class="primary">View</button>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="delAccount">Delete Account</label>
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