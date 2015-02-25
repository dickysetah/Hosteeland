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
                                <div class="show">
                                    <select class="select-style show-listings" name="show">
                                        <option value="select">Show all listings</option>
                                        <option value="2">Show active</option>
                                        <option value="3">Show hidden</option>
                                    </select>
                                </div>
                        </div>
                        <div class="content-listings-wrapper">
                            <div class="content-listings">
                                <div class="pict"></div>
                                <div class="side-pict">
                                    <div class="name-pict"><a href="#">Big Bungallow - Great Feeling</a></div>
                                    <div class="under-name-pict"><a href="#">Manage Listing and Calendar</a></div>
                                    <div class="button-list"><a href="#">List Now</a></div>
                                </div> 
                            </div>
                            <div class="content-listings">
                                <div class="pict"></div>
                                <div class="side-pict">
                                    <div class="name-pict"><a href="#">Big Bungallow - Great Feeling</a></div>
                                    <div class="under-name-pict"><a href="#">Manage Listing and Calendar</a></div>
                                    <div class="button-list"><a href="#">List Now</a></div>
                                </div> 
                            </div>
                            <div class="content-listings">
                                <div class="pict"></div>
                                <div class="side-pict">
                                    <div class="name-pict"><a href="#">Big Bungallow - Great Feeling</a></div>
                                    <div class="under-name-pict"><a href="#">Manage Listing and Calendar</a></div>
                                    <div class="button-list"><a href="#">List Now</a></div>
                                </div> 
                            </div>
                            <div class="content-listings">
                                <div class="pict"></div>
                                <div class="side-pict">
                                    <div class="name-pict"><a href="#">Big Bungallow - Great Feeling</a></div>
                                    <div class="under-name-pict"><a href="#">Manage Listing and Calendar</a></div>
                                    <div class="button-list"><a href="#">List Now</a></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>