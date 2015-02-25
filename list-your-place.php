<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Hosteeland</title> 
    <link rel="stylesheet" type="text/css" href="style/default.css">
    <link href='http://fonts.googleapis.com/css?family=Hind:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="admin">
	<header class="header-admin">
		<div class="logo-yellow">
            <a href="index.php">
                <img src="images/hosteeland_yellow.png" alt=""/>
            </a>
        </div>
        <div class="search-box">
            <input type="text" name="search" placeholder="Where are you going?"/>
            <button class="cari"><img src="images/search_icon.png" alt=""></button>
        </div>
        <div class="top-menu-admin">
            <ul>
                <li class="menula"><a class="top-tip" href="sign-up.php"><span>Sign Up</span></a></li>
                <li class="menula"><a class="top-tip" href="login.php"><span>Login</span></a></li>
                <li class="list-your">
                    <a href="list-your-place.php" class="list-your-place">
                        List Your Place
                    </a>
                </li>
            </ul>
        </div>
	</header>
	<div class="list-banner">
        <div class="site-list-banner">
            <h4>List Your Place</h4>
            <h3>Hosteeland helps you make money by renting out your place.</h3>
        </div>
    </div>
    <div class="new-list">
        <div class="site-new-list">
            <div class="house">
                <div class="text-wrapper">
                    <div class="text">Home Type</div>
                </div>
                <div class="button-wrapper">
                    <div class="button-grup">
                        <button class="villa">
                            <div class="villa-icon"></div>
                                Villa
                        </button>
                        <button class="houses">
                            <div class="houses-icon"></div>
                                House
                        </button>
                        <button class="bedbreak">
                            <div class="bedbreak-icon"></div>
                                Bed & Breakfast
                        </button>
                        <div class="other">
                            <select class="other-content" name="other">
                                <option value="select">Other</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="house">
                <div class="text-wrapper">
                    <div class="text">Room Type</div>
                </div>
                <div class="button-wrapper">
                    <div class="button-grup">
                        <button class="entire">
                            <div class="entire-icon"></div>
                                Entire
                        </button>
                        <button class="private">
                            <div class="private-icon"></div>
                                Private room
                        </button>
                        <button class="shared">
                            <div class="shared-icon"></div>
                                Shared room
                        </button>
                    </div>
                </div>
            </div>
            <div class="house">
                <div class="text-wrapper">
                    <div class="text-accomodates">Accomodates</div>
                </div>
                <div class="kanan-accomodates">
                        <div class="accomodates">
                            <div class="accomodates-icon"></div>
                            <select class="guest" name="guest">
                                <option value="select">1 Guest</option>
                                <option value="2">2 Guests</option>
                                <option value="3">3 Guests</option>
                                <option value="4">4 Guests</option>
                                <option value="5">5 Guests</option>
                                <option value="6">6 Guests</option>
                                <option value="7">7 Guests</option>
                                <option value="8">8 Guests</option>
                                <option value="9">9 Guests</option>
                                <option value="10">10 Guests</option>
                                <option value="+10">+10 Guests</option>
                            </select>
                        </div>
                </div>
            </div>
            <div class="house">
                <div class="text-wrapper">
                    <div class="text-city">City</div>
                </div>
                <div class="input-wrapper">
                    <div class="input-icon"></div>
                    <input class="location" name="name" placeholder="Banyuwangi, Yogyakarta, Denpasar..." required="" tabindex="1" type="text">
                </div>
            </div>
            <div class="continue">
                <button class="continue-button" type="submit" value="Save">Continue</button>
            </div>
        </div>
    </div>
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
</body>
</html>