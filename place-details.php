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
    <script>
        doScroll: function(i) {
          i.preventDefault();
          if ($(i.currentTarget).hasClass("left")) {
            if (this.iterator.hasPrevious()) {
              this.iterator.previous()
            }
          } else {
            if (this.iterator.hasNext()) {
              this.iterator.next()
            }
          }
        }
    </script>
</head>
<body class="admin no_wiggle_webkit">
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
        <div id="place-details" itemtype="http://schema.org/Product">
            <meta content="#"></meta>
            <div id="photos" class="with-photos with-modal">
                <script type="text/javascript">
                    openCarousel: function() {
                      if (!this.slideshowLoaded) {
                        this.initSlideshow();
                        this.slideshowLoaded = true
                      }
                      if (this.photoModal) {
                        this.photoModal.open();
                        this.collapseThumbnailTimeout = window.setTimeout(this.collapseThumbnailViewport.bind(this, true), 2000);
                        this.logEvent({
                          action: "CLICK",
                          target: "HEADER_IMAGE"
                        })
                      }
                    }
                </script>
                <img src="images/jog.jpg" class="hide" srcset="">
                <span class="cover-img-wrapper">
                    <div class="cover-img show-sm" style='background-image: url("images/tradi.jpg?interpolation=lanczos-none&size=xx_large&output-format=jpg&output-quality=70");'></div>
                    <div class="cover-img hide-sm" style='background-image: url("images/tradi.jpg?interpolation=lanczos-none&size=xx_large&output-format=jpg&output-quality=70");'></div>
                </span>
                <button class="photo-chevron left text-center">
                    <img src="images/left.png" class="icon icon-chevron-left">
                    </img>
                </button>
                <button class="photo-chevron right text-center">
                    <img src="images/right.png" class="icon icon-chevron-right">
                    </img>
                </button>
                <div id="photo-modal" class="modal photo-modal" data-preload-size="5" aria-hidden="true" role="dialog">
                    <script type="text/javascript">
                        h.prototype.close = function(b) {
                          b && b.preventDefault(), "false" === this.$element.attr("aria-hidden") && (1 === this.$container.data()["o2-modal-open"]-- && (this.$container.removeClass("modal-open"), this.$container.scrollTop(this.currentScrollTop)), this.$element.removeAttr("aria-hidden").afterTransition(function() {
                            this.$element.attr("aria-hidden", "true").reflow(), this.emit("close", this, b)
                          }.bind(this)))
                        }
                        function(l) {
                          l.preventDefault();
                          k.previous(this)
                        }
                    </script>
                    <div class="modal-table">
                        <div class="modal-cell">
                            <button class="carousel-chevron right text-contrast" data-slideshow-next="true">
                                <i class="icon-right">
                                </i>
                            </button>
                            <button class="carousel-left" data-slideshow-prev="true">
                                <i class="icon-left">
                                </i>
                            </button>
                            <a href="#" class="modal-close" data-behavior="modal-close">
                                <script type="text/javascript">
                                    function d(g) {
                                          var f = g.currentTarget;
                                          if (!g.isDefaultPrevented() && this.config.pattern.test(f.href)) {
                                            window.amplify.store(this.config.key, e(f))
                                          }
                                        }
                                </script>
                            </a>
                            <div class="modal-content">
                                <ul class="slideshow-images loading loading-dark">
                                    <li class="media-photo media-photo-block active">
                                        <div class="img-contain" style="background-image: url(images/tradi.jpg?interpolation=lanczos-none&size=xx_large&output-format=jpg&output-quality=70)" data-slideshow-next="true"></div>
                                    </li>
                                    <li class="media-photo media-photo-block">
                                        <div class="media-cover text-center" style="background-image: url(images/ye.jpg?interpolation=lanczos-none&size=xx_large&output-format=jpg&output-quality=70)">
                                        </div>
                                    </li>
                                </ul>
                                <div class="slideshow-preload hide">
                                    <img src="images/ye.jpg?interpolation=lanczos-none&size=x_large&output-format=progressive-jpeg&output-quality=70" id="slideshow-preload-1"></img>
                                    <img src="images/m.jpg?interpolation=lanczos-none&size=x_large&output-format=progressive-jpeg&output-quality=70" id="slideshow-preload-2"></img>
                                </div>
                                <div class="slideshow-inline-preload hide">
                                    <img src="images/ye.jpg?interpolation=lanczos-none&size=x_large&output-format=progressive-jpeg&output-quality=70" alt="Ketapang Side Private Villa">
                                    <img src="images/m.jpg?interpolation=lanczos-none&size=x_large&output-format=progressive-jpeg&output-quality=70" alt="Ketapang Side Private Villa">
                                </div>
                            </div>
                            <div class="text-center">
                                <figcaption class="slideshow-media-caption">
                                    <script type="text/javascript">
                                        onThumbnailsMouseover: function() {
                                              if (this.collapseThumbnailTimeout) {
                                                window.clearTimeout(this.collapseThumbnailTimeout);
                                                this.collapseThumbnailTimeout = null
                                              }
                                              this.collapseThumbnailViewport(false)
                                            }
                                            collapseThumbnailViewport: function(i) {
                                              this.$(".slideshow-caption-container").toggleClass("collapsed", i)
                                            }
                                            g = r.handle = function(b) {
                                              return typeof o !== U && o.event.triggered !== b.type ? o.event.dispatch.apply(a, arguments) : void 0
                                            }
                                            g = r.handle = function(b) {
                                              return typeof o !== U && o.event.triggered !== b.type ? o.event.dispatch.apply(a, arguments) : void 0
                                            }
                                    </script>
                                    <div class="slideshow-caption-viewport row-space-4">
                                        <div class="slideshow-caption-container page-container-responsive">
                                            <div class="row">
                                                <div class="kolomlg-9">
                                                    <div class="slideshow-caption text-left">
                                                        1/10: Ketapang Side Private Villa, indah bukan?
                                                    </div>
                                                    <div class="text-left">
                                                        <i class="slideshow-professional text-muted hide">
                                                            Verified Photo
                                                        </i>
                                                    </div>
                                                </div>
                                                <div class="kolomlg-3 text-right">
                                                    Show photo list
                                                    <i class="icon icon-caret-down">
                                                    </i>
                                                </div>
                                            </div>
                                            <div class="thumbnails-viewport row-space-top-2">
                                                <ul class="slideshow-thumbnails thumbnails-slide-panel" style="left: 0px;">
                                                    <li>
                                                        <a href="images/ye.jpg?interpolation=lanczos-none&size=xx_large&output-format=jpg&output-quality=70" class="media-photo media-slideshow active" title="1/10: Mau..? Booking dong."></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="summary" class="panel room-section">
                <div class="page-container-responsive">
                    <div class="row">
                        <div class="kolomlg-8">
                            <div class="row-space-4 row-space-top-4">
                                <div class="row">
                                    <div class="kolomd-3 text-center">
                                        <a href="#" class="media-photo media-round">
                                            <img src="images/profile.png?interpolation=lanczos-none&crop=w:w;*,*&crop=h:h;*,*&resize=225:*&output-format=jpg&output-quality=70" class="host-profile-image" width="90" height="90" title="Suryo" alt="Suryo" nopin="nopin"></img>
                                        </a>
                                    </div>
                                    <div class="kolomd-9">
                                        <h1 id="listing-name" class="overflow h3 row-space-1 text-center-sm" itemprop="name">
                                            Superb 2br pool villa-Amazing view
                                        </h1>
                                        <span class="hide" itemprop="breadcrumb">
                                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                                <a href="/s/Indonesia" itemprop="url">
                                                    <span itemprop="title">
                                                        Indonesia
                                                    </span>
                                                    ,
                                                </a>
                                            </span>
                                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                                <a href="/s/Bali--Indonesia" itemprop="url">
                                                    <span itemprop="title">
                                                        Bali
                                                    </span>
                                                    ,
                                                </a>
                                            </span>
                                            <span itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
                                                <a href="/s/Ubud--Indonesia" itemprop="url">
                                                    <span itemprop="title">
                                                        Ubud
                                                    </span>
                                                    ,
                                                </a>
                                            </span>
                                        </span>
                                        <div id="display-address" class="row-space-2 text-muted hide-sm" data-location="Ubud, Bali, Indonesia" itemtype="http://schema.org/AggregateRating" itemscope="" itemprop="aggregateRating">
                                            <a href="" class="link-reset">
                                                Ubud, Bali, Indonesia
                                            </a>
                                        </div>
                                        <div class="row row-condensed text-muted text-center">
                                            <div class="kolomsm-3">
                                                <i class="icon icon-entire icon-size-2">
                                                </i>
                                            </div>
                                            <div class="kolomsm-3">
                                                <i class="icon icon-accomodates icon-size-2">
                                                </i>
                                            </div>
                                            <div class="kolomsm-3">
                                                <i class="icon icon-rooms icon-size-2">
                                                </i>
                                            </div>
                                            <div class="kolomsm-3">
                                                <i class="icon icon-bed icon-size-2">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="kolomd-3 text-center">
                                        <a href="#" class="link-reset text-wrap">
                                            Suryo
                                        </a>
                                    </div>
                                    <div class="kolomd-9">
                                        <div class="row row-condensed text-muted text-center">
                                            <div class="kolomsm-3">
                                                Entire home/apt
                                            </div>
                                            <div class="kolomsm-3">
                                                6 Guests
                                            </div>
                                            <div class="kolomsm-3">
                                                3 Bedrooms
                                            </div>
                                            <div class="kolomsm-3">
                                                3 Beds
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <div class="kolomlg-4">
                            <div class="mobile-bookit-btn-container text-center row">
                                <button id="book-it-sm-trigger" class="btn btn-primary btn-large kolomsm-10 kolomsm-push-1">
                                    Request to Book
                                </button>
                            </div>
                            <span id="service-fee-tip" class="tooltip tooltip-top-middle" aria-hidden="true" data-trigger"#service-fee-tooltip" role="tooltip">
                                <p class="panel-body fee-no-vat-tooltip">
                                    This is the fee charged by Hosteeland
                                </p>
                                <p class="panel-body hide fee-vat-tooltip">
                                    This is the fee charged by Hosteeland and include
                                </p>
                            </span>
                            <div id="tax-description-tip" class="tooltip tooltip-top-middle" data-trigger="#tax-descriptions-tooltip" data-sticky="true" role="tooltip">                                
                            </div>
                            <div id="book-it-sm-modal" class="modal" aria-hidden="true" role="dialog">
                                <div class="modal-table">
                                    <div class="modal-cell">
                                        <div class="modal-content">
                                            <div class="panel-header">
                                                <a class="modal-close" data-behavior="modal-close" href="#"> 
                                                </a>
                                                Request to Book
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="book-it-form" class="info new-o2-form-inline" method="post" action="#" accept-charset="UTF-8">
                                <div style="margin:0;padding:0;display:inline">
                                    <input type="hidden" value="✓" name="utf8"></input>
                                    <input type="hidden" value="" name="authenticity-token"></input>
                                </div>
                                <div id="pricing" class="fixed" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                                    <div id="price-amount" class="pull-left h3 text-special" itemprop="price">
                                        Rp5076160
                                    </div>
                                    <div id="payment-period-container" class="pull-right">
                                        <div id="per-night" class="">
                                            Per Night
                                        </div>
                                        <div id="per-month" class="hide">
                                            Per Month
                                            <i id="price-info-tooltip" class="icon icon-question hide" data-behavior="tooltip"></i>
                                        </div>
                                    </div>
                                    <meta itemprop="priceCurrency"></meta>
                                </div>
                                <div id="book-it" class="not-v2" style="top: 0px;">
                                    <div class="book-it-wrapper row-space-1">
                                        <div class="form-fields panel-body">
                                            <div class="row row-condensed row-space-3">   
                                                <div class="kolomd-9">
                                                    <div class="row row-condensed">
                                                        <div class="kolomd-6">
                                                            <label for="checkin">
                                                                Check In
                                                            </label>
                                                            <input id="checkin" class="checkin ui-datepicker-target" type="text" placeholder="mm/dd/yyyy" name="checkin"></input>
                                                        </div>
                                                        <div class="kolomd-6">
                                                            <label for="checkout">
                                                                Check Out
                                                            </label>
                                                            <input id="checkout" class="checkout ui-datepicker-target" type="text" placeholder="mm/dd/yyyy" name="checkin"></input>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="kolomd-3">
                                                    <label for="number-of-guests">
                                                            Guests
                                                    </label>
                                                    <div class="select select-block">
                                                        <select id="number-of-guests" name="number-of-guests">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                    </div>
                                                </div>     
                                            </div>
                                        </div>
                                        <div id="book-it-status">
                                            <div id="book-it-enabled" class="clearfix"> 
                                                <div id="subtotal-area" class="">
                                                    <span id="subtotal-label" class="text-muted hide">
                                                        Subtotal
                                                    </span>
                                                    <span id="total-label" class="text-muted hide">
                                                        Total
                                                    </span>
                                                    <div id="subtotal" class="h1 text-special row-space-1">
                                                    </div>
                                                </div>
                                                <div id="book-it-button-container" class="panel-body">
                                                    <button id="book-it-button" class="btn btn-primary btn-large btn-block" type="submit">
                                                        <span class="book-it">
                                                            Request to Book
                                                        </span>
                                                        <span class="instant-book">
                                                            Instant Book
                                                        </span>
                                                    </button>
                                                </div>
                                                <div id="pf-pic-prompt-container" class="panel-body hide">
                                                    <div class="signup-or-separator">
                                                        <h6 class="text">
                                                            or
                                                        </h6>
                                                        <hr>
                                                        <hr>
                                                    </div>
                                                    <p class="pf-pic-prompt text-center">
                                                        <a href="#" class="profile-pic-upsell-launcher">
                                                            Add a profile photo
                                                        </a>
                                                        to Instant Book this listing.
                                                        <i class="icon icon-question" data-position="bottom" data-behavior="tooltip" aria-label="Instant Book lets you book a listing instantly, without having to wait for the host's confirmation."></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="book-it-disabled" class="text-center panel-body hide">
                                                <p id="book-it-disabled-message">
                                                    This property is unvailable
                                                </p>
                                                <a id="view-other-listings-button" href="#">
                                                    View Other Listings
                                                </a>
                                            </div>
                                        </div>
                                        <div class="wishlist-wrapper hide-sm">
                                            <div class="rich-toggle wish-list-button row-space-2 not-saved" data-position="bottom" data-behavior="tooltip" data-address="Ubud (Ubud)" data-name="Beautiful 3 Private Pool Villa" data-img="https://a2.muscache.com/pictures/26090987/large.jpg" data-hosting_id="" aria-label="Saved 63 times">
                                            </div>
                                        </div>
                                        <div class="other-actions hide-sm">
                                            <div class="row-space-4 text-center">
                                                <div class="row-space-2">
                                                    <div class="social-share-widget">
                                                        <span class="share-title">
                                                            Share:
                                                        </span>
                                                        <span class="share-triggers">
                                                            <a href="#" class="share-btn" data-behavior="tooltip" data-network="email" data-email-share-link="/rooms/1870105/email_listing" aria-label="Email" >
                                                                <i class="icon icon-envelope icon-gray social-icon-sizen">
                                                                    
                                                                </i>
                                                            </a>
                                                            <a href="#" class="share-btn" target="blank" data-behavior="tooltip" rel="nofollow" data-network="facebook" aria-label="Facebook">
                                                                <i class="icon icon-facebook icon-gray social-icon-size">
                                                                    
                                                                </i>
                                                            </a>
                                                            <a href="#" class="share-btn" target="blank" data-behavior="tooltip" rel="nofollow" data-network="twitter" aria-label="Twitter">
                                                                <i class="icon icon-twitter icon-gray social-icon-size">
                                                                    </i>
                                                            </a>
                                                            <a href="#" class="share-btn embedly-btn link-reset text-muted" data-behavior="tooltip" rel="nofollow" data-embedly-locale="en" data-network="embedly" aria-label="Embed This Listing">
                                                                <i class="icon icon-code icon-gray social-icon-size">
                                                                    
                                                                </i>
                                                            </a>
                                                            <a href="#" class="more-btn">
                                                                ...
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row-space-2">
                                                    <a href="#" id="flag-for-listing-1870105" class="flag-trigger link-reset text-muted hide">
                                                        <i class="icon icon-flag h4">
                                                            Report this listing
                                                        </i>
                                                    </a>
                                                    <div class="already-flagged text-muted row-space-top-2 hide">
                                                        You have reported this listing
                                                        <a href="#" class="undo-flag">
                                                            Undo?
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input id="hosting-id" type="hidden" value="" name="hosting-id"></input>
                            </form>
                        </div>   
                    </div>  
                </div>
            </div>
            <div id="details" class="details-section webkit-render-fix">
                <div class="page-container-responsive">
                    <div class="row">
                        <div id="details-column" class="kolomlg-8">
                            <div class="row-space-8 row-space-top-8">
                                <h4 class="row-space-4 text-center-sm">
                                    About This Listing
                                </h4>
                                <p>
                                    Right on the edge of town, yet hidden away from the busy streets of Ubud by a high wall, our Villa is set in a secret garden, overlooking working rice fields and a temple - this is the best of both worlds!
                                </p>
                                <p class="text-center-sm">
                                    <a href="#" id="contact-host-link">
                                        <strong>
                                            Contact Host
                                        </strong>
                                    </a>
                                    <script type="text/javascript">
                                        var p = $(this).is("#contact-host-link") ? "CONTACT_HOST_LINK" : "CONTACT_HOST";
                                          if (!Hosteeland.Utils.isUserLoggedIn) {
                                            Airbnb.ERF.deliverExperiment("p3_contact_host_signup_modal_order", {
                                              control: function() {
                                                g.experimentAssignment = {
                                                  signup_order: "control"
                                                };
                                                g.contactHostLogging({
                                                  section: p,
                                                  step: "clicked_contact",
                                                  action: "click"
                                                });
                                                g.contactHostHandler(p, q)
                                              },
                                              signup_login_first: function() {
                                                g.experimentAssignment = {
                                                  signup_order: "signup_login_first"
                                                };
                                                g.contactHostLogging({
                                                  section: p,
                                                  step: "clicked_contact",
                                                  action: "click"
                                                });
                                                Airbnb.Mediator.trigger("p3::contactHostLogging", {
                                                  section: "signup_login_modal",
                                                  step: "signup_login_launched",
                                                  action: "impression"
                                                });
                                                Airbnb.SignupLoginModal.launchSignup({
                                                  callback: function() {
                                                    g.contactHostLogging({
                                                      section: "signup_login_modal",
                                                      step: "logged_in",
                                                      action: "submit"
                                                    });
                                                    g.contactHostHandler(p, q)
                                                  },
                                                  flow: "contact-host"
                                                })
                                              },
                                              treatment_unknown: function() {
                                                g.contactHostHandler(p, q)
                                              }
                                            })
                                          } else {
                                            g.contactHostHandler(p, q)
                                          }
                                        }
                                    </script>
                                </p>
                                <div class="row-space-4 row-space-top-4">
                                    <a href="images/ye.jpg?interpolation=lanczos-none&size=x_large&output-format=progressive-jpeg&output-quality=70" class="photo-trigger" data-index="1">
                                        <img src="images/ye.jpg?interpolation=lanczos-none&size=x_large&output-format=progressive-jpeg&output-quality=70" class="media-photo media-photo-block row-space-1 row-space-top-1 img-responsive" alt="The Villa at Satori">
                                        </img>
                                    </a>
                                    <div class="row">
                                        <div class="kolomlg-9">
                                            <p class="text-muted pull-left">
                                                The Villa at Satori
                                            </p>
                                        </div>
                                        <div class="kolomlg-3"></div>       
                                    </div>
                                </div>
                                <hr></hr>
                                <div class="row">
                                    <div class="kolomd-3">
                                        <div class="text-muted">
                                            The Space
                                        </div>
                                    </div>
                                    <div class="kolomd-9">
                                        <div class="row"> 
                                            <div class="kolomd-6">
                                                <div>
                                                    Property Type:
                                                    <strong>
                                                        <a href="#" class="link-reset">
                                                            Villa
                                                        </a>
                                                    </strong>
                                                </div>
                                                <div>
                                                    Accomodates:
                                                    <strong>5</strong>
                                                </div>
                                                <div>
                                                    Bedrooms:
                                                    <strong>2</strong>
                                                </div>
                                                <div>
                                                    Bathrooms:
                                                    <strong>2</strong>
                                                </div>
                                            </div>
                                            <div class="kolomd-6">
                                                <div>
                                                    Beds:
                                                    <strong>3</strong>
                                                </div>
                                                <div>
                                                    Check In:
                                                    <strong>2:00 PM</strong>
                                                </div>
                                                <div>
                                                    Check Out:
                                                    <strong>12:00 PM (noon)</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <hr></hr>
                                <div class="row">
                                    <div class="kolomd-3 text-muted">
                                        Amenities
                                    </div>
                                    <div class="kolomd-9 expandable expandable-trigger-more expanded">
                                        <div class="expandable-content-summary">
                                            <div class="row">    
                                                <div class="kolomsm-6">
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-meal">   
                                                        </i>
                                                        <span id="amenity-short-tooltip-trigger-8">
                                                            Kitchen
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-internet">
                                                            
                                                        </i>
                                                        <span id="amenity-short-tooltip-trigger-3">
                                                            Internet
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-tv">
                                                            
                                                        </i>
                                                        <span id="amenity-short-tooltip-trigger-1">
                                                            TV
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="kolomsm-6">
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-air-conditioning"> 
                                                        </i>
                                                        <span id="amenity-short-tooltip-trigger-5">
                                                            Air Conditioning
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-washer">   
                                                        </i>
                                                        <span id="amenity-short-tooltip-trigger-33">
                                                            Washer
                                                        </span>
                                                    </div>
                                                    <a href="#" class="expandable-trigger-more">
                                                        <strong>
                                                            + More
                                                        </strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expandable-content-full" style="transition: none 0s ease 0s ;">
                                            <div class="row">
                                                <div class="kolomsm-6">
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-meal">   
                                                        </i>
                                                        <span id="amenity-long-tooltip-trigger-8">
                                                            <strong>
                                                                Kitchen
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-internet"> 
                                                        </i>
                                                        <span id="amenity-long-tooltip-trigger-3">
                                                            <strong>
                                                                Internet
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-tv"> 
                                                        </i>
                                                        <span id="amenity-long-tooltip-trigger-1">
                                                            <strong>
                                                                TV
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-30">
                                                            <del>
                                                                Heating
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-air-conditioning">
                                                            
                                                        </i>
                                                        <span id="amenity-long-tooltip-trigger-5">
                                                            <strong>
                                                                Air Conditioning
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1">
                                                        <i class="icon h3 icon-washer">
                                                        </i>
                                                        <span id="amenity-long-tooltip-trigger-33">
                                                            <strong>
                                                                Washer
                                                            </strong>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1"></div>
                                                    <div class="row-space-1"></div>
                                                    <div class="row-space-1"></div>
                                                    <div class="row-space-1"></div>
                                                    <div class="row-space-1 text-muted"></div>
                                                    <div class="row-space-1 text-muted"></div>
                                                    <div class="row-space-1"></div>
                                                    <div class="row-space-1 text-muted"></div>
                                                </div>
                                                <div class="kolomsm-6">
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-11">
                                                            <del>
                                                                Smoking Allowed
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-11">
                                                            <del>
                                                                Wheelchair Accessible
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-11">
                                                            <del>
                                                                Indoor Fireplace
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-11">
                                                            <del>
                                                                Smoking Allowed
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-11">
                                                            <del>
                                                                Smoking Allowed
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-11">
                                                            <del>
                                                                Smoking Allowed
                                                            </del>
                                                        </span>
                                                    </div>
                                                    <div class="row-space-1 text-muted">
                                                        <span id="amenity-long-tooltip-trigger-11">
                                                            <del>
                                                                Smoking Allowed
                                                            </del>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr></hr>
                                <div class="row">
                                    <div class="kolomd-3">
                                        <div class="text-muted">
                                            Prices
                                        </div>
                                    </div>
                                    <div class="kolomd-9">
                                        <div class="row">
                                            
                                            <div class="kolomd-6">
                                                <div>
                                                    Extra people:
                                                    <strong>
                                                        <span id="localized-people-pricing-description-string">
                                                            Rp201397 / night after 2 guests
                                                        </span>
                                                    </strong>
                                                </div>
                                                <div>
                                                    Weekly Price:
                                                    <strong>
                                                        <span id="weekly-price-string">
                                                            Rp1487679
                                                        </span>
                                                        /week
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="kolomd-6">
                                                <div>
                                                    Cancellation:
                                                    <strong>
                                                        <a href="#" id="cancellation-policy" data-popup="true">
                                                            Strict
                                                        </a>
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr></hr>
                                <div class="row">
                                    <div class="kolomd-3 text-muted">
                                        Description
                                    </div>
                                    <div class="kolomd-9 expandable expandable-trigger-more">
                                        <div class="expandable-content expandable-content-long">
                                            <p>
                                                <strong>
                                                    The Space
                                                </strong>
                                            </p>
                                            <p>
                                                Situated near the heart of bustling artistic and cultural centre of Ubud, Bali, Satori is our lovely private home that we rent when we are away. It offers super comfortable accommodation in a jungle garden setting with stunning rice field views. 
                                            </p>
                                            <p>
                                                If you're after an isolated, out of the way retreat, then Satori may be a little too urban for you. Here we offer the best of both worlds, close proximity to all the wonderful services that Ubud offers, within a truly magical setting! Step directly from the hustle and bustle of Ubud life though a doorway to another world, a stunning oasis, of water features, jungle garden and beautiful rice field views. 
                                            </p>
                                            <div class="expandable-indicator"></div>
                                        </div>
                                        <a href="#" class="expandable-trigger-more">
                                            <strong>
                                                +More
                                            </strong>
                                        </a>
                                    </div>
                                </div>
                                <hr></hr>
                                <div class="row">
                                    <div class="kolomd-3">
                                        <div class="text-muted">
                                            House Rules
                                        </div>
                                    </div>
                                    <div class="kolomd-9 expandable expandable-trigger-more">
                                        <div class="expandable-content">
                                            <p>
                                                Strict non-smoking policy. Smoking only permitted outdoors.
                                            </p>
                                            <p>
                                                The Villa comes with full-time housekeepers Monday to Saturday. Wayan and Kadek begin at 8.30 and work until 3.30pm. They will make the breakfast and clean the entire villa each day, along with booking massages or scooters/drivers etc. 
                                            </p>
                                            <p>
                                                If you require more privacy you can release them earlier in the day if you wish - it's totally up to you and the degree or service you would like :-)  
                                            </p>
                                            <p>

                                            </p>
                                            <div class="expandable-indicator"></div>
                                        </div>
                                        <a href="#" class="expandable-trigger-more">
                                            <strong>
                                                + More
                                            </strong>
                                        </a>
                                    </div>
                                </div>
                                <hr></hr>
                                <div class="row">
                                    <div class="kolomd-3">
                                        <div class="text-muted">
                                            Availability
                                        </div>
                                    </div>
                                    <div class="kolomd-9">
                                        <div class="row">
                                            <div class="kolomd-6">
                                                <div>
                                                    Minimum Stay:
                                                    <strong>
                                                        2 nights
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="kolomd-6">
                                                <a href="#" id="view-calendar">
                                                    <strong>
                                                        View Calendar
                                                    </strong>
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row-space-4 row-space-top-4">
                                    <a href="images/meme.jpg?interpolation=lanczos-none&size=x_large&output-format=progressive-jpeg&output-quality=70" class="photo-trigger" data-index="2">
                                        <img class="media-photo media-photo-block row-space-1 row-space-top-1 img-responsive" src="images/meme.jpg?interpolation=lanczos-none&size=x_large&output-format=progressive-jpeg&output-quality=70" alt="Villa entrance">
                                    </a>
                                    <div class="row"> 
                                        <div class="kolomlg-9">
                                            <p class="text-muted pull-left">
                                                Villa entrance
                                            </p>
                                        </div>
                                        <div class="kolomlg-9"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="reviews" class="room-section webkit-render-fix">
                <div class="panel">
                    <div class="page-container-responsive row-space-2">
                        <div class="row">
                            <div class="kolomlg-8">
                                <div class="row-space-8 row-space-top-8">
                                    <h4 class="row-space-4 text-center-sm">
                                        67 Reviews
                                        <div class="star-rating">
                                            <div class="foreground">
                                                <i class="icon icon-pink icon-beach icon-star">
                                                </i>
                                                <i class="icon icon-pink icon-beach icon-star"> 
                                                </i>
                                                <i class="icon icon-pink icon-beach icon-star">  
                                                </i>
                                                <i class="icon icon-pink icon-beach icon-star">
                                                </i>
                                            </div>
                                            <div class="background">
                                                <i class="icon icon-star icon-light-gray">
                                                </i>
                                                <i class="icon icon-star icon-light-gray"> 
                                                </i>
                                                <i class="icon icon-star icon-light-gray">
                                                </i>
                                                <i class="icon icon-star icon-light-gray">
                                                </i>
                                                <i class="icon icon-star icon-light-gray">   
                                                </i>
                                            </div>
                                        </div>
                                    </h4>
                                    <div class="row">
                                        <div class="kolomlg-3">
                                            <div class="text-muted">
                                                Summary
                                            </div>
                                        </div>
                                        <div class="kolomlg-9">
                                            <div class="row">
                                                <div class="kolomlg-6">
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star"> 
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">  
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">  
                                                                    </i>
                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray">  
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">   
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">    
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">                                                                  
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <strong>
                                                            Accuracy
                                                        </strong>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star">    
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">             
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">   
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">    
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">                                                        
                                                                    </i>
                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <strong>
                                                            Communication
                                                        </strong>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <strong>
                                                            Cleanlines
                                                        </strong>
                                                    </div>
                                                </div>
                                                <div class="kolomlg-6">
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star-half">
                                                                        
                                                                    </i>
                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        :
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <strong>
                                                            Location
                                                        </strong>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <strong>
                                                            Check In
                                                        </strong>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right">
                                                            <div class="star-rating">
                                                                <div class="foreground">
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-pink icon-beach icon-star-half">
                                                                        
                                                                    </i>
                                                                </div>
                                                                <div class="background">
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                    <i class="icon icon-star icon-light-gray">
                                                                        
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <strong>
                                                            Value
                                                        </strong>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div id="review-translate-button-wrapper" class="row-space-top-6 hide" data-is-translated="false">
                                        <button id="review-translate-button" class="btn btn-block">
                                            <span class="review-translate-button-label">
                                                Translate reviews to English
                                            </span>
                                            <div class="gBrandingText">
                                                powered by
                                                <img src="#" width="51" alt="Google">
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="review-content">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="kolomd-3 text-center row-space-2">
                                                <a href="#" class="media-photo media-round row-space-1 text-center" target="blank" name="review_23988056">
                                                    <img src="images/admin_foto.png?interpolation=lanczos-none&crop=w:w;*,*&crop=h:h;*,*&resize=68:*&output-format=jpg&output-quality=70" class="lazy" width="68" height="68" title="Belinda" alt="Belinda" style="display: inline;">
                                                </a>
                                                <div class="name">
                                                    <a href="#" class="text-muted link-reset" target="blank">
                                                        Belinda
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="kolomd-9">
                                                <div class="row-space-2">
                                                    <div class="review-text expandable expandable-trigger-more" data-original-text="" data-review-id="23988056">
                                                        <div class="expandable-content">
                                                            <p>
                                                                'Satori' villa is one of our best Hosteeland stays so far, and an excellent example of why we would never stay in a hotel again. Communication with Mark was a breeze and he always replied promptly to any of our queries. The staff were brilliant and showed genuine warmth to all of us and especially our two kids (aged 7 and 5). The villa itself is stunning and well located to explore so much that this part of Bali has to offer. Thanks to Mark, Wayan, Kadek and SakMing, and of course Dewa too, we will be recommending you to all our friends back home x                                                            </p>
                                                            <div class="expandable-indicator expandable-indicator-light"></div>
                                                        </div>
                                                        <a href="#" class="expandable-trigger-more text-muted">
                                                            <strong>
                                                                + More
                                                            </strong>
                                                        </a>
                                                    </div>
                                                    <div class="text-muted review-subtext">
                                                        <div class="review-translation-language" data-review-id="23988056"></div>
                                                        <div class="date">
                                                            December 2014
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-space-2">
                                            <div class="kolomd-9 col-md-push-3">
                                                <hr></hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="kolomd-3 text-center row-space-2">
                                                <a href="#" class="media-photo media-round row-space-1 text-center" target="blank" name="review_23988056">
                                                    <img src="images/admin_foto.png?interpolation=lanczos-none&crop=w:w;*,*&crop=h:h;*,*&resize=68:*&output-format=jpg&output-quality=70" class="lazy" width="68" height="68" title="Belinda" alt="Belinda" style="display: inline;">
                                                </a>
                                                <div class="name">
                                                    <a href="#" class="text-muted link-reset" target="blank">
                                                        Belinda
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="kolomd-9">
                                                <div class="row-space-2">
                                                    <div class="review-text expandable expandable-trigger-more" data-original-text="" data-review-id="23988056">
                                                        <div class="expandable-content">
                                                            <p>
                                                                'Satori' villa is one of our best Hosteeland stays so far, and an excellent example of why we would never stay in a hotel again. Communication with Mark was a breeze and he always replied promptly to any of our queries. The staff were brilliant and showed genuine warmth to all of us and especially our two kids (aged 7 and 5). The villa itself is stunning and well located to explore so much that this part of Bali has to offer. Thanks to Mark, Wayan, Kadek and SakMing, and of course Dewa too, we will be recommending you to all our friends back home x                                                            </p>
                                                            <div class="expandable-indicator expandable-indicator-light"></div>
                                                        </div>
                                                        <a href="#" class="expandable-trigger-more text-muted">
                                                            <strong>
                                                                + More
                                                            </strong>
                                                        </a>
                                                    </div>
                                                    <div class="text-muted review-subtext">
                                                        <div class="review-translation-language" data-review-id="23988056"></div>
                                                        <div class="date">
                                                            December 2014
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-space-2">
                                            <div class="kolomd-9 col-md-push-3">
                                                <hr></hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="kolomd-3 text-center row-space-2">
                                                <a href="#" class="media-photo media-round row-space-1 text-center" target="blank" name="review_23988056">
                                                    <img src="images/admin_foto.png?interpolation=lanczos-none&crop=w:w;*,*&crop=h:h;*,*&resize=68:*&output-format=jpg&output-quality=70" class="lazy" width="68" height="68" title="Belinda" alt="Belinda" style="display: inline;">
                                                </a>
                                                <div class="name">
                                                    <a href="#" class="text-muted link-reset" target="blank">
                                                        Belinda
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="kolomd-9">
                                                <div class="row-space-2">
                                                    <div class="review-text expandable expandable-trigger-more" data-original-text="" data-review-id="23988056">
                                                        <div class="expandable-content">
                                                            <p>
                                                                'Satori' villa is one of our best Hosteeland stays so far, and an excellent example of why we would never stay in a hotel again. Communication with Mark was a breeze and he always replied promptly to any of our queries. The staff were brilliant and showed genuine warmth to all of us and especially our two kids (aged 7 and 5). The villa itself is stunning and well located to explore so much that this part of Bali has to offer. Thanks to Mark, Wayan, Kadek and SakMing, and of course Dewa too, we will be recommending you to all our friends back home x                                                            </p>
                                                            <div class="expandable-indicator expandable-indicator-light"></div>
                                                        </div>
                                                        <a href="#" class="expandable-trigger-more text-muted">
                                                            <strong>
                                                                + More
                                                            </strong>
                                                        </a>
                                                    </div>
                                                    <div class="text-muted review-subtext">
                                                        <div class="review-translation-language" data-review-id="23988056"></div>
                                                        <div class="date">
                                                            December 2014
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-space-2">
                                            <div class="kolomd-9 col-md-push-3">
                                                <hr></hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="kolomd-3 text-center row-space-2">
                                                <a href="#" class="media-photo media-round row-space-1 text-center" target="blank" name="review_23988056">
                                                    <img src="images/admin_foto.png?interpolation=lanczos-none&crop=w:w;*,*&crop=h:h;*,*&resize=68:*&output-format=jpg&output-quality=70" class="lazy" width="68" height="68" title="Belinda" alt="Belinda" style="display: inline;">
                                                </a>
                                                <div class="name">
                                                    <a href="#" class="text-muted link-reset" target="blank">
                                                        Belinda
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="kolomd-9">
                                                <div class="row-space-2">
                                                    <div class="review-text expandable expandable-trigger-more" data-original-text="" data-review-id="23988056">
                                                        <div class="expandable-content">
                                                            <p>
                                                                'Satori' villa is one of our best Hosteeland stays so far, and an excellent example of why we would never stay in a hotel again. Communication with Mark was a breeze and he always replied promptly to any of our queries. The staff were brilliant and showed genuine warmth to all of us and especially our two kids (aged 7 and 5). The villa itself is stunning and well located to explore so much that this part of Bali has to offer. Thanks to Mark, Wayan, Kadek and SakMing, and of course Dewa too, we will be recommending you to all our friends back home x                                                            </p>
                                                            <div class="expandable-indicator expandable-indicator-light"></div>
                                                        </div>
                                                        <a href="#" class="expandable-trigger-more text-muted">
                                                            <strong>
                                                                + More
                                                            </strong>
                                                        </a>
                                                    </div>
                                                    <div class="text-muted review-subtext">
                                                        <div class="review-translation-language" data-review-id="23988056"></div>
                                                        <div class="date">
                                                            December 2014
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="kolomlg-9 col-offset-3">
                                                <p>
                                                    This host has 102 reviews for other properties.
                                                </p>
                                                <a href="#" class="btn">
                                                    View Other Reviews
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="kolomlg-9 col-offset-3">
                                                <div class="pagination pagination-responsive" per_page="7">
                                                    <div class="site-pagination">
                                                        <ul>
                                                            <li class="less"><a href="#"><span class="prev"></span></a></li>
                                                            <li class="page-number"><a href="#">1</a></li>
                                                            <li class="page-number"><a href="#">2</a></li>
                                                            <li class="page-number"><a href="#" class="pagination-active">3</a></li>
                                                            <li class="page-number"><a href="#">4</a></li>
                                                            <li class="page-number"><a href="#">5</a></li>
                                                            <li class="page-number"><a href="#">6</a></li>
                                                            <li class="more"><a href="#">Next<span class="next"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div id="host-profile" class="room-section webkit-render-fix">
                <div class="page-container-responsive row-space-2">
                    <div class="row">  
                        <div class="kolomlg-8">
                            <div class="row-space-8 row-space-top-8">
                                <h4 class="row-space-4 text-center-sm">
                                    About the Host, Suryo
                                </h4>
                                <div class="row">
                                    <div class="kolomd-3 text-center">
                                        <a href="#" class="media-photo media-round">
                                            <img src="images/profile.png?interpolation=lanczos-none&crop=w:w;*,*&crop=h:h;*,*&resize=225:*&output-format=jpg&output-quality=70" width="90" height="90" title="Suryo" nopin="nopin" alt="Suryo">
                                        </a>
                                    </div>
                                    <div class="kolomd-9">
                                        <div class="expandable expandable-trigger-more row-space-2 expanded">
                                            <div class="expandable-content">
                                                <p>We love to host people from all over the world! I work in film and television and my Bali home is a creative retreat for half the year. When I am not there I make it available to others from all over the world to enjoy. Rest, relax, or be inspired!     </p>
                                                <div>
                                                    <a href="#">
                                                        <strong>
                                                            View full profile
                                                        </strong>
                                                    </a>
                                                </div>
                                                <div class="expandable-indicator"></div>
                                            </div>
                                            <a href="#" class="expandable-trigger-more">
                                                <strong>
                                                    + More
                                                </strong>
                                            </a>
                                        </div>
                                        <div class="row row-condensed row-space-2">
                                            <div class="kolomd-6">
                                                <div>Ubud, Bali, Indonesia</div>
                                                <div>Member since November 2012</div>
                                            </div>
                                            <div class="kolomd-6">
                                                <div>Response rate:
                                                    <strong>100%</strong>
                                                    <small class="response-details text-muted hide">
                                                        (last 26 contacts)
                                                    </small>
                                                </div>
                                                <div>Response time:
                                                    <strong>within an hour</strong>
                                                </div>
                                            </div>       
                                        </div>
                                        <div id="contact-wrapper">
                                            <button id="host-profile-contact-btn" class="btn btn-small btn-primary">
                                                Contact Host
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-space-8 row-space-top-8 social-connections-section">
                                <div class="row">
                                    <div class="kolomd-3">
                                        <div class="text-muted">
                                            Connections
                                        </div>
                                    </div>
                                    <div class="kolomd-9 facebook-button-wrapper">
                                        <p>
                                        Are you or your friends connected with this host?
                                        </p>
                                        <a href="#" class="fb-button fb-blue btn icon-btn btn-small btn-facebook" data-redirect_uri=""
                                        data-populate_uri="">
                                        <span class="icon-container">
                                            <i class="icon icon-facebook">
                                                
                                            </i>
                                        </span>
                                        <span class="text-container">
                                            Connect with facebook
                                        </span>
                                        </a>
                                    </div>
                                    <div class="kolomd-9 social-connections hide">
                                       <p>
                                            You and Suryo
                                            <a href="#" target="blank">
                                                Learn More
                                            </a>
                                       </p>
                                       <div class="social-connections-list row"></div>
                                       <a href="" class="more-connections-link hide">
                                        <span id="more-count"></span>
                                        more friend connections
                                       </a> 
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row-space-8 row-space-top-8">
                                <div class="row">
                                    <div class="kolomd-3">
                                        <div class="text-muted">
                                            Trust
                                        </div>
                                    </div>
                                    <div class="kolomd-9">
                                        <div class="row row-condensed">
                                            <div class="kolomd-3 kolomsm-6">
                                                <a href="#" class="link-reset" rel="nofollow">
                                                    <div class="text-center text-wrap">
                                                        <div class="badge-pill h3">
                                                            <span class="badge-pill-count">
                                                                173
                                                            </span>
                                                        </div>
                                                        <div class="row-space-top-1">
                                                            Reviews
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="verifications-tooltip" class="tooltip tooltip-bottom-middle tooltip-panel-light tooltip-panel-collapse fade" data-sticky="true" data-trigger="#verified-id-icon" aria-hidden="true" role="tooltip">
                                            <div class="panel-header panel-header-gray">
                                                Verifications
                                            </div>
                                            <div class="panel-padding panel-body">
                                                <p>
                                                    Suryo has completed online and offline ID verification.
                                                </p>
                                                <p>
                                                    <a href="#">
                                                        Learn more »
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="neighborhood" class="room-section">
                <div class="panel location-panel">
                    <div id="map" class="main_content embedded-content" data-static-map-url="https://maps.googleapis.com/maps/api/staticmap?maptype=&markers=%2C&size=&zoom=14" data-provider="Google" data-lng="115.26461422886574" data-lat="-8.53159977558202" style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden;">
                        <div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
                            <div style='position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url("https://maps.gstatic.com/mapfiles/openhand_8_8.cur"), default;'>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%;">
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 1;">
                                                <div style="width: 256px; height: 256px; position: absolute; left: 479px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 479px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 223px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 223px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 735px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 735px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 479px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 479px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 223px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 223px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 735px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 735px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -33px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -33px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 991px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 991px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -33px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -33px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 991px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 991px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -289px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -289px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 1247px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 1247px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -289px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -289px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 1247px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 1247px; top: 569px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 30;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 1;">
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 479px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 479px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 223px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 223px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 735px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 735px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 479px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 479px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 223px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 223px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 735px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 735px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -33px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -33px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 991px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 991px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -33px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -33px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 991px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 991px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -289px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -289px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1247px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1247px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -289px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -289px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1247px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1247px; top: 569px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 1;">
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 479px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 479px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 223px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 223px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 735px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 735px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 479px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 479px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 223px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 223px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 735px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 735px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -33px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -33px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 991px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 991px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -33px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -33px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 991px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 991px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -289px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 223px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1247px; top: 57px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1247px; top: 313px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -289px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -289px; top: 569px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1247px; top: -199px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1247px; top: 569px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 1;">
                                            <div style="width: 256px; height: 256px; position: absolute; left: 735px; top: 57px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 479px; top: -199px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 223px; top: -199px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 223px; top: -199px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 1247px; top: 57px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 479px; top: 57px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 223px; top: 57px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: -33px; top: 57px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 991px; top: 57px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: -33px; top: -199px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 991px; top: -199px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: -289px; top: 57px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: -289px; top: -199px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 1247px; top: -199px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 991px; top: 313px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 991px; top: 569px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 479px; top: 313px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 479px; top: 569px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: -33px; top: 313px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: -33px; top: 569px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 223px; top: 569px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: -289px; top: 313px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: -289px; top: 569px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 223px; top: 313px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 735px; top: 313px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 1247px; top: 313px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 735px; top: 569px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                            <div style="width: 256px; height: 256px; position: absolute; left: 1247px; top: 569px; opacity: 1; transition: opacity 200ms ease-out 0s;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;">
                                    <div style="width: 1px; height: 1px; position: absolute; left: 680px; top: 238px;"></div>
                                </div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%;">
                                    <div style="width: 1px; height: 1px; position: absolute; left: 680px; top: 238px;"></div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                        <div style="z-index: -202; cursor: pointer; display: none;">
                                            <div style="width: 30px; height: 27px; overflow: hidden; position: absolute;">
                                                <img src="#" style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; width: 90px; height: 27px;" draggable="false">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                <a href="#" style="position: static; overflow: visible; float: none; display: inline;" target="blank" title="Click to see this area on Google Maps">
                                    <div style="width: 62px; height: 26px; cursor: pointer;">
                                        <img src="#" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" draggable="false">
                                    </div>
                                </a>
                            </div>
                            <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 264px; bottom: 0px; width: 121px;">
                                <div class="gm-style-cc" draggable="false" style="-moz-user-select: none;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;">
                                        <a href="#" style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">
                                            Map Data
                                        </a>
                                        <span>
                                            Map data ©2014 Google
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 524px; top: 234px;">
                                <div style="padding: 0px 0px 10px; font-size: 16px;">
                                    Map Data
                                </div>
                                <div style="font-size: 13px;">
                                    Map data ©2014 Google
                                </div>
                                <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
                                    <img src="#" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" draggable="false">
                                </div>
                            </div>
                            <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                <div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                    Map data ©2014 Google
                                </div>
                            </div>
                            <div class="gmnoprint gm-style-cc" style="z-index: 1000001; position: absolute; -moz-user-select: none; right: 96px; bottom: 0px;" draggable="false">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                </div>
                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;">
                                    <a href="#" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" target="blank">
                                        Terms of Use
                                    </a>
                                </div>
                            </div>
                            <div class="gm-style-cc" draggable="false" style="-moz-user-select: none; position: absolute; right: 0px; bottom: 0px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                </div>
                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;">
                                    <a href="#" target="_new" title="Report errors in the road map or imagery to Google" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">
                                        Report a map error
                                    </a>
                                </div>
                            </div>
                            <div class="gmnoprint" style="margin: 5px; -moz-user-select: none; position: absolute; left: 0px; top: 0px;" draggable="false" controlwidth="32" controlheight="84">
                                <div style='cursor: url("https://maps.gstatic.com/mapfiles/openhand_8_8.cur"), default; position: absolute; left: 0px; top: 0px;'>
                                    <div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                        <img src="#" style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" draggable="false">
                                    </div>
                                    <div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                        <img src="#" style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" draggable="false">
                                    </div>
                                    <div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                        <img src="#" style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" draggable="false">
                                    </div>
                                    <div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                        <img src="#" style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" draggable="false">
                                    </div>
                                </div>
                                <div class="gmnoprint" controlwidth="20" controlheight="39" style="position: absolute; left: 6px; top: 45px;">
                                    <div style="width: 20px; height: 39px; overflow: hidden; position: absolute;">
                                        <img src="#" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" draggable="false">
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;" title="Zoom in"></div>
                                    <div style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div>
                                </div>
                            </div>
                            <div class="gm-style-cc" draggable="false" style="-moz-user-select: none; position: absolute; right: 168px; bottom: 0px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                </div>
                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;">
                                    <span>
                                        500 m 
                                    </span>
                                    <div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 53px;">
                                        <div style="width: 100%; height: 4px; position: absolute; background-color: rgb(255, 255, 255); bottom: 0px; left: 0px;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; width: 4px; height: 8px; background-color: rgb(255, 255, 255);"></div>
                                        <div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); bottom: 0px; right: 0px;"></div>
                                        <div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; bottom: 1px; right: 1px; left: 1px;"></div>
                                        <div style="position: absolute; left: 1px; top: 1px; width: 2px; height: 6px; background-color: rgb(102, 102, 102);"></div>
                                        <div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul id="guidebook-recommendations" class="hide">
                        <li class="user-image">
                            <a href="#">
                                <img src="#" width="90" height="90" title="Suryo" nopin="nopin" alt="Suryo">
                            </a>
                        </li>
                        <li class="info" data-neighborhood-id="4881" href="#"></li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                        <li class="recommendation" data-img="" data-type="restaurant" data-lng="" data-lat="">
                            <h2>
                                <a href="#">
                                    Taco Casa - Mexican Restaurant
                                </a>
                            </h2>
                            <div class="description">

                            Good mexican comfort food - will deliver to Satori - great for movie nights! 
    
                            </div>
                            <address>
                                <span class="location address"></span>
                                <span class="city">
                                    Ubud, Gianyar
                                </span>
                                <span class="state">
                                    Bali
                                </span>
                                <span class="zipcode">
                                    80571
                                </span>
                            </address>
                        </li>
                    </ul>
                    <div id="hover-card" class="panel">
                        <div id="neighborhood-seo-link" class="panel-body not-launched">
                            <div class="header row row-table text-center text-contrast">
                                
                                <div class="col-12 col-center">
                                    <div class="h6 text-contrast">
                                        Neighborhood
                                    </div>
                                </div>
                                
                            </div>
                            <div class="text-center row-space-top-6">
                                <h3 class="seo-link">
                                    <a href="#">
                                        Ubud
                                    </a>
                                </h3>
                                <h3 class="seo-text">
                                    Ubud
                                </h3>
                            </div>
                        </div>
                        <div class="panel-body">
                            
                            <div class="text-center">
                                Listing Location
                            </div>
                            <div class="text-center">
                                <span>
                                    <a href="#" class="text-muted">
                                        <span>
                                            Bali,
                                        </span>
                                    </a>
                                </span>
                                <span>
                                    <a href="#" class="text-muted">
                                        <span>
                                            Indonesia
                                        </span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="similar-listings" class="row-space-6 row-space-top-4">
                <div class="page-container-responsive">
                    <h4 class="row-space-4 text-center-sm">
                        Similar Listings
                    </h4>
                    <div class="sliding-carousel similar-listings">
                        <div class="similar-listings-results carousel-view">
                            <ul class="listings-container carousel-item-list list-unstyled row" style="width: 8360px;">
                                <li class="carousel-item page-container-responsive" data-index="0">
                                    <div class="kolomd-4">
                                        <div class="listing" itemtype="http://schema.org/Enumeration" itemscope="" data-id="" data-url="" data-name="LAKSHMI - DELUXE PRIVATE VILLA UBUD" data-lng="" data-lat="">
                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">
                                                        <img src="images/nikoi.jpg?interpolation=lanczos-none&size=x_medium&output-format=jpg&output-quality=70" class="img-responsive-height" alt="LAKSHMI - DELUXE PRIVATE VILLA UBUD" data-current="0" itemprop="image">
                                                    </div>
                                                </a>
                                                <a href="#" class="target-details block-link full"></a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">
                                                            Rp
                                                        </sup>
                                                        <span class="h3 price-amount">
                                                            289034
                                                        </span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-hosting_id="" data-address="Ubud" data-name="LAKSHMI - DELUXE PRIVATE VILLA UBUD" data-img="">
                                                        <input id="wishlist-widget-923810" type="checkbox" data-for-hosting="923810" name=""></input>
                                                        <label class="hide-sm" for="">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked">
                                                                
                                                            </i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2">
                                                                
                                                            </i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">
                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="images/bli.jpg?interpolation=lanczos-none&crop=w:w;*,*&crop=h:h;*,*&resize=68:*&output-format=jpg&output-quality=70" alt="">
                                                    </a>
                                                    <a href="#" class="text-normal">
                                                        <div class="h5 listing-name text-truncate row-space-top-1" title="LAKSHMI - DELUXE PRIVATE VILLA UBUD">
                                                            LAKSHMI - DELUXE PRIVATE VILLA UBUD
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">
                                                        Entire home/apt — 6.6 kilometers away
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kolomd-4">
                                        <div class="listing" itemtype="" itemscope="" data-id="" data-user="" data-url="" data-name="Villa Shimha Private Retreat" data-lng="" data-lat="">
                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">
                                                        <img src="images/kampung.jpg?interpolation=lanczos-none&size=x_medium&output-format=jpg&output-quality=70" class="img-responsive-height" alt="Villa Shimha Private Retreat" data-current="0" itemprop="image">
                                                    </div>
                                                </a>
                                                <a href="#" class="target-details block-link full"></a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">
                                                            Rp
                                                        </sup>
                                                        <span class="h3 price-amount">
                                                            145768
                                                        </span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-hosting_id="" data-address="Ubud" data-name="Villa Shimha Private Retreat" data-img="">
                                                        <input id="wishlist-widget-867787" type="checkbox" data-for-hosting="" name=""></input>
                                                        <label class="hide-sm" for="">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked"></i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2"></i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">
                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="images/ireng.jpg?interpolation=lanczos-none&crop=w:w;*,*&crop=h:h;*,*&resize=68:*&output-format=jpg&output-quality=70" alt="">
                                                    </a>
                                                    <a href="#" class="text-normal">
                                                        <div class="h5 listing-name text-truncate row-space-top-1" title="Villa Shimha Private Retreat">
                                                            Villa Shimha Private Retreat
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">
                                                        Private room — 3.6 kilometers away
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kolomd-4">
                                        <div class="listing" itemtype="" itemscope="" data-id="" data-user="" data-url="" data-name="Villa Kolibri 3 BR Private Luxury! " data-lng="" data-lat="">
                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">
                                                        <img src="images/bunga.jpg?interpolation=lanczos-none&size=x_medium&output-format=jpg&output-quality=70" class="img-responsive-height" alt="Villa Kolibri 3 BR Private Luxury! " data-current="0" itemprop="image">
                                                    </div>
                                                </a>
                                                <a href="#" class="target-details block-link full"></a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">
                                                            Rp
                                                        </sup>
                                                        <span class="h3 price-amount">
                                                            236578
                                                        </span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-hosting_id="" data-address="Ubud" data-name="Villa Kolibri 3 BR Private Luxury! " data-img="">
                                                        <input id="wishlist-widget-3069852" type="checkbox" data-for-hosting="" name=""></input>
                                                        <label class="hide-sm" for="">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked">
                                                                
                                                            </i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2">
                                                                
                                                            </i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">
                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="images/untu.jpg?interpolation=lanczos-none&crop=w:w;*,*&crop=h:h;*,*&resize=68:*&output-format=jpg&output-quality=70" alt="">
                                                    </a>
                                                    <a href="#" class="text-normal">
                                                        <div class="h5 listing-name text-truncate row-space-top-1" title="Villa Kolibri 3 BR Private Luxury! ">
                                                            Villa Kolibri 3 BR Private Luxury!
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">
                                                        Entire home/apt — 5.0 kilometers away
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="carousel-item page-container-responsive" data-index="1">
                                    <div class="kolomd-4">
                                        <div class="listing" itemtype="" itemscope="" data-id="" data-url="" data-name="LAKSHMI - DELUXE PRIVATE VILLA UBUD" data-lng="" data-lat="">
                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">
                                                        <img src="#" class="img-responsive-height" alt="LAKSHMI - DELUXE PRIVATE VILLA UBUD" data-current="0" itemprop="image">
                                                    </div>
                                                </a>
                                                <a href="#" class="target-details block-link full"></a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">
                                                            Rp
                                                        </sup>
                                                        <span class="h3 price-amount">
                                                            289034
                                                        </span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-hosting_id="" data-address="Ubud" data-name="LAKSHMI - DELUXE PRIVATE VILLA UBUD" data-img="">
                                                        <input id="wishlist-widget-923810" type="checkbox" data-for-hosting="923810" name=""></input>
                                                        <label class="hide-sm" for="">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked">
                                                                
                                                            </i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2">
                                                                
                                                            </i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">
                                                    
                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="#" alt="">
                                                    </a>
                                                    <a href="#" class="text-normal">
                                                        <div class="h5 listing-name text-truncate row-space-top-1" title="LAKSHMI - DELUXE PRIVATE VILLA UBUD">
                                                            LAKSHMI - DELUXE PRIVATE VILLA UBUD
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">
                                                        Entire home/apt — 6.6 kilometers away
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kolomd-4">
                                        <div class="listing" itemtype="" itemscope="" data-id="" data-user="" data-url="" data-name="Villa Shimha Private Retreat" data-lng="" data-lat="">
                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">
                                                        <img src="#" class="img-responsive-height" alt="Villa Shimha Private Retreat" data-current="0" itemprop="image">
                                                    </div>
                                                </a>
                                                <a href="#" class="target-details block-link full"></a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">
                                                            Rp
                                                        </sup>
                                                        <span class="h3 price-amount">
                                                            145768
                                                        </span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-hosting_id="" data-address="Ubud" data-name="Villa Shimha Private Retreat" data-img="">
                                                        <input id="wishlist-widget-867787" type="checkbox" data-for-hosting="" name=""></input>
                                                        <label class="hide-sm" for="">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked">
                                                                
                                                            </i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2">
                                                                
                                                            </i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">
                                                    
                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="#" alt="">
                                                    </a>
                                                    <a href="#" class="text-normal">
                                                        <div class="h5 listing-name text-truncate row-space-top-1" title="Villa Shimha Private Retreat">
                                                            Villa Shimha Private Retreat
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">
                                                        Private room — 3.6 kilometers away
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kolomd-4">
                                        <div class="listing" itemtype="" itemscope="" data-id="" data-user="" data-url="" data-name="Villa Kolibri 3 BR Private Luxury! " data-lng="" data-lat="">
                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">
                                                        <img src="#" class="img-responsive-height" alt="Villa Kolibri 3 BR Private Luxury! " data-current="0" itemprop="image">
                                                    </div>
                                                </a>
                                                <a href="#" class="target-details block-link full"></a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">
                                                            Rp
                                                        </sup>
                                                        <span class="h3 price-amount">
                                                            236578
                                                        </span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-hosting_id="" data-address="Ubud" data-name="Villa Kolibri 3 BR Private Luxury! " data-img="">
                                                        <input id="wishlist-widget-3069852" type="checkbox" data-for-hosting="" name=""></input>
                                                        <label class="hide-sm" for="">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked">
                                                                
                                                            </i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2">
                                                                
                                                            </i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">
                                                    
                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="#" alt="">
                                                    </a>
                                                    <a href="#" class="text-normal">
                                                        <div class="h5 listing-name text-truncate row-space-top-1" title="Villa Kolibri 3 BR Private Luxury! ">
                                                            Villa Kolibri 3 BR Private Luxury!
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">
                                                        Entire home/apt — 5.0 kilometers away
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li class="carousel-item page-container-responsive" data-index="2">
                                    
                                    <div class="kolomd-4">
                                        <div class="listing" itemtype="" itemscope="" data-id="" data-url="" data-name="LAKSHMI - DELUXE PRIVATE VILLA UBUD" data-lng="" data-lat="">
                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">
                                                        <img src="#" class="img-responsive-height" alt="LAKSHMI - DELUXE PRIVATE VILLA UBUD" data-current="0" itemprop="image">
                                                    </div>
                                                </a>
                                                <a href="#" class="target-details block-link full"></a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">
                                                            Rp
                                                        </sup>
                                                        <span class="h3 price-amount">
                                                            289034
                                                        </span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-hosting_id="" data-address="Ubud" data-name="LAKSHMI - DELUXE PRIVATE VILLA UBUD" data-img="">
                                                        <input id="wishlist-widget-923810" type="checkbox" data-for-hosting="923810" name=""></input>
                                                        <label class="hide-sm" for="">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked">
                                                                
                                                            </i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2">
                                                                
                                                            </i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">
                                                    
                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="#" alt="">
                                                    </a>
                                                    <a href="#" class="text-normal">
                                                        <div class="h5 listing-name text-truncate row-space-top-1" title="LAKSHMI - DELUXE PRIVATE VILLA UBUD">
                                                            LAKSHMI - DELUXE PRIVATE VILLA UBUD
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">
                                                        Entire home/apt — 6.6 kilometers away
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kolomd-4">
                                        <div class="listing" itemtype="" itemscope="" data-id="" data-user="" data-url="" data-name="Villa Shimha Private Retreat" data-lng="" data-lat="">
                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">
                                                        <img src="#" class="img-responsive-height" alt="Villa Shimha Private Retreat" data-current="0" itemprop="image">
                                                    </div>
                                                </a>
                                                <a href="#" class="target-details block-link full"></a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">
                                                            Rp
                                                        </sup>
                                                        <span class="h3 price-amount">
                                                            145768
                                                        </span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-hosting_id="" data-address="Ubud" data-name="Villa Shimha Private Retreat" data-img="">
                                                        <input id="wishlist-widget-867787" type="checkbox" data-for-hosting="" name=""></input>
                                                        <label class="hide-sm" for="">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked">
                                                                
                                                            </i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2">
                                                                
                                                            </i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">
                                                    
                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="#" alt="">
                                                    </a>
                                                    <a href="#" class="text-normal">
                                                        <div class="h5 listing-name text-truncate row-space-top-1" title="Villa Shimha Private Retreat">
                                                            Villa Shimha Private Retreat
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">
                                                        Private room — 3.6 kilometers away
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kolomd-4">
                                        <div class="listing" itemtype="" itemscope="" data-id="" data-user="" data-url="" data-name="Villa Kolibri 3 BR Private Luxury! " data-lng="" data-lat="">
                                            <div class="panel-image listing-img">
                                                <a href="#" class="media-photo media-cover">
                                                    <div class="listing-img-container media-cover text-center">
                                                        <img src="#" class="img-responsive-height" alt="Villa Kolibri 3 BR Private Luxury! " data-current="0" itemprop="image">
                                                    </div>
                                                </a>
                                                <a href="#" class="target-details block-link full"></a>
                                                <div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
                                                    <div>
                                                        <sup class="h6 text-contrast">
                                                            Rp
                                                        </sup>
                                                        <span class="h3 price-amount">
                                                            236578
                                                        </span>
                                                        <sup class="h6 text-contrast"></sup>
                                                    </div>
                                                </div>
                                                <div class="panel-overlay-top-right wl-social-connection-panel">
                                                    <span class="rich-toggle wish_list_button wishlist-button not_saved" data-hosting_id="" data-address="Ubud" data-name="Villa Kolibri 3 BR Private Luxury! " data-img="">
                                                        <input id="wishlist-widget-3069852" type="checkbox" data-for-hosting="" name=""></input>
                                                        <label class="hide-sm" for="">
                                                            <i class="icon icon-heart icon-pink icon-rausch icon-size-2 rich-toggle-checked"></i>
                                                            <i class="icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked">
                                                                
                                                            </i>
                                                            <i class="icon icon-heart-alt icon-white icon-size-2">
                                                                
                                                            </i>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="panel-body panel-card-section">
                                                <div class="media">
                                                    <a href="#" class="pull-right media-photo media-round card-profile-picture card-profile-picture-offset">
                                                        <img src="#" alt="">
                                                    </a>
                                                    <a href="#" class="text-normal">
                                                        <div class="h5 listing-name text-truncate row-space-top-1" title="Villa Kolibri 3 BR Private Luxury! ">
                                                            Villa Kolibri 3 BR Private Luxury!
                                                        </div>
                                                    </a>
                                                    <div class="text-muted listing-location text-truncate">
                                                        Entire home/apt — 5.0 kilometers away
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>
                                
                            </ul>
                        </div>
                        <div class="carousel-chevron left hide">
                            <i class="icon icon-chevron-left icon-gray icon-size-2"></i>
                        </div>
                        <div class="carousel-chevron right">
                            <i class="icon icon-chevron-right icon-gray icon-size-2">
                                
                            </i>
                        </div>
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