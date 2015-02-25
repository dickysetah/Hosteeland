            <div class="listings-content">
                <div class="site-listings-content">
                    <div class="side-listings-wrapper">
                        <div class="side-listings">
                            <ul>
                                <?php
                                    if ($_GET["page"] == "edit-profile") {
                                        echo '<li><a class="aktif" href="index.php?p=profile&page=edit-profile">Edit Profile</a></li>';
                                    }else{
                                        if ($_GET["p"] == "edit-profile") {
                                            echo '<li><a class="aktif" href="index.php?p=profile&page=edit-profile">Edit Profile</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=profile&page=edit-profile">Edit Profile</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "trust-and-verification") {
                                        echo '<li><a class="aktif" href="index.php?p=profile&page=trust-and-verification">Trust and Verification</a></li>';
                                    }else{
                                        if ($_GET["p"] == "trust-and-verification") {
                                            echo '<li><a class="aktif" href="index.php?p=profile&page=trust-and-verification">Trust and Verification</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=profile&page=trust-and-verification">Trust and Verification</a></li>';
                                        }
                                    }
                                ?>
                                <br></br>
                                <a class="view-prof" href="">View Profile</a>
                            </ul>
                        </div>
                    </div>
                    <div class="listings-wrapper">
                        <div class="header-reviews-wrapper">
                                <ul>
                                    <li><a class="abyou" href="#">About You</a></li>
                                    <li><a href="#">By You</a></li>
                                </ul>
                        </div>
                    </div>
                    <div class="listings-wrapper">
                        <div class="header-listings-wrapper">
                                <p>Past Reviews</p>
                        </div>
                        <div class="content-listings-wrapper">
                            <div class="content-listings">
                                <p class="under-current">Reviews are written at the end of a reservation through Hosteeland. Reviews you've received will be visible both here and on your public profile.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>