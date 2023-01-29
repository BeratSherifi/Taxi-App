<?php
include("connection/connect.php");

																								   
if(isset($_POST['submit']))                  //if post btn is pressed
{   


    
	$name = $_POST['Name'];      
	$email = $_POST['Email'];      
	$Dfrom = $_POST['From'];      
	$Dto = $_POST['To'];      
	$date = $_POST['Date'];      
	$time = $_POST['Time'];      
	$Adult = $_POST['Adults'];      
	$child = $_POST['Children'];      
	$text = $_POST['Message'];  
   	$pack = $_POST['Comfort'];    	
	
	if(!$name==' '||$email==' '||$Dfrom==' '||$Dto==' '||$date==' '||$time==' '||$Adult==' '||$child==' '||$text==' '||$pack=='')
	{
	
	               echo '<div class="alert alert-dismissable fade in">';
                    echo	'<a href="#"  data-dismiss="alert" ></a>';				
				    echo ' All Text Field must be required!';
					echo  	'</div>';	
	
	}
	else
	{
	  
					
	$sql = "INSERT INTO user_info(name,email,Dfrom,Dto,date,time,adult,child,text,pack) VALUES ('$name', '$email','$Dfrom','$Dto','$date','$time','$Adult','$child','$text','$pack')";
	mysqli_query($db, $sql);
		header("refresh:1;url=result.php");
	
  echo '<div class="alert alert-success alert-dismissable fade in">';
 echo	'<a href="#" data-dismiss="alert" ></a>';
 echo 'Your Booking submit Successfully. Details are send to your Registered E-mail Address.';
echo  	'</div>';
	}
	
	
	
	
	
	
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.html">
		<link rel="shortcut icon" href="images/favicon.html" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="index.php">Home</a></li>
									
									<li><a href="car.php">About</a></li>
									<li><a href="result.php">Taxis</a></li>
									<li><a href="contact.php">Contacts</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.html">
								<img src="images/logo1.png" alt="Your Happy Family">
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>
			
			<div class="c_phone">
				<div class="container_12">
					<div class="grid_12">
						<div class="fa fa-phone"></div>+38976405666
						<span>ORDER NOW!</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon1.png" alt="">
								<div class="extra_wrapper">Fast&amp;
									<div class="color1">Safe</div>
								</div>
							</div>
							<a href="index.php" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon2.png" alt="">
								<div class="extra_wrapper">Best
									<div class="color1">Prices</div>
								</div>
							</div>
							<a href="index.php" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon3.png" alt="">
								<div class="extra_wrapper">Package
									<div class="color1">Delivery</div>
								</div>
							</div>
							<a href="index.php" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			
<!--==============================Content=================================-->
			<div class="content"><div class="ic">all right recived :@2017-18</div>
				<div class="container_12">
					<div class="grid_5">
						<h3>Booking Form</h3>
						
						<form id="bookingForm" action=""  method="post">
							<div class="fl1">
							
								<div class="tmInput">
									<input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
								</div>
								
								<div class="tmInput">
									<input name="From" placeHolder="From:(location)" type="text" data-constraints="@NotEmpty @Required ">
								</div>
							</div>
							
							<div class="fl1">
								<div class="tmInput">
									<input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
								</div>
								
								<div class="tmInput mr0">
									<input name="To" placeHolder="To:(location)" type="text" data-constraints="@NotEmpty @Required">
								</div>
							</div>
							
							<div class="clear"></div>
							<strong>Pick Time</strong>
							
							<div class="tmInput">
								<input name="Time" placeHolder="" type="text" data-constraints="@NotEmpty @Required">
							</div>
							
							<div class="clear"></div>
							<strong>Pick Date</strong>
							
							<label class="tmDatepicker">
								<input type="text" name="Date"	placeHolder='20/01/2023' data-constraints="@NotEmpty @Required @Date">
							</label>
							<div class="clear"></div>
							<div class="tmRadio">
								<p>Comfort</p>
								<input name="Comfort" type="radio" value='Eco' id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
								<span>Eco</span>
								<input name="Comfort" type="radio"  value='standard'  id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Standard</span>
								<input name="Comfort" type="radio"   value='lux'  id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Lux</span>
							</div>
							<div class="clear"></div>
							<div class="fl1 fl2">
								<em>Adults</em>
								<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option value='1'>1</option>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
								</select>
								<div class="clear height1"></div>
							</div>
							<div class="fl1 fl2">
								<em>Children</em>
								<select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option value='0'>0</option>
									<option value='0'>0</option>
									<option value='1'>1</option>
									<option value='2'>2</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="tmTextarea">
								<textarea name="Message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
							</div>
							<input type='submit' name='submit' class="btn" data-type="submit" value='submit'/>
						</form>
						
						
					</div>
					<div class="grid_6 prefix_1">
						<a href="index2.html" class="type"><img src="images/page1_img1.jpg" alt=""><span class="type_caption">Economy</span></a>
						<a href="index2.html" class="type"><img src="images/page1_img2.jpg" alt=""><span class="type_caption">Standard</span></a>
						<a href="index2.html" class="type"><img src="images/page1_img3.jpg" alt=""><span class="type_caption">Lux</span></a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
<footer style='background:black;'>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Call Us:</span> +389 76405666</div>
					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand"><span class="color1">T</span>axi<span class="color1">T</span>axi </div>
						&copy; 2023	| <a href="#">Privacy Policy</a> </div> Website designed by <a href="#" rel="nofollow">TaxiTaxi</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
		<script>
			<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
		</script>
	</body>
</html>