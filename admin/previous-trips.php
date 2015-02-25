            <div class="listings-content">
                <div class="site-listings-content">
                    <div class="side-listings-wrapper">
                        <div class="side-listings">
                            <ul>
                                 <?php
                                    if ($_GET["page"] == "your-trips") {
                                        echo '<li><a class="aktif" href="index.php?p=trips&page=your-trips">Your Trips</a></li>';
                                    }else{
                                        if ($_GET["p"] == "your-trips") {
                                            echo '<li><a class="aktif" href="index.php?p=trips&page=your-trips">Your Trips</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=trips&page=your-trips">Your Trips</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "previous-trips") {
                                        echo '<li><a class="aktif" href="index.php?p=trips&page=previous-trips">Previous Trips</a></li>';
                                    }else{
                                        if ($_GET["p"] == "previous-trips") {
                                            echo '<li><a class="aktif" href="index.php?p=trips&page=previous-trips">Previous Trips</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=trips&page=previous-trips">Previous Trips</a></li>';
                                        }
                                    }

                                ?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="listings-wrapper">
                        <div class="header-listings-wrapper">
                                <p>Previous Trips</p>
                        </div>
                        <div class="content-listings-wrapper">
                            <div class="content-listings">
                                <p>You have no previous trips</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>