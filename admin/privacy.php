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
                                <p>Social Connections</p>
                        </div>
                        <div class="content-listings-soc">
                            <div class="content-wrap">
                                <div class="content-listings">
                                <p class="under">Social Connections highlights your connections 
                                    to other members of the Hosteeland community.<br><br>
                                    Shown on your profile, Wish Lists, and in search results, 
                                    Social Connections helps you find Hosteeland users who are mutual friends, 
                                    people from your alma mater, or hosts that your friends recommend.<br><br>
                                    If you turn off this feature, all these connections will be hidden 
                                    from you and other people on both your profile, Wish Lists, and on your listings.<br>
                                </p><br><br>
                                <ul>
                                    <li><label><input class="fasil" type="checkbox" name="checkbox" value="value"> Show other Hosteeland users my social connections (recommended)</label></li>
                                </ul>
                            </div>
                            </div>
                            <button class="soccon" type="submit" value="Save">Save</button>
                        </div>
                        <div class="header-listings-wrapper">
                                <p>Add Hosteeeland to Facebook Timeline</p>
                        </div>
                        <div class="content-listings-soc">
                            <div class="content-wrap">
                                <div class="content-listings">
                                <p class="under">Check this box to automatically publish your Wish Lists to Facebook.<br><br>
                                    They'll show up in your Facebook Timeline and your friends' News Feed and Ticker.<br><br>
                                </p><br><br>
                                <ul>
                                    <li><label><input class="fasil" type="checkbox" name="checkbox" value="value"> Automatically publish Wish List stories to Facebook (recommended)</label></li>
                                </ul>
                            </div>
                            </div>
                            <button class="soccon" type="submit" value="Save">Save</button>
                        </div>
                        
                    </div>
            </div>