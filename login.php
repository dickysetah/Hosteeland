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
	<div class="sign-up">
		<div class="site-sign-up">
			<ul>
				<a href="#">
                    <li class="google">
                        <img src="images/g+.png" alt=""/>
                        Sign up with Google
                    </li>
                </a>
                <a href="#">
                    <li class="fb">
                        <img src="images/fb.png" alt=""/>
                        Sign up with Facebook
                    </li>
                </a>
                <div class="or">
                    <hr>
                        <p>Or</p>
                    <hr>
                </div>
                <form class="form-login"> 
                    <input type="text" name="email" placeholder="Email Address" required="" tabindex="1">
                    <br>
                    <input type="password" name="psw" placeholder="Password" required="" tabindex="1">

                    <input class="centang" type="checkbox" name="remember" value="remember"> <p>Remember me</p>
                    <a href="#"><span>Forgot password?</span></a>
 
                    <button class="logmail" name="submit" id="submit" type="submit">Log In</button>      
                </form> 
                <div class="garis-bawah-login">
                <hr>
                </div>
                <div class="tidak-punya">
                    <p>Don't have an account? <a href="#"><span> Sign up</span></a></p>
                </div>
			</ul>
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