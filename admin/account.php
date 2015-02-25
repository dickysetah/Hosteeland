            <div class="listings-content">
                <div class="site-listings-content">
                    <div class="side-listings-wrapper">
                        <div class="side-listings">
                            <ul>
                                <?php
                                    if ($_GET["page"] == "notifications") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=notifications">Notifications</a></li>';
                                    }else{
                                        if ($_GET["p"] == "notifications") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=notifications">Notifications</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=notifications">Notifications</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "payment-methods") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=payment-methods">Payment Methods</a></li>';
                                    }else{
                                        if ($_GET["p"] == "trust-and-verification") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=payment-methods">Payment Methods</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=payment-methods">Payment Methods</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "payout-preferences") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=payout-preferences">Payout Preferences</a></li>';
                                    }else{
                                        if ($_GET["p"] == "payout-preferences") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=payout-preferences">Payout Preferences</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=payout-preferences">Payout Preferences</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "transaction-history") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=transaction-history">Transaction History</a></li>';
                                    }else{
                                        if ($_GET["p"] == "transaction-history") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=transaction-history">Transaction History</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=transaction-history">Transaction History</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "privacy") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=privacy">Privacy</a></li>';
                                    }else{
                                        if ($_GET["p"] == "privacy") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=privacy">Privacy</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=privacy">Privacy</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "security") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=security">Security</a></li>';
                                    }else{
                                        if ($_GET["p"] == "security") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=security">Security</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=security">Security</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "settings") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=settings">Settings</a></li>';
                                    }else{
                                        if ($_GET["p"] == "settings") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=settings">Settings</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=settings">Settings</a></li>';
                                        }
                                    }                                    
                                ?>
                                <br></br>
                                <a class="view-prof" href="">Invite Friends</a>
                            </ul>
                        </div>
                    </div>
                    <div class="listings-wrapper">
                        <div class="header-listings-wrapper">
                                <p>Mobile Notifications/Text Messages</p>
                        </div>
                        <div class="content-listings-acc">
                            <div class="content-wrapper">
                                <div class="left-content">
                                    <h5>Mobile Phone</h5>
                                    <p>Receive mobile updates by<br> regular SMS text message.</p>
                                </div>
                                <div class="right-content">You can add and verify phone numbers on your account from the <span><a href="#">Edit Profile section.</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="listings-wrapper">
                        <div class="header-listings-wrapper">
                                <p>Email Settings</p>
                        </div>
                        <div class="content-listings-acc">
                            <div class="content-wrapper">
                                <div class="left-content">
                                    <h6>I want to receive:</h6>
                                    <p>You can disable these at any time.</p>
                                </div>
                                <div class="right-content">
                                    <ul>
                                        <li><label><input class="fasil" type="checkbox" name="checkbox" value="value"> General promotions, updates, news about Hosteland or general promotions for partner campaigns and services, user surveys, inspiration, and love from Hosteeland.</label></li>
                                        <li><label><input class="fasil" type="checkbox" name="checkbox" value="value"> Reservation and review reminders.</label></li>
                                    </ul>
                                </div>
                            </div>
                            <button class="subprof" type="submit" value="Save">Save</button>
                        </div>
                    </div>
                </div>
            </div>