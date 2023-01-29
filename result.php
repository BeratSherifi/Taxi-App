
<?php
include("connection/connect.php");


	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>search</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		      <!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- uikit -->

        <!-- Theme -->
    
        <!-- custom css -->
		<link rel="stylesheet" href="style.css" />
		
		
	</head>
	<body class="" id="top"  background='grey'>
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
									<li class="current"><a href="result.php">Taxis</a></li>
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
						<h3>Taxis:</h3>
					</div>
					
					
	<?php  

	
	
	 if(isset($_POST['submit']))
		{
 
			$dist = $_POST['dist'];
			$okaat = $_POST['okaat'];
			$passenger = $_POST['passenger'];

					$mql = "SELECT * FROM admin where location='$dist' AND comfort='".$okaat."' AND seat='".$passenger."'";
					
					$res= mysqli_query($db, $mql);
		while($row = mysqli_fetch_array($res))
				{
						$id =  $row['v_id'];
						$cimage =  $row['cimage'];
						$cname =  $row['cname'];
						$seat =  $row['seat'];
						$price =  $row['price'];
						$ctext =  $row['ctext'];
						$loc =  $row['location'];
						$comfort =  $row['comfort'];
						
	  
	
	echo '<div class="grid_4">';
	echo 			'<div class="box">';
		echo 				'<div class="maxheight">';
			echo 				"	<img src='admin/images/".$cimage." '>";
				echo 		'	<div class="text1 color2">';
				echo 			     '<a href="#" style="font-weight:bold;">'.$cname.'</a></br></br>';
						
						 	echo 			     'Seats:<span style="font-weight:bold;">'.$seat.'</span></br></br>';
									 	echo 			     'Location:<span style="font-weight:bold;">'.$loc.'</span></br></br>';
										echo 			     'Comfort:<span style="font-weight:bold;">'.$comfort.'</span></br></br>';
							
							echo 			     '$<span style="color:red;font-weight:bold;font-size:30px;">'.$price.'/-</span>';
				
				echo 			'	</div>';
				echo 		         $ctext ;
				echo 			'	<br>';				
				echo 		 "<a href=booking.php?book=".$id." class='btn'>Car features</a>";
				echo 		'	</div>';
			echo 			'</div>';
			echo 		'</div>';
					
			
	
				}
					  
					 
				
				
				
		}
	else
		{
	
			$sql = "SELECT * FROM admin ";
			$result = mysqli_query($db, $sql);
		while($row = mysqli_fetch_array($result))
				{
						$id =  $row['v_id'];
						$cimage =  $row['cimage'];
						$cname =  $row['cname'];
						$seat =  $row['seat'];
						$price =  $row['price'];
						$ctext =  $row['ctext'];
	  
	
	echo '<div class="grid_4">';
	echo 			'<div class="box">';
		echo 				'<div class="maxheight">';
			echo 				"<img src='admin/images/".$cimage." '>";
				echo 		'	<div class="text1 color2">';
				echo 			     '<a href="#" style="font-weight:bold;">'.$cname.'</a></br></br>';
						
						 	echo 			     'Seats:<span style="font-weight:bold;">'.$seat.'</span></br></br>';
							
							echo 			     '$<span style="color:red;font-weight:bold;font-size:30px;">'.$price.'/-</span>';
				
				echo 			'	</div>';
				echo 		         $ctext ;
				echo 			'	<br>';				
				echo 		 "<a href=booking.php?book=".$id." class='btn'>Car features</a>";
				echo 		'	</div>';
			echo 			'</div>';
			echo 		'</div>';
					
				}	
		}
    

?>				
								
					
					
	

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