<!--PHP CONNECTION-->
<?php
include 'dbcon.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="dashboard.css" />
<!--Bootstrap links for validations-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="js/sweetalert.js"></script>     
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
    <title>View Staff</title> 
    <link rel="icon" href="images/iconbox.png">
    <style>
        #viewtableid {
        font-family: "Poppins", sans-serif;
        border-collapse: collapse;
        width: 50%;
        }
        #viewtableid td, #viewtableid th {
        border: 5px solid #000;
        padding: 8px;
        }
        #viewtableid tr:nth-child(even){background-color: #f2f2f2;}
        #viewtableid tr:hover {background-color: #ddd;}
        #viewtableid th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #000;
        color: #fff;
        }
        /*VIEW TABLE DESIGN CSS*/
        .viewtable{
            height:100%;
            margin-top:100px;
        }

        *,
        *::before,
        *::after {
        box-sizing: border-box;
        }

        body {
        font-family: Arial, Helvetica, sans-serif;
        }

        .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 1rem;
        }

        .btn {
        position: relative;
        display: inline-block;
        width: 100px;
        height: 50px;
        border: none;
        }

        /* Button effect #7 */
        .btn-effect-7{
            color:#fff;
            background-color:#f48c5b;
        }
        .btn-effect-7:hover {
        animation: animateY 0.6s linear infinite;
        }
        .btn-effect-8{
            color:#fff;
            background-color:red;
        }
        .btn-effect-8:hover {
        animation: animateY 0.6s linear infinite;
        }

        @keyframes animateY {
        0% {
            transform: translateY(0);
        }
        25% {
            transform: translateY(-5px);
        }
        50% {
            transform: translateY(5px);
        }
        100% {
            transform: translateY(0);
        }
        }
    </style>
</head>

<body>
<!--Header-->
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
					<span class="icon"><i class="fa fa-book"></i></span>
					<span class="text">Event</span>
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

    <!--TABLE TO VIEW ALL CUSTOMERS-->
    <section class="viewtable">
    <center>
        <h1 style="margin-top:2%"><b>Customer Details</b></h1>

        <table id="viewtableid" style="margin-top:3%">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Aadhar Number</th>
        </tr>
    <!--PHP CONNECTION & FETCH CUSTOMER DETAILS-->
            <?php
            $role="Customer";
            $res= mysqli_query($con,"SELECT * FROM `tbl_login` where role='$role'");//fetch data from database
            while($r = mysqli_fetch_array($res))
            {
                $id=$r['id'];     
                $uname=$r['username'];  //username from table field & $uname is a random name
                $uemail=$r['email'];    //email from table field & $uemail is a random name
                $aadhar=$r['aadharid'];  //aadharid from table field & $aadhar is a random name
            ?>
            <tr>
                
                <td><b><?php echo $uname; ?></b></td>
                <td><b><?php echo $uemail; ?></b></td>
                <td><b><?php echo $aadhar; ?></b></td>
            </tr>	
            <?php
            }
            ?>
        </table>
    </center>
    </section>

    <!--Footer-->
    <div class="footer">
        <p>For Booking & Enquiries</p><br>
        <p>fastocouriers@gmail.com</p>
        <p class="copyright">Copyright © 2021</p>      
    </div>
    <script>
        
    </script>
</body>
</html>

