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
                        <div class="content-listings-wrapper">
                            <div class="content-listings">
                                <div class="title">Verify Your ID</div>
                                <p class="under-verify">Getting your Verified ID is the easiest way to help build trust in<br> 
                                the Hosteeland community. We'll verify you by matching<br> information from an
                                online account to an official ID. <span><a href="#">Learn more</a></span><br><br>
                                Or, you can choose to only add the verifications you want below.</p>
                                <button class="verme">Verify Me</button>
                            </div>
                        </div>
                    </div> 
                    <div class="listings-wrapper">
                        <div class="header-listings-wrapper">
                                <p>Your Current Verifications</p>
                        </div>
                        <div class="content-listings-wrapper">
                            <div class="content-listings">
                                <div class="title">Email Address</div>
                                <p class="under-current">You have confirmed your email: <span class="email">dickysetah@gmail.com</span>. <br>
                                    A confirmed email is important to allow us to securely communicate with you.</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>