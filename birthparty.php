<?php
include 'db.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Birthday Party</title>
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
    
</head>

<body>
<!-- header-start -->
<?php
include 'header.php';
?>
                               <!--<div class="box-message box-message-error" id="error">
											<div class="box-message-content">
												<p>Some errors occured!</p>

												<ul class="box-message-errors">
													<li><span id="err"></span></li>
													
												</ul>
											</div>
								</div>-->
    <!-- header-end -->

    <!-- breadcam_area_start -->
    <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
            <div class="breadcam_inner">
                <div class="breadcam_text">
                    
                </div>
            </div>
    </div>
    </br>
    <!-- breadcam_area_end -->
    <h1><center><b>BIRTHDAY PARTY</b></center></h1>
    <h5 style="color:#339966"><center>PLEASE SHARE DETAILS FOR A FINGER LICKIN' GOOD B'DAY PARTY</center></h5><br/>
     <center>
     			<form action="birth_insert.php" method="post" >
                		<div>
									<input type="text" name="name" class="nm" id="name" placeholder="NAME*" required/><br/><br/>
									<input type="text" id="mobile_no" placeholder="MOBILE NO*" name="mobile_no" onKeyPress="return validate(event);" maxlength="10" required/><br/><br/>
									<div class="ci-select">
                                                    <select id="city" name="city" required>
                                                        <option value="">Select City</option>
                                                        <option value="Bhubaneswar">Bhubaneswar</option>
                                                        <option value="Cuttack">Cuttack</option>
                                                        <option value="Berhampur">Berhampur</option>
                                                        <option value="Bhanjanagar">Bhanjanagar</option>
                                                    </select>
                                     </div><br/>
    								<input type="text" id="e_id" name="e_id" placeholder="E-MAIL*" required/><br/><br/>
									<input type="date" id="d_e" name="date" placeholder="DATE OF EVENT*" required ><br/><br/>
						<div class="ci-select">
							<select id="sec" name="rest" value=""  required>
								<option value="">SELECT RESTAURANT</option>
								<option value="Bhubaneswar">Bhubaneswar</option>
								<option value="Cuttack">Cuttack</option>
								<option value="Berhampur">Berhampur</option>
								<option value="Bhanjanagar">Bhanjanagar</option>
							</select>
						</div><br/>
   				<input type="submit"  class="login" id="sbmt"  value="SUBMIT"/>
   </div>
   </form>
   </center>
  <br/>
  	<center><h5 style="color:#339966"> Restaurant Manager to contact for details and confirmation</h5></center>
<!-- footer-start -->
    <?php
	include 'footer.php'
	?>
    <!-- footer-end -->

</div>	
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
	
    <!--<script>
	$(document).ready(function(){
	$("#error").hide();
	$("#sbmt").click(function(){
	var Name = $("#name").val();
	var mobile = $("#mobile_no").val();
	var city = $("#city").val();
	var Email = $("#e_id").val();
	var date = $("#d_e").val();
	var res = $("#sec").val();
	else if(Name == "")
	{
	$("#error").show();
	$("#err").text("Please enter the name");
	$("#name").css("border","2px solid red");
	return false;
	}
	if(mobile == "")
	{
	$("#error").show();
	$("#err").text("Please enter the mobile_no");
	$("#mobile_no").css("border","2px solid red");
	return false;
	}
	if(city == "")
	{
	$("#error").show();
	$("#err").text("Please select the city");
	$("#city").css("border","2px solid red");
	return false;
	}
	else if(Email == "")
	{
	$("#error").show();
	$("#err").text("Please enter Email");
	$("#e_id").css("border","2px solid red");
	return false;
	}
	else if(date == "")
	{
	$("#error").show();
	$("#err").text("Please select the date");
	$("#d_e").css("border","2px solid red");
	return false;
	}
	else if(res == "")
	{
	$("#error").show();
	$("#err").text("Please select the restaurant");
	$("#sec").css("border","2px solid red");
	return false;
	}
	else
	{
	return true;
	}
	});
		});
		</script>-->
        
</body>

</html>