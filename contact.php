<?php

include("connection/connect.php");
error_reporting(0);





if(isset($_POST['submit']))                  //if post btn is pressed
{   
$name = $_POST['name'];   
$email = $_POST['email'];
$phone = $_POST['phone'];
$Message = $_POST['Message'];

                 

	if(!$name==' '||!$email==' '||!$phone==' '||!$Message==' ')
	{
	
	               echo '<div class="alert alert-dismissable fade in">';
                    echo	'<a href="#"  data-dismiss="alert" ></a>';				
				    echo ' All Text Field must be required!';
					echo  	'</div>';	
	
	}
	else
	{
	  
					
	$sql = "INSERT INTO contact(name,email,phone,Message) VALUES ('$name', '$email','$phone','$Message')";
	mysqli_query($db, $sql);
	
  echo '<div class="alert alert-success alert-dismissable fade in">';
 echo	'<a href="#" data-dismiss="alert" ></a>';
 echo 'Your Message submit Successfully. We will contact you soon.';
echo  	'</div>';
	}
	
	
}





?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
	   <link rel="stylesheet" type="text/css" href="css/popup.php">

	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="index.php">Home</a></li>
									
									<li><a href="car.php">About</a></li>
									<li><a href="result.php">Taxis</a></li>
									<li class="current"><a href="contact.php">Contacts</a></li>
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
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<h3>Find Us</h3>
						<div class="map">
							<figure>
								<iframe src="https://maps.google.com/maps?q=Seeu%20Tetovo&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0"></iframe>
							</figure>
						</div>
					</div>
					<div class="grid_5">
						<h3>Contact Info</h3>
						<div class="map">
							<div class="text1 color2">Maninder.Inc</div>
							<p>Don’t forget, there is 24/7 support  <span class="color1"></span> </p>
						
							<address>
								<dl>
									<dt>TaxiTaxi <br>
										SEEU, Tetotvo<br>
										North Macedonia
									</dt>
									<dd><span>Telephone:</span> +38976405666</dd>
									<dd>E-mail: <a href="#" class="color1">beratsherifi098@gmail.com</a></dd>
								</dl>
							</address>
						</div>
					</div>
					<div class="grid_6 prefix_1">
						<h3>Contact Form</h3>
		<form id="form" action=" " method="post">
						
						<label class="name">
								<input type="text" placeholder="Name:"    name='name'/>
								
							</label>
							<label class="name">
								<input type="text" placeholder="E-mail:"  name='email'/>
								
							</label>
							<label class="name">
								<input type="text" placeholder="Phone:"  name='phone'/>
								
							</label>
							
							<label class="message">
								<textarea placeholder="Message:" name='Message'></textarea>
							
							</label>

								
						
							
								<input  type='submit' name='submit'  value='submit'   />
						</form>
						</form>
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
	</body>
</html>