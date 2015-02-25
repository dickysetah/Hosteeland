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
                                <p>Change Your Password</p>
                        </div>
                        <div class="content-listings-soc">
                            <div class="content-wrap">
                                <div class="content-listings">
                                    <form>
                                    Old Password    <input class="name" type="password" name="usrname"><br>
                                    New Password    <input class="name" type="password" name="usrname"><br>
                                    Confirm Password    <input class="name" type="password" name="usrname"><br><br>
                                    </form>
                            </div>
                            </div>
                            <button class="pass" type="submit" value="Save">Update Password</button>
                        </div>
                    </div>
            </div>