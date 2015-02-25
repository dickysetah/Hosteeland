<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Hosteeland</title> 
    <link rel="stylesheet" type="text/css" href="../style/default.css">
    <link href='http://fonts.googleapis.com/css?family=Hind:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="admin">
    <div id="wrapper">
            <header class="header-admin-dash">
                <div class="logo-yellow">
                    <a href="../index.php">
                        <img src="../images/hosteeland_yellow.png" alt=""/>
                    </a>
                </div>
                <div class="search-box">
                    <input type="text" name="search" placeholder="Where are you going?"/>
                    <button class="cari"><img src="../images/search_icon.png" alt=""></button>
                </div>
                <div class="top-menu-admin">
                    <ul>
                        <li class="menula"><a class="top-tip" href="#"><span>Sign Up</span></a></li>
                        <li class="menula"><a class="top-tip" href="#"><span>Login</span></a></li>
                        <li class="list-your">
                            <a href="#" class="list-your-place">
                                List Your Place
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="dark-header-dash">
                <div class="site-dark-header-dash">
                    <ul>
                        <?php
                            if ($_GET["page"] == "dashboard") {
                                echo '<li class="active"><a href="index.php?p=dashboard&page=dashboard">Dashboard</a></li>';
                            }else{
                                if ($_GET["p"] == "dashboard") {
                                    echo '<li class="active"><a href="index.php?p=dashboard&page=dashboard">Dashboard</a></li>';
                                }else{
                                    echo '<li><a href="index.php?p=dashboard&page=dashboard">Dashboard</a></li>';
                                }
                            }

                            if ($_GET["page"] == "inbox") {
                                echo '<li class="active"><a href="index.php?p=inbox&page=inbox">Inbox</a></li>';
                            }else{
                                if ($_GET["p"] == "inbox") {
                                    echo '<li class="active"><a href="index.php?p=inbox&page=inbox">Inbox</a></li>';
                                }else{
                                    echo '<li><a href="index.php?p=inbox&page=inbox">Inbox</a></li>';
                                }
                            }

                            if ($_GET["page"] == "listings") {
                                echo '<li class="active"><a href="index.php?p=listings&page=manage-listings">Listings</a></li>';
                            }else{
                                if ($_GET["p"] == "listings") {
                                    echo '<li class="active"><a href="index.php?p=listings&page=manage-listings">Listings</a></li>';
                                }else{
                                    echo '<li><a href="index.php?p=listings&page=manage-listings">Listings</a></li>';
                                }
                            }

                            if ($_GET["page"] == "trips") {
                                echo '<li class="active"><a href="index.php?p=trips&page=your-trips">Trips</a></li>';
                            }else{
                                if ($_GET["p"] == "trips") {
                                    echo '<li class="active"><a href="index.php?p=trips&page=your-trips">Trips</a></li>';
                                }else{
                                    echo '<li><a href="index.php?p=trips&page=your-trips">Trips</a></li>';
                                }
                            }

                            if ($_GET["page"] == "profile") {
                                echo '<li class="active"><a href="index.php?p=profile&page=edit-profile">Profile</a></li>';
                            }else{
                                if ($_GET["p"] == "profile") {
                                    echo '<li class="active"><a href="index.php?p=profile&page=edit-profile">Profile</a></li>';
                                }else{
                                    echo '<li><a href="index.php?p=profile&page=edit-profile">Profile</a></li>';
                                }
                            }

                            if ($_GET["page"] == "account") {
                                echo '<li class="active"><a href="index.php?p=account&page=notifications">Account</a></li>';
                            }else{
                                if ($_GET["p"] == "account") {
                                    echo '<li class="active"><a href="index.php?p=account&page=notifications">Account</a></li>';
                                }else{
                                    echo '<li><a href="index.php?p=account&page=notifications">Account</a></li>';
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
                include empty($_GET["page"])?"dashboard.php":$_GET["page"].".php";
            ?>
            <footer class="futer">
        <div class="site-footer">
            <div class="company">
                <h5>Company</h5>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Policies</a></li>
                        <li><a href="#">Disaster Response</a></li>
                        <li><a href="#">Terms and Privacy</a></li>
                    </ul>
            </div>
            <div class="travel-footer">
                <h5>Travel</h5>
                    <ul>
                        <li><a href="#">How to Travel</a></li>
                        <li><a href="#">Hosteeland Picks</a></li>
                        <li><a href="#">Business Travel</a></li>
                        <li><a href="#">Trust and Safety</a></li>
                        <li><a href="#">Neighborhood</a></li>
                    </ul>
            </div>
            <div class="hosting-footer">
                <h5>Hosting</h5>
                    <ul>
                        <li><a href="#">How to Host</a></li>
                        <li><a href="#">Why Host</a></li>
                        <li><a href="#">Stories</a></li>
                        <li><a href="#">Hospitality</a></li>
                        <li><a href="#">Responsible Hosting</a></li>
                    </ul>
            </div>
        <div class="footer-right">
            <div class="langcur">
            <div class="lang">
                <select class="select-style guest" name="guest">
                    <option value="select">Indonesian</option>
                    <option value="2">English</option>
                </select>
            </div>
            <div class="cur">
                <select class="select-style currency" name="currency">
                    <option value="select">IDR</option>
                    <option value="2">USD</option>
                </select>
            </div>
            <div class="logo-footer"></div>
            </div>
        </div>
    </div>
        <hr class="fut"></hr>
        <div class="social-media">
            <p>Join Us</p>
            <div class="site-social-media">
                <ul>
                    <li><a href="#"><div class="google-plus"></div></a></li>
                    <li><a href="#"><div class="facebook"></div></a></li>
                    <li><a href="#"><div class="twitter"></div></a></li>
                    <li><a href="#"><div class="instagram"></div></a></li>
                    <li><a href="#"><div class="youtube"></div></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-tag">
            <p>Hosteeland, Inc</p>
        </div>  
    </footer>
    </div>
</body>
</html> 