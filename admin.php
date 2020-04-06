<!DOCTYPE html>
<html lang="en">

<?php
	require "database.php";

	$interest=database('r', 'SELECT * FROM customers ORDER BY date_ DESC');
?>

<head>

	<link rel="stylesheet" href="style.css">

	<title>Home | MovieProps</title>
</head>
<body class="main-grid">
	<!-- sheet background -->
	<div style="background-image: url('images/top-bg.jpg');">
		<!-- container -->
		<div>
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
								<li><a href="registration.php">Registration</a></li>
								<li class="active"><a href="admin.php">Admin</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- end navigation bar -->
				<br>
			</header>
			<!-- end header -->

			<!-- body -->
			<div class="container">

				<!-- title -->
				<div class="sub-title">
					<h2>Administration</h2>
				</div>

				<!-- customers's interest -->
				<div class="content">
					<table class="table text-content">
            <tbody>
              <?php
                $i=0;
                while ( $i < sizeof($interest)) { ?>
                  <tr>
                    <td width="300"><p><?php echo('<b>'.ucfirst($interest[$i]['lastname']).' '.ucfirst($interest[$i]['firstname']).', '.$interest[$i]['date_'].'</b> <br>Phone Number: '.$interest[$i]['phone'].'<br>Email Id: <a href="mailto:'.$interest[$i]['email'].'" target="_top">'.$interest[$i]['email'].'</a>'); ?></p></td>
                    <td><p><?php echo(ucfirst($interest[$i]['message']));?></p></td>
                  </tr>
              <?php
                $i++;
                }
              ?> 
            </tbody>
          </table>		
				</div><br>
			</div>
			<!-- end body -->

			<!-- footer -->
			<footer>
				<div><p style="color: white; text-align: center;">Copyright Wa Lunda Ariel. Alright reserved</p></div><br>	
			</footer>
			<!-- end footer -->
		</div>
		<!-- end container -->
	</div>
	<!-- end sheet background -->

	<button onclick="topFunction()" id="top_btn" title="Go to top">Top</button>

	<script>
		//Get the button
		var mybutton = document.getElementById("top_btn");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    mybutton.style.display = "block";
		  } else {
		    mybutton.style.display = "none";
		  }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}

		//LOGO

		window.onload = function() {
			var canvas = document.getElementById("logo");
	    var ctx = canvas.getContext("2d");
	    var img = document.getElementById("logo_img");
	    ctx.drawImage(img, 0, 0, 260, 70);
	  };
	</script>

	
</body>
</html>