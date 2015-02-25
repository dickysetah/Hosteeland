<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Hosteeland</title> 
    <link rel="stylesheet" type="text/css" href="style/default.css">
    <link href='http://fonts.googleapis.com/css?family=Hind:400,700' rel='stylesheet' type='text/css'>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          streetViewControl: false,
          mapTypeControl: false,
          scrollwheel: false 
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body class="admin">
	<header class="header-place-list">
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
	<div class="under-header-wrapper">
        <div id="map-canvas"></div>
        <div class="filters sign-filters">
            Filters
        </div>
        <script> 
        $(document).ready(function(){
          $(".filters").click(function(){
            $(".filter-wrapper").slideToggle("slow");
            $(this).toggleClass('sign-filters');
          });
        });
        </script>
        <script> 
        $(document).ready(function(){
          $(".more-filter-button").click(function(){
            $(".filter-wrapper").slideUp("slow");
            $('.filters').toggleClass('sign-filters');
            $('html,body').animate({"scrollTop":$(".filters").offset().top});
                return false;
            $(".").offset({top:500,left:value})
          });
        });
        </script>
        <div class="filter-wrapper" style="display:none">
            <div class="filter">
                <div class="dates">
                    <div class="text-wrapper">
                        <div class="text">Dates</div>
                    </div>
                    <div class="kanan-wrapper">
                        <form class="kanan">
                                <input id="cek-in" name="name" placeholder="Check In" required="" tabindex="1" type="text">
                                <input id="cek-out" name="name" placeholder="Check Out" required="" tabindex="1" type="text">
                                <select class="jumlah" name="guest">
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
                        </form>
                    </div>
                </div>
                <div class="dates">
                    <div class="text-wrapper">
                        <div class="text">Room Type</div>
                    </div>
                    <div class="kanan-wrapper">
                        <div class="entire-kiri">
                            <label class="ent">
                            <div class="centang">
                                <input class="centang" type="checkbox" name="entire" value="entire">
                            </div>
                            <div class="icon-dan-text">
                                <div class="entire-place-icon"></div>
                                <div class="tulisan">Entire</div>
                            </div>
                            </label>
                        </div>
                        <div class="entire-place">
                            <label>
                            <div class="centang">
                                <input class="centang" type="checkbox" name="entire" value="entire">
                            </div>
                            <div class="icon-dan-text">
                                <div class="private-icon"></div>
                                <div class="tulisan">Private room</div>
                            </div>
                            </label>
                        </div>
                        <div class="entire-kanan">
                            <label>
                            <div class="centang">
                                <input class="centang" type="checkbox" name="entire" value="entire">
                            </div>
                            <div class="icon-dan-text">
                                <div class="shared-icon"></div>
                                <div class="tulisan">Shared room</div>
                            </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="dates">
                    <div class="judul-wrapper">
                        <div class="judul">Price Range</div>
                    </div>
                    <div class="kanan-wrapper">
                        <div class="price-range">
                        <div class="nstSlider" data-range_min="0" data-range_max="100"  data-cur_min="0"  data-cur_max="100">     
                            <div class="bar"></div>                                                                      
                            <div class="leftGrip"></div>              
                            <div class="rightGrip"></div>             
                        </div>
                        <div class="leftLabel"></div>
                        <div class="rightLabel"></div>
                        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                        <script src="style/jquery.nstSlider.min.js"></script>
                        <script>
                            $('.nstSlider').nstSlider({
                                "left_grip_selector": ".leftGrip",
                                "right_grip_selector": ".rightGrip",
                                "value_bar_selector": ".bar",
                                "highlight": {
                                    "grip_class": "gripHighlighted",
                                    "panel_selector": ".highlightPanel"
                                },
                                "value_changed_callback": function(cause, leftValue, rightValue) {
                                    $('.leftLabel').text(leftValue);
                                    $('.rightLabel').text(rightValue);
                                },
                            }); 
                            $('.nstSlider').nstSlider('highlight_range', highlightMin, highlightMax);
                        </script>
                        </div>
                    </div>
                </div>
                <div class="dates">
                    <div class="text-wrapper">
                        <div class="text">Size</div>
                    </div>
                    <div class="kanan-wrapper">
                        <form class="kanan">
                                <select class="pengunjung-kiri" name="guest">
                                <option value="select">Bedrooms</option>
                                <option value="1">1 Bedroom</option>
                                <option value="2">2 Bedrooms</option>
                                <option value="3">3 Bedrooms</option>
                                <option value="4">4 Bedrooms</option>
                                <option value="5">5 Bedrooms</option>
                                <option value="6">6 Bedrooms</option>
                                <option value="7">7 Bedrooms</option>
                                <option value="8">8 Bedrooms</option>
                                <option value="9">9 Bedrooms</option>
                                <option value="10">10 Bedrooms</option>
                                </select>
                                <select class="pengunjung" name="guest">
                                <option value="select">Bathrooms</option>
                                <option value="1">1 Bathroom</option>
                                <option value="2">2 Bathrooms</option>
                                <option value="3">3 Bathrooms</option>
                                <option value="4">4 Bathrooms</option>
                                <option value="5">5 Bathrooms</option>
                                <option value="6">6 Bathrooms</option>
                                <option value="7">7 Bathrooms</option>
                                <option value="8">8 Bathrooms</option>
                                <option value="9">9 Bathrooms</option>
                                <option value="10">10 Bathrooms</option>
                                </select>
                                <select class="pengunjung" name="guest">
                                <option value="select">Beds</option>
                                <option value="1">1 Bed</option>
                                <option value="2">2 Beds</option>
                                <option value="3">3 Beds</option>
                                <option value="4">4 Beds</option>
                                <option value="5">5 Beds</option>
                                <option value="6">6 Beds</option>
                                <option value="7">7 Beds</option>
                                <option value="8">8 Beds</option>
                                <option value="9">9 Beds</option>
                                <option value="10">10 Beds</option>
                                </select>
                        </form>
                    </div>
                </div>
                <div class="dates">
                    <div class="text-wrapper">
                        <div class="text">Facilities</div>
                    </div>
                    <div class="kanan-wrapper">
                        <div class="check-right">
                            <div class="check"><label class="check-label" title="Wireless Internet"><input class="centang" type="checkbox" name="facilities" value="Wireless Internet"> Wireless Internet</label></div>
                            <div class="check"><label class="check-label" title="TV"><input class="centang" type="checkbox" name="facilities" value="TV"> TV</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Cable TV</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Air Conditioning</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Heating</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Internet</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Hot Tub</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Washer</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Pool</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Dryer</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Breakfast</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Free Parking on Premises</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Gym</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Elevator in Building</label></div>                        
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Shampoo</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Buzzer/Wireless Intercom</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Doorman</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Family/Kid Friendly</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Doorman</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Smoking Allowed</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Suitable for Events</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Pets Allowed</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Smoke Detector</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Wheelchair Accessible</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Carbon Monoxide Detector</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> First Aid Kit</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Safety Card</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Fire Extinguisher</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Essentials</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Heating</label></div>
                        </div>
                    </div>
                </div>
                <div class="dates">
                    <div class="text-wrapper">
                        <div class="text">Host Language</div>
                    </div>
                    <div class="kanan-wrapper">
                        <div class="check-right">
                            <div class="check"><label class="check-label" title="Wireless Internet"><input class="centang" type="checkbox" name="facilities" value="Wireless Internet"> English</label></div>
                            <div class="check"><label class="check-label" title="TV"><input class="centang" type="checkbox" name="facilities" value="TV"> Español</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Français</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Bahasa Indonesia</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Bahasa Malaysia</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Bengali</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Dansk</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Deutsch</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Hindi</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Italiano</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Magyar</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Nederlands</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Norsk</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Polski</label></div>                        
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Português</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Punjabi</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Sign Language</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Suomi</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Svenska</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Tagalog</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Türkçe</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Čeština</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Ελληνικά</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Русский</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> українська</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> עברית</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> العربية</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> ภาษาไทย</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> 中文</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> 日本語</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> 한국어</label></div>
                        </div>
                    </div>
                </div>
                <div class="dates">
                    <div class="text-wrapper">
                        <div class="text">Property Type</div>
                    </div>
                    <div class="kanan-wrapper">
                        <div class="check-right">
                            <div class="check"><label class="check-label" title="Wireless Internet"><input class="centang" type="checkbox" name="facilities" value="Wireless Internet"> Villa</label></div>
                            <div class="check"><label class="check-label" title="TV"><input class="centang" type="checkbox" name="facilities" value="TV"> House</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Bed & Breakfast</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Apartment</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Boat</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Cabin</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Camper/RV</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Car</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Castle</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Cave</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Chalet</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Dorm</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Earth House</label></div>                        
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Hut</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Igloo</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Island</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Lighthouse</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Loft</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Other</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Parking Space</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Tent</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Tipi</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Train</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Treehouse</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Van</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Yurt</label></div>
                        </div>
                    </div>
                </div>
                <div class="dates">
                    <div class="text-wrapper">
                        <div class="text">Neighborhoods</div>
                    </div>
                    <div class="kanan-wrapper">
                        <div class="check-right">
                            <div class="check"><label class="check-label" title="Wireless Internet"><input class="centang" type="checkbox" name="facilities" value="Wireless Internet"> Bali</label></div>
                            <div class="check"><label class="check-label" title="TV"><input class="centang" type="checkbox" name="facilities" value="TV"> Lombok</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Banyuwangi</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Malang</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> West Papua</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Yogyakarta</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Flores</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Bandung</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Jakarta</label></div>
                            <div class="check"><label class="check-label" title="Kitchen"><input class="centang" type="checkbox" name="facilities" value="Kitchen"> Bogor</label></div>
                        </div>
                    </div>
                </div>
                <div class="dates">
                    <div class="text-wrapper">
                        <div class="text">Keywords</div>
                    </div>
                    <div class="kanan-wrapper">
                        <div class="check-right">
                            <input class="input-keywords" type="text" name="keywords" placeholder="riverside, ocean view, relaxing...">
                        </div>
                    </div>
                </div>
                <div class="more-filter-button">
                    <button class="more-filter" type="submit" value="Save">Save</button>
                </div>
            </div>
        </div>
        <div class="isi-tempat">
            <div class="site-isi-tempat">
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/meme.jpg" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/tradi.jpg" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/ye.jpg" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View with riverside
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · North Kuta Indonesia
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/akasha.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-wrapper">
                    <div class="place">
                        <div class="place-pict">
                            <a href="#" class="gambar">
                                <div class="gambar-listing">
                                    <img src="images/list.png" class="ini-gambar">
                                </div>
                            </a>
                            <div class="label-harga">
                                    <sup class="mata-uang">Rp</sup>
                                    <span class="harga">470000</span>
                            </div>
                        </div>
                        <div class="desc-wrapper">
                            <div class="desc">
                                <a href="#" class="poto-host">
                                    <img src="images/host.png">
                                </a>
                                <a href="#" class="keterangan">
                                    <div class="isi-keterangan" title="Wooden Villa">
                                        Wooden Villa - Forest View
                                    </div>
                                </a>
                                <div class="bawah-keterangan">
                                    <a href="#" class="under-bawah-keterangan">
                                        Entire home/apt · 73 reviews · Banyuwangi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <div class="site-pagination">
                        <ul>
                            <li class="less"><a href="#"><span class="prev"></span></a></li>
                            <li class="page-number"><a href="#">1</a></li>
                            <li class="page-number"><a href="#">2</a></li>
                            <li class="page-number"><a href="#" class="pagination-active">3</a></li>
                            <li class="page-number"><a href="#">4</a></li>
                            <li class="page-number"><a href="#">5</a></li>
                            <li class="page-number"><a href="#">6</a></li>
                            <li class="more"><a href="#">Next Page<span class="next"></span></a></li>
                        </ul>
                    </div>
                </div>
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