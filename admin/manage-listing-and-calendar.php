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
            <header class="header-admin-amti">
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
                        <li class="menula"><a class="top-tip" href="../sign-up.php"><span>Sign Up</span></a></li>
                        <li class="menula"><a class="top-tip" href="../login.php"><span>Login</span></a></li>
                        <li class="list-your">
                            <a href="list-yor-place.php" class="list-your-place">
                                List Your Place
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="dark-header-amti">
                <div class="site-dark-header-amti">
                    <div class="yellow-header-amti">
                        <a class="back" href="#"><img src="../images/back.png"></a>
                        <a class="preview" href="#"><img src="../images/preview.png"></a>
                    </div>
                    <span>Entire home/apt in Banyuwangi, Indonesia</span>
                </div>
            </div>
            <div class="calendar-amti">
                <div class="site-calendar-amti">
                    <div class="left-calendar-amti">
                        <div class="basics">
                            <div class="signer-basics"></div>
                            <h6>Basics</h6>
                            <ul>
                                <?php
                                    if ($_GET["page"] == "manage-calendar") {
                                        echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-calendar">Calendar</a></li>';
                                    }else{
                                        if ($_GET["p"] == "manage-calendar") {
                                            echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-calendar">Calendar</a></li>';
                                        }else{
                                            echo '<li><a href="manage-listing-and-calendar.php?page=manage-calendar">Calendar</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "manage-pricing") {
                                        echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-pricing">Pricing</a></li>';
                                    }else{
                                        if ($_GET["p"] == "manage-pricing") {
                                            echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-pricing">Pricing</a></li>';
                                        }else{
                                            echo '<li><a href="manage-listing-and-calendar.php?page=manage-pricing">Pricing</a></li>';
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="description">
                            <h6>Description</h6>
                            <ul>
                                <?php
                                    if ($_GET["page"] == "manage-overview") {
                                        echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-overview">Overview</a></li>';
                                    }else{
                                        if ($_GET["p"] == "manage-overview") {
                                            echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-overview">Overview</a></li>';
                                        }else{
                                            echo '<li><a href="manage-listing-and-calendar.php?page=manage-overview">Overview</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "manage-pricing") {
                                        echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-overview">Photo</a></li>';
                                    }else{
                                        if ($_GET["p"] == "manage-pricing") {
                                            echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-overview">Photo</a></li>';
                                        }else{
                                            echo '<li><a href="manage-listing-and-calendar.php?page=manage-overview">Photo</a></li>';
                                        }
                                    }
                                ?>
                                <li><a href="#">Overview</a></li>
                                <li><a href="#">Photo</a></li>
                            </ul>
                        </div>
                        <div class="settings">
                            <h6>Settings</h6>
                            <ul>
                                <?php
                                    if ($_GET["page"] == "manage-amenities") {
                                        echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-amenities">Amenities</a></li>';
                                    }else{
                                        if ($_GET["p"] == "manage-amenities") {
                                            echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-amenities">Amenities</a></li>';
                                        }else{
                                            echo '<li><a href="manage-listing-and-calendar.php?page=manage-amenities">Amenities</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "manage-listing") {
                                        echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-listing">Listing</a></li>';
                                    }else{
                                        if ($_GET["p"] == "manage-listing") {
                                            echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-listing">Listing</a></li>';
                                        }else{
                                            echo '<li><a href="manage-listing-and-calendar.php?page=manage-listing">Listing</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "manage-location") {
                                        echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-location">Location</a></li>';
                                    }else{
                                        if ($_GET["p"] == "manage-location") {
                                            echo '<li class="active"><a href="manage-listing-and-calendar.php?page=manage-location">Location</a></li>';
                                        }else{
                                            echo '<li><a href="manage-listing-and-calendar.php?page=manage-location">Photo</a></li>';
                                        }
                                    }
                                ?>
                                <li><a href="#">Amenities</a></li>
                                <li><a href="#">Listing</a></li>
                                <li><a href="#">Location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-calendar-amti">
                        <div class="site-right-calendar-amti">
                            <h5>When is your listing available?</h5>
                            <div class="right-calendar-content">
                            <ul>
                                <li class="always"><img class="selalu" src="../images/allday.png" alt=""/>
                                    <h6>Always</h6>
                                    <span>List all dates as <br>available</span>
                                </li>
                                <li class="sometimes"><img class="kadang" src="../images/sometimes.png" alt=""/>
                                    <h6>Sometimes</h6>
                                    <span>List some dates as<br> available</span>
                                </li>
                                <li class="onetime"><img class="sekali" src="../images/onetime.png" alt=""/>
                                    <h6>Onetime</h6>
                                    <span>List only one time<br> period as available</span>
                                </li>
                            </ul>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="manage">
                <div class="footer-logo"></div>
                <div class="small-menu-footer">
                    <ul>
                        <li class="satu"><a href="#">About</a></li>
                        <li class="dua"><a href="#">Help</a></li>
                        <li class="tiga"><a href="#">Responsible Hosting</a></li>
                        <li class="empat"><a href="#">Local Laws</a></li>
                        <li class="lima"><a href="#">Policies</a></li>
                        <li class="enam"><a href="#">Terms & Privacy</a></li>
                    </ul>
                </div>
                <div class="lang-right">
                    <select class="select-style guest" name="guest">
                    <option value="select">Indonesian</option>
                    <option value="2">English</option>
                </select>
                </div>
            </footer>
    </div>
</body>
</html>