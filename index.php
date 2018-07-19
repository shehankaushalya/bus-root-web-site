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
  	<title>ROUTE MASTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/bus.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>	
<body>

<div class="container-fluid">

	<div class="jumbotron text-center">
  		<div class="container">
    		<h1 class="display-4"><b>ROUTE MASTER</b></h1>
    		<p class="lead">Badulla - Colombo</p>
 	    </div>
	</div>

	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h1 class="display-4">Introduction</h1>
    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 	    </div>
	</div>

	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
  			<form method="get" action="root.php"> 
  				<div class="row">
                        <div class="col-md-6">
                            <label for="starting">Starting from</label>
                        </div>
                        <div class="col-md-6">
                            <select name="start">
    							<option value="colombo">Colombo</option>
    							<option value="awissawella">Awissawella</option>
    							<option value="rathnapura">Rathnapura</option>
    							<option value="balangoda">Balangoda</option>
    							<option value="bandarawela">Bandarawela</option>
    							<option value="badulla">Badulla</option>
  							</select>
                        </div>
                </div>

                <div class="row">
                        <div class="col-md-6">
                            <label for="ending">Going to</label>
                        </div>
                        <div class="col-md-6">   
                            <select name="end">
    							<option value="badulla">Badulla</option>
    							<option value="bandarawela">Bandarawela</option>
    							<option value="balangoda">Balangoda</option>
    							<option value="rathnapura">Rathnapura</option>
    							<option value="awissawella">Awissawella</option>
    							<option value="colombo">Colombo</option>
  							</select>
                        </div>
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

</body>
</html>