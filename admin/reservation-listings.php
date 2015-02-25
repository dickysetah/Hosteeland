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
                                <p>Your Reservations</p>
                        </div>
                        <div class="content-listings-wrapper">
                            <div class="content-listings">
                                <p>You have no reservations.</p> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>