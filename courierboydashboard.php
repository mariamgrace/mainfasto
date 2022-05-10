<!--PHP CONNECTION-->
<?php
include 'dbcon.php';
session_start();
if(isset($_SESSION["fastoSession"]) != session_id()){
  header("Location:index.php");
  die();
}
else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Courier Boy</title>
  <link rel="icon" href="images/iconbox.png">
  <link rel="stylesheet" href="dashboard2.css">
  <link rel="stylesheet" href=".//css/footer.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

	<div class="top_navbar">
		<div class="logo">FastoCouriers</div>
	</div>

	<div class="sidebar">
		<div class="sidebar_inner">
		<ul>
			<li>
				<a href="courierboydashboard.php">
					<span class="icon"><i class="fa fa-qrcode"></i></span>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="courierboyprofile.php">
					<span class="icon"><i class="fa fa-book"></i></span>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				<a href="courierboyleave.php">
					<span class="icon"><i class="fa fa-calendar"></i></span>
					<span class="text">Leave</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="icon"><i class="fa fa-question-circle"></i></span>
					<span class="text">About</span>
				</a>
			</li>
      <li>
				<a href="#">
					<span class="icon"><i class="fa fa-pen"></i></span>
					<span class="text">Service</span>
				</a>
			</li>
      <li>
	 			<a href="logout.php">
                    <span class="icon"><i class="fa fa-power-off" style="color:white;"></i></span>           
					<span class="text">Logout</span>
				</a>
			</li>

		</ul>
		</div>
	</div>
   
<div class="main-section">
	<div class="dashbord dashbord-blue">
	<div class="icon-section">
	<i class="fa fa-tasks" aria-hidden="true"></i><br>
	<h2>Reports</h2>
	</div>
	<div class="detail-section">
	<a href="#">More Info </a>
	</div>
	</div>
	<div class="dashbord dashbord-green">
	<div class="icon-section">
	<i class="fa fa-truck" aria-hidden="true"></i><br>
	<h2>View Couriers</h2>
		<?php //PHP code to COUNT no. of couriers
		include 'dbcon.php';
		$countnumcouriers = "SELECT `courier_id` FROM `tbl_courier` ORDER BY `courier_id`";
		$countnumcouriers_run = mysqli_query($con,$countnumcouriers);
		$row = mysqli_num_rows($countnumcouriers_run);
		?>
		<p><?php echo $row  ?></p>
	</div>
	<div class="detail-section">
	<a href="viewassignedcouriers.php">More Info </a>
	</div>
	</div>
	<div class="dashbord dashbord-orange">
	<div class="icon-section">
	<i class="fa fa-comments" aria-hidden="true"></i><br>
	<h2>Queries</h2>
	</div>
	<div class="detail-section">
	<a href="#">More Info </a>
	</div>
	</div>
	</div>
     
    <div id="bannerimagecboy"></div>


    <!--Footer-->
    <div class="footer">
        <p>For Booking & Enquiries</p><br>
        <p>fastocouriers@gmail.com</p>
        <p class="copyright">Copyright © 2021</p>      
    </div>
</body>
</html>


<?php
}
?>

