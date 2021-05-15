<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Map</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
	{
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
   color:black;
   margin:auto;
   width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.loc {
  background-color: black;
  color: white;
  margin-top: 0px;
  padding-top: 0px;
}
<!--.location {
	background-color:#D7D7D7;
	color:black;
	margin:auto;
	padding:inherit;
}-->

</style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
<?php
include 'header.php'
?>
    <!-- header-end -->

    <!-- breadcam_area_start -->
    <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
            <div class="breadcam_inner">
                <div class="breadcam_text">
                    <!--<h3>About Us</h3>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br> face higher conduct standards especially in the workplace. That’s why it’s <br> crucial that, as women.</p>-->
                </div>
            </div>
    </div>
    <!-- breadcam_area_end -->

    <!-- single_about_area_start -->
    <div class="single_about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="single_about_text">
                        <h3>MAP</h3>
                            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAuvbuFXvdOJxbZocke6kIAkOrESiShHyc'></script><div style='overflow:hidden;height:471px;width:996px;'><div id='gmap_canvas' style='height:471px;width:996px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://www.symptoma.es/'>Symptoma.es</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=593bbe7196e62c2f94f0d43863d749a7a6de3967'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(-6.1744,106.82940000000008),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-6.1744,106.82940000000008)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br>Niladri vihar<br>751024 bhubaneswar<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                   </div> </br>
                   
                <form action="#">
                  <div>Get Direction From <input type="text" id="location" placeholder="Please enter a location"/>  
                  		To<input type="text" name="road" value="No 6 Janpath, Unit 3, Opposite Ram Mandir, Kharbal Nagar, Bhubaneswar, Odisha - 751001" readonly/>
                        <input type="submit" name="smt" value="Get Directions"/>
                  </div> 
                </form>
     <section class="ftco-section contact-section">
      <div class="row">
    
        <div class="row d-flex mb-12 contact-info">
     
          <div class="column">
          	<div class="bg-light align-self-stretch box p-6 text-center">
          		<h3 class="loc">NearBy Locality</h3>
	            Janpath Janpath RD ,
                   Kharavel nagar road,Janpath Janpath RD ,
                   Kharavel nagar road,Janpath Janpath RD 
	          </div>
          </div>
       
          <div class="column">
          	<div class="bg-light align-self-stretch box p-6 text-center">
          		<h3 class="loc">Category</h3>
	            Restaurant ,
                   Chicken Restaurant,Restaurant ,
                   Chicken Restaurant,Restaurant 
	          </div>
          </div>
          <div class="column">
          	<div class="bg-light align-self-stretch box p-6 text-center">
          		<h3 class="loc">Tags</h3>
	             Order Chicken Online,
                   Chicken Restaurant nearby Kharavel nagar road,Order Chicken Online
	          </div>
          </div>
        </div>
   
      </div>
    </section>
                  <!--<div class="row">   
              <form class="column">
              	<h4><div class="loc">
                	<strong>NearBy Locality</strong></div></h4>
                   Janpath Janpath RD ,
                   Kharavel nagar road
               
              </form>
              <form class="column" >
              	<h4><div  class="loc">
                	<strong>Category</strong></div></h4>
                   Restaurant ,
                   Chicken Restaurant
                
              </form>
              <form class="column">
              	<h4><div class="loc">
                	<strong>Tags</strong></div></h4>
                   Order Chicken Online,
                   Chicken Restaurant nearby Kharavel nagar road
                
              </form>
              </div>
              <br/>
               <div>-->
               		<h1><strong>NEAR BY RESTAURANT OUTLETS</strong></h1><br/>
                    
                    <div><u>Gautam Nagar ST</u><br/>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span></br>
</div>
				 <div><u>Jayadev Vihar</u><br/>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
</div>
               </div>
                
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="single_about_thumb thumb_n1">
                        <!--<img src="img/about/1.png" alt="">-->                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single_about_area_end -->

    <!-- video_area_start -->
    <!--<div class="video_area video_bg zigzag_bg_2 zigzag_bg_1">
        <div class="video_area_inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video_text">
                            <div class="info">
                                <div class="info_inner">
                                        <h4>Watch Video</h4>
                                        <p>You will love our execution</p>
                                </div>
                                <div class="icon_video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=HWnXId_Zg4k"><i class="ti-control-play"></i></a>                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- video_area_end -->

    <!-- single_about_area_start -->
    <!--<div class="single_about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="single_about_thumb thumb_n2">
                        <img src="img/about/2.png" alt="">                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1">
                    <div class="single_about_text">
                        <h3>Daily Food <br>
                            Courses <br>
                            with Drinks </h3>
                            <p class="about_text1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                            </p>
                            <p class="about_text2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.                            </p>
                            <a href="#" class="boxed_btn">View Menu</a>                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- single_about_area_end -->
    
    <!-- testmonial_area_start -->
    <!--<div class="testmonial_area banner-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white mb-60">
                        <h3>Feedback from Customers</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/1.png" alt="">                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/2.png" alt="">                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/1.png" alt="">                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/2.png" alt="">                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/1.png" alt="">                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="img/testmonial/2.png" alt="">                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- testmonial_area_end -->

    <!-- brand_area-start -->
    <!--<div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>Brands love to take Our Services</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                            standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/1.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/02.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/03.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/04.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/05.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/06.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/7.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/12.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/9.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/10.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/11.png" alt="">                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="img/brand/8.png" alt="">                        </div>
                    </div>
          </div>
        </div>
    </div>-->
    <!-- brand_area-end -->

    <!-- footer-start -->
    <?php
	include 'footer.php'
	?>
    <!-- footer-end -->

	
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>