<?php

include("connection/connect.php");
error_reporting(0);
$book = $_GET['book'];




if (isset($_POST['submit']))                  //if post btn is pressed
{
	$pick = $_POST['pick'];
	$drop = $_POST['drop'];
	$phone = $_POST['phone'];
	$fname = $_POST['fname'];
	$fmid = $_POST['fmid'];
	$flast = $_POST['flast'];
	$zipcode = $_POST['zipcode'];
	$address = $_POST['address'];
	$cardno = $_POST['cardno'];
	$brand = $_POST['brand'];
	$date = $_POST['date'];
	$year = $_POST['year'];
	$month = $_POST['month'];
	$text = $_POST['text'];



	if ($pick == ' ' || $drop == ' ' || $phone == ' ' || $fname == ' ' || $fmid == ' ' || $flast == ' ' || $zipcode == ' ' || $address == ' ' || $cardno == ' ' || $brand == '' || $date == ' ' || $year == ' ' || $month == ' ' || $text == ' ') {

		echo '<div class="alert alert-dismissable fade in">';
		echo	'<a href="#"  data-dismiss="alert" ></a>';
		echo ' All Text Field must be required!';
		echo  	'</div>';
	} else {


		$sql = "INSERT INTO personal(pickup,dropoff,phone,first,mid,last,cod,address,cardno,cardbrand,ed,ey,em,message) VALUES ('$pick', '$drop','$phone','$fname','$fmid','$flast','$zipcode','$address','$cardno','$brand','$date','$year','$month','$text')";
		mysqli_query($db, $sql);

		echo '<div class="alert alert-success alert-dismissable fade in">';
		echo	'<a href="#" data-dismiss="alert" ></a>';
		echo 'Your Booking submit Successfully. Details are send to your Registered E-mail Address.';
		echo  	'</div>';
	}
}




$sql = "select * from admin where v_id='$book'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$id =  $row['v_id'];
$cimage =  $row['cimage'];
$cname =  $row['cname'];
$seat =  $row['seat'];
$price =  $row['price'];
$ctext =  $row['ctext'];


$air_c =  $row['air_c'];
$fuel =  $row['fuel'];
$gps =  $row['gps'];
$safety =  $row['safety'];
$km =  $row['km'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>Taxi features</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
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
		<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">

				<div class="grid_12">
					<h3>Taxi features</h3>
					<?php

					echo		'<div class="map">';
					echo			'<figure>';


					echo			"<div class='' ><a href='admin/images/" . $cimage . " ' class='gal'><img src='admin/images/" . $cimage . " ' style='height:400px;width:1900px;'></a></div>";



					echo			'</figure>';
					echo			'</div>';
					echo		'</div>';

					echo		'<div class="grid_5">';
					echo		'<h3>Taxi Info</h3>';
					echo		'<div class="map">';
					echo			'<div class="text1 color2"><span style="font-size:40px;">' . $cname . '</span></div>';
					echo			'<div class="text1 color2">Price: <span style="color:red">' . $price . '/-</span></div>';
					echo				'<p>' . $ctext . '</p>';

					echo				'<address>';
					echo				'<dl>';

					echo			'<dd><span  style="font-size:20px;">Passenger Seats</span><span style="color:;font-size:18px;margin-left:10px;"> :' . $seat . '</span></dd>';
					echo				'<dd><span  style="font-size:20px;">Air Conditioner</span><span style="color:;font-size:18px;margin-left:20px;"> :' . $air_c . '</span></dd>';
					echo				'<dd><span  style="font-size:20px;">Fuel Type </span><span style="color:;font-size:18px;margin-left:72px;">:' . $fuel . '</span> </dd>';
					echo				'<dd><span  style="font-size:20px;">GPS</span><span style="color:;font-size:18px;margin-left:123px;">  :' . $gps . '</span></dd>';
					echo				'<dd><span  style="font-size:20px;">safety</span> <span style="color:;font-size:18px;margin-left:101px;"> :' . $safety . '</span></dd>';
					echo				'<dd><span  style="font-size:20px;">Km/Rs</span><span style="color:;font-size:18px;margin-left:100px;"> :' . $km . '</span></dd>';
					echo			'</dl>';
					echo			'</address>';
					echo		'	</div>';
					echo			'</div>';
					?>



					<div class="grid_6 prefix_1">
						

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
							&copy; 2023 | <a href="#">Privacy Policy</a>
						</div> Website designed by <a href="#" rel="nofollow">TaxiTaxi</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
</body>

</html>