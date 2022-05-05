

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>
  <link rel="icon" href="images/iconbox.png">
  <link rel="stylesheet" href="dashboard.css">
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
				<a href="admindashboard.php">
					<span class="icon"><i class="fa fa-qrcode"></i></span>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="addstaff.php">
					<span class="icon"><i class="fa fa-user-plus"></i></span>
					<span class="text">Add Staff</span>
				</a>
			</li>
			<li>
				<a href="addcourierboy.php">
					<span class="icon"><i class="fa fa-truck"></i></span>
					<span class="text">Add boy</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="icon"><i class="fa fa-calendar"></i></span>
					<span class="text">Leave</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="icon"><i class="fa fa-book"></i></span>
					<span class="text">Event</span>
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
	<div class="dashbord">
	<div class="icon-section">
	<i class="fa fa-users" aria-hidden="true"></i><br>
	<h2>Customers</h2>
			<?php                                      //PHP code to COUNT no. of Customers
			include 'dbcon.php';
			$role="Customer";
			$countnumcustomers = "SELECT `id` FROM `tbl_login` WHERE role='$role' ORDER BY `id`";
			$countnumcustomers_run = mysqli_query($con,$countnumcustomers);
			$row = mysqli_num_rows($countnumcustomers_run);
			?>
			<p><?php echo $row  ?></p>
	</div>
	<div class="detail-section">
	<a href="userview.php">More Info </a>
	</div>
	</div>
	<div class="dashbord dashbord-green">
	<div class="icon-section">
	<i class="fa fa-money" aria-hidden="true"></i><br>
	<h2>Account</h2>
	<p>256</p>
	</div>
	<div class="detail-section">
	<a href="#">More Info </a>
	</div>
	</div>
	<div class="dashbord dashbord-orange">
	<div class="icon-section">
	<i class="fa fa-bell" aria-hidden="true"></i><br>
	<h2>Alert</h2>
	<p>9 New</p>
	</div>
	<div class="detail-section">
	<a href="#">More Info </a>
	</div>
	</div>
	<div class="dashbord dashbord-blue">
	<div class="icon-section">
	<i class="fa fa-tasks" aria-hidden="true"></i><br>
	<h2>Reports</h2>
	<p>8</p>
	</div>
	<div class="detail-section">
	<a href="#">More Info </a>
	</div>
	</div>
	<div class="dashbord dashbord-red">
	<div class="icon-section">
	<i class="fas fa-user-tie" aria-hidden="true"></i><br>
	<h2>Staffs</h2>
			<?php                                      //PHP code to COUNT no. of Staffs
			include 'dbcon.php';
			$role="Staff";
			$countnumstaffs = "SELECT `id` FROM `tbl_login` WHERE role='$role' ORDER BY `id`";
			$countnumstaffs_run = mysqli_query($con,$countnumstaffs);
			$row = mysqli_num_rows($countnumstaffs_run);
			?>
			<p><?php echo $row  ?></p>
	</div>
	<div class="detail-section">
	<a href="staffview.php">More Info </a>
	</div>
	</div>
	<div class="dashbord dashbord-skyblue">
	<div class="icon-section">
	<i class="fa fa-comments" aria-hidden="true"></i><br>
	<h2>Queries</h2>
	<p>96</p>
	</div>
	<div class="detail-section">
	<a href="#">More Info </a>
	</div>
	</div>
	<div class="dashbord dashbord-green">
	<div class="icon-section">
	<i class="fa fa-truck" aria-hidden="true"></i><br>
	<h2>Courier Boys</h2>
			<?php                                      //PHP code to COUNT no. of Courier boys
			include 'dbcon.php';
			$role="Courier Boy";
			$countnumcboys = "SELECT `id` FROM `tbl_login` WHERE role='$role' ORDER BY `id`";
			$countnumcboys_run = mysqli_query($con,$countnumcboys);
			$row = mysqli_num_rows($countnumcboys_run);
			?>
			<p><?php echo $row  ?></p>
	</div>
	<div class="detail-section">
	<a href="courierboyview.php">More Info </a>
	</div>
	</div>
	</div>
	
<div class="content">
    <h2></h2>
</div>
</body>
</html>

