            <div class="listings-content">
                <div class="site-listings-content">
                    <div class="side-listings-wrapper">
                        <div class="side-listings">
                            <ul>
                                <?php
                                    if ($_GET["page"] == "manage-listings") {
                                        echo '<li><a class="aktif" href="index.php?p=listings&page=manage-listings">Manage Listings</a></li>';
                                    }else{
                                        if ($_GET["p"] == "manage-listings") {
                                            echo '<li><a class="aktif" href="index.php?p=listings&page=manage-listings">Manage Listings</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=listings&page=manage-listings">Manage Listings</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "reservation-listings") {
                                        echo '<li><a class="aktif" href="index.php?p=listings&page=reservation-listings">Your Reservations</a></li>';
                                    }else{
                                        if ($_GET["p"] == "reservation-listings") {
                                            echo '<li><a class="aktif" href="index.php?p=listings&page=reservation-listings">Your Reservations</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=listings&page=reservation-listings">Your Reservations</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "reservation-requirements") {
                                        echo '<li><a class="aktif" href="index.php?p=listings&page=reservation-requirements">Reservation Requirements</a></li>';
                                    }else{
                                        if ($_GET["p"] == "reservation-requirements") {
                                            echo '<li><a class="aktif" href="index.php?p=listings&page=reservation-requirements">Reservation Requirements</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=listings&page=reservation-requirements">Reservation Requirements</a></li>';
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="listings-wrapper">
                        <div class="header-listings-wrapper">
                                <p>Verified ID</p>
                        </div>
                        <div class="content-listings-wrapper">
                            <div class="content-listings">
                                <p>Your guests will need to verify their ID before booking with you. <span><a href="#">Learn More</a></span> <br>
                                Before you can require guests to verify their ID, you'll need to verify yours!<br>
                                <span><a href="#">Verify your ID</a></span> to enable this requirement.</p> <br><br>
                                <label><input class="fasil" type="checkbox" name="checkbox" value="value"> Require guests to go through verification</label><br><br><br><br>
                                <a class="butt" href="#">Save Reservation Requirements</a><br>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>