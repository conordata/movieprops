<!DOCTYPE html>
<html lang="en">

<?php
	require "database.php";
	date_default_timezone_set('Asia/Kolkata');
?>

<head>

	<link rel="stylesheet" href="style.css">

	<title>Home | MovieProps</title>
</head>

<body class="main-grid">
	<!-- sheet background -->
	<div style="background-image: url('images/top-bg2.jpg');">
			<!-- header -->
			<header>
				
				<!-- logo -->
				<img id="logo_img" src="images/logo.png" alt="logo" width="140" height="50" hidden>
				<a href="home.html">
					<canvas id="logo" width="260" height="68" style="border:1px solid red; margin: 15px 0px 0px 25px; border-radius: 10px;"></canvas>
				</a>

				<!-- website name -->
				<div class="title-bar">
					<h1>Movieprops.com</h1>
				</div>

				<!-- navigation bar -->
				<div class="container-nav">
					<div  class="head-div">
						<nav class="nav-bar">
							<ul>						
								<li><a href="home.html">Home</a></li>
								<li><a href="about.html">About-us</a></li>
								<li><a href="product.html">Product</a></li>
								<li class="active"><a href="registration.php">Registration</a></li>
								<!-- <li><a href="admin.php">Admin</a></li> -->
							</ul>
						</nav>
					</div>
				</div>
				<!-- end navigation bar -->
				<br>
			</header>
			<!-- end header -->

			<!-- body -->
			<div class="container-form">
				<!-- title -->
				<div class="sub-title">
					<h2>Registration</h2>
				</div>

				<!-- registion form -->
				<div class="form form-content">
					<form id="form" action="#" method="POST">
					  <label for="fname">First Name</label>
					  <input type="text" id="fname" name="firstname" placeholder="ilunga" minlength="3" maxlength="15" required>

					  <label for="lname">Last Name</label>
					  <input type="text" id="lname" name="lastname" placeholder="wa lunda" required>

					  <label for="phonenum">Phone Number</label>
					  <input type="tel" id="phonenum" name="phonenumber" placeholder="8197368570" pattern="[0-9]{10,}" maxlength="15">

					  <label for="emailid">Email Id</label>
					  <input type="email" id="emailid" name="emailid" placeholder="example@gmail.com" required>

					  <label for="message">Message</label>
					  <textarea id="message" name="message" rows="8" maxlength="500" required="required"></textarea>

					  <button type="submit" name="submit">Submit</button>
					  <button type="reset">Reset</button>
					</form>
					
				</div><br>
			</div>
			<!-- end body -->

			<!-- footer -->
			<footer>
				<div><p style="color: white; text-align: center;">Copyright Wa Lunda Ariel. Alright reserved</p></div><br>	
			</footer>
			<!-- end footer -->
	</div>
	<!-- end sheet background -->

	<button onclick="topFunction()" id="top_btn" title="Go to top">Top</button>

	<?php  

		if (isset($_POST['submit'])) {

			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$phone=$_POST['phonenumber'];
			$email=$_POST['emailid'];
			$message=$_POST['message'];
			$date_=date("Y-m-d", time());

			echo ($phone);
			database('', 'INSERT INTO customers (firstname, lastname, phone, email, message, date_) VALUES ("'.$firstname.'", "'.$lastname.'", "'.$phone.'", "'.$email.'", "'.$message.'", "'.$date_.'")');

			echo ('<script type="text/javascript">
							alert("Dear '.$lastname.', your interest has been added succefully");
						</script>');			

		}

	?>

	<script>
		if (window.history.replaceState) {
			window.history.replaceState( null, null, window.location.href );
		}

		//Top page button

		var mybutton = document.getElementById("top_btn");

		
		window.onscroll = function() {scrollFunction()};	// When the user scrolls down 20px from the top of the document, show the button

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    mybutton.style.display = "block";
		  } else {
		    mybutton.style.display = "none";
		  }
		}

		function topFunction() {	// When the user clicks on the button, scroll to the top of the document
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}

		// LOGO

		window.onload = function() {
			var canvas = document.getElementById("logo");
	    var ctx = canvas.getContext("2d");
	    var img = document.getElementById("logo_img");
	    ctx.drawImage(img, 0, 0, 260, 70);
	  };

	  // RESET FORM

	  function reset_form() {
    	document.getElementById("form").reset();
    }
	</script>

</body>
</html>