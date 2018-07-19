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
      <div class="row">
        <div class="col-md-3">
          <label for="from">From</label>
        </div>
        <div class="col-md-2">
          <?php echo $_GET['start'];?>
        </div>
        <div class="col-md-2"></div>

        <div class="col-md-3">
          <label for="to">To</label>
        </div>
        <div class="col-md-2">
          <?php echo $_GET['end'];?>
        </div>
      </div>
  </div>

  <?php
    $con=mysqli_connect("localhost","root","","bus_root");
    // Check connection
    if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      $result = mysqli_query($con,"SELECT * FROM root where from_place = '$_GET[start]' && to_place = '$_GET[end]'");

    echo "<table class='table table-bordered'>
    <tr>
      <th>Start time</th>
      <th>Depature time</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
      {
        
          echo "<tr>";
          echo "<td>" . $row['start_time'] . "</td>";
          echo "<td>" . $row['end_time'] . "</td>";
          echo "</tr>";
        
      }
    echo "</table>";

    mysqli_close($con);
  ?>

	<form action="index.php">
    <button class="btn btn-primary">Back</button>
  </form>
</div>

</body>
</html>