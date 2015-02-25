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
                    <a href="index.php">
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
                            <a href="../list-your-place.php" class="list-your-place">
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
                            <h6>Basics</h6>
                            <ul>
                                <li><a href="manage-calendar.php">Calendar</a></li>
                                <li><a href="manage-pricing.php">Pricing</a></li>
                            </ul>
                        </div>
                        <div class="description">
                            <div class="signer-basics"></div>
                            <h6>Description</h6>
                            <ul>
                                <li><a class="oviu" href="manage-overview.php">Overview</a></li>
                                <li><a href="manage-photo.php">Photo</a></li>
                            </ul>
                        </div>
                        <div class="settings">
                            <h6>Settings</h6>
                            <ul>
                                <li><a href="manage.amenities.php">Amenities</a></li>
                                <li><a href="manage-listing.php">Listing</a></li>
                                <li><a href="manage-location.php">Location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-calendar-amti">
                        <div class="site-right-calendar-amti">
                                <p class="overview">Overview</p>
                                <p class="under-overview">A title and summary<br> displayed on your public<br> listing page.</p>
                                <p class="title-title">Title</p>
                                <form class="title-overview">
                                   <input class="overview-title" type="text" name="ovr" placeholder="Write a title" required="" tabindex="1">
                                   <p class="summary-overview">Summary</p>
                                   <textarea class="summary" name="message" placeholder="Write a summary to attract guest"></textarea>
                                </form>
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