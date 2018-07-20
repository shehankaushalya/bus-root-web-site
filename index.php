<?php
	$host = "localhost";
    $uname = "root";
    $password = "";
    $dbName = "bus_root";
    $conn = mysqli_connect($host, $uname, $password, $dbName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Route Master</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
	<style>
		.bus_root{
			color: black;
		}
		.start{
    		width: 100%
		}
	</style>
</head>
<body>
	<header id="header">
		<nav class="navbar navbar-default navbar-static-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
						<a href="index.html">
							<h1>ROUTE MASTER</h1>
						</a>
					</div>
				</div>
				<div class="navbar-collapse collapse">
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation">
								<a href="index.html" class="active">Home</a>
							</li>
							<li role="presentation">
								<a href="about.html">About Us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<div class="slider">
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="img/bus_bg.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
								<h2>
									<span>Route Master</span>
								</h2>
							</div>
							
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
							</div>
						</div>
					</div>		
				</div>
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			<!--/#carousel-slider-->
		</div>
		<!--/#about-slider-->
	</div>
	<!--/#slider-->
	<div class="about">
		<div class="container  bus_root">
			<div class="text-center ">
				<h2>
					<b>ROUTE MASTER</b>
				</h2>
				<div class="col-md-10 col-md-offset-1 bus_root">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
						aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
						occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<form method="get" action="root.php">

					<div class="col-md-6 col-sm-6 col-xs-6">
						<label for="ending">Start</label>
						<select style="width: 50%" name="start">
							<option value="colombo">Colombo</option>
							<option value="awissawella">Awissawella</option>
							<option value="rathnapura">Rathnapura</option>
							<option value="balangoda">Balangoda</option>
							<option value="bandarawela">Bandarawela</option>
							<option value="badulla">Badulla</option>
						</select>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<label for="ending">Going to</label>
						<select style="width: 50%" name="end">
							<option value="badulla">Badulla</option>
							<option value="bandarawela">Bandarawela</option>
							<option value="balangoda">Balangoda</option>
							<option value="rathnapura">Rathnapura</option>
							<option value="awissawella">Awissawella</option>
							<option value="colombo">Colombo</option>
						</select>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input class="btn btn-primary center-block" value="Search" type="submit" id="search_button" name="search_button">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<hr>
	<footer>
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h4>About Us</h4>
				<p>Day is tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters.</p>
				<div class="contact-info">
					<ul>
						<li>
							<i class="fa fa-home fa"></i>Suite 54 Elizebth Street, Victoria State Newyork, USA </li>
						<li>
							<i class="fa fa-phone fa"></i> +38 000 129900</li>
						<li>
							<i class="fa fa-envelope fa"></i> info@domain.net</li>
					</ul>
				</div>
			</div>			
	</footer>
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li>
							<a href="#" class="fb tool-tip" title="Facebook">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#" class="twitter tool-tip" title="Twitter">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" class="gplus tool-tip" title="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
						<li>
							<a href="#" class="linkedin tool-tip" title="Linkedin">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="#" class="ytube tool-tip" title="You Tube">
								<i class="fa fa-youtube-play"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>			
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
		wow = new WOW(
			{

			})
			.init();
	</script>
</body>
</html>