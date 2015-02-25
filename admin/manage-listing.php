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
                            <h6>Description</h6>
                            <ul>
                                <li><a href="manage-overview.php">Overview</a></li>
                                <li><a href="manage-photo.php">Photo</a></li>
                            </ul>
                        </div>
                        <div class="settings">
                            <div class="signer-basics"></div>
                            <h6>Settings</h6>
                            <ul>
                                <li><a href="manage-amenities.php">Amenities</a></li>
                                <li><a class="listeng" href="manage-listing.php">Listing</a></li>
                                <li><a href="manage-location.php">Location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-calendar-amti">
                        <div class="site-right-calendar-amti">
                            <p class="title-amti">Rooms and <br>Beds</p>
                            <p class="under-title-amti">The number of rooms and <br>beds guests can access.</p>
                            <p class="title-price">Bedrooms</p>
                            <div class="bedrooms">
                                <select class="select-style bedroom" name="bedroom">
                                <option value="select">Select...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                </select>
                            </div>
                            <p class="title-price">Beds</p>
                            <div class="bedrooms">
                                <select class="select-style bedroom" name="bedroom">
                                <option value="select">Select...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="16+">16+</option>
                                </select>
                            </div>
                            <p class="title-price">Bathrooms</p>
                            <div class="bedrooms">
                                <select class="select-style bedroom" name="bedroom">
                                <option value="select">Select...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="7+">7+</option>
                                </select>
                            </div>
                            <p class="title-amti">Listing Info</p>
                            <p class="under-title-amti">The number of rooms and <br>beds guests can access.</p>
                            <p class="title-price">Home Type</p>
                            <div class="listing-info">
                                <select class="select-style info-listing" name="info-listing">
                                <option value="select">House</option>
                                <option value="1">Apartment</option>
                                <option value="2">Bed & Breakfast</option>
                                <option value="3">Loft</option>
                                <option value="4">Cabin</option>
                                <option value="5">Villa</option>
                                <option value="6">Castle</option>
                                <option value="7">Dorm</option>
                                <option value="8">Treehouse</option>
                                <option value="9">Boat</option>
                                <option value="10">Plane</option>
                                <option value="11">Camper/RV</option>
                                <option value="12">Igloo</option>
                                <option value="13">Lighthouse</option>
                                <option value="14">Yurt</option>
                                <option value="15">Tipi</option>
                                <option value="16">Cave</option>
                                <option value="17">Island</option>
                                <option value="18">Chalet</option>
                                <option value="19">Earth House</option>
                                <option value="20">Hut</option>
                                <option value="21">Train</option>
                                <option value="22">Tent</option>
                                </select>
                            </div>
                            <p class="title-price">Room Type</p>
                            <div class="listing-info">
                                <select class="select-style info-listing" name="info-listing">
                                <option value="select">Entire home/apt</option>
                                <option value="1">Entire home/apt</option>
                                <option value="2">Private room</option>
                                <option value="3">Shared room</option>
                                </select>
                            </div>
                            <p class="title-price">Accomodates</p>
                            <div class="listing-info">
                                <select class="select-style info-listing" name="info-listing">
                                <option value="select">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="16+">16+</option>
                                </select>
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