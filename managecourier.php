<!--PHP CONNECTION & FETCH STAFF DETAILS-->
<?php
include('dbcon.php');
session_start();
$role="Staff";
$res= mysqli_query($con,"SELECT * FROM `tbl_login` where role='$role'");
while($r = mysqli_fetch_array($res))
{
$uname=$r['username'];  //username from table field & $uname is a random name
}
if(isset($_SESSION["fastoSession"]) != session_id()){
    header("Location:index.php");
    die();
}
else{
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="dashboard.css" />
    <link rel="stylesheet" href=".//css/order.css">
    <link rel="stylesheet" href=".//css/footer.css">
    <title>Manage Courier</title>
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
        color:  #ff661fd2;
        }
        /*VIEW TABLE DESIGN CSS*/
        .viewtable{
            height:100%;
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

<!--BODY BEGINS-->
  <body>
    <header id="header">
      <i class="fas fa-bars" id="nav-toggler"></i>
      <div>
        <i class="fas fa-user-alt"></i>
        <span><b><?php
	echo $role;
	?></b> </span>
      </div>
    </header>


<!--Header-->
<div class="top_navbar">
		<div class="logo">FastoCouriers</div>
	</div>

	<div class="sidebar">
		<div class="sidebar_inner">
		<ul>
			<li>
				<a href="staffdashboard.php">
					<span class="icon"><i class="fa fa-qrcode"></i></span>
					<span class="text">Dashboard</span>
				</a>
			</li>
            <li>
				<a href="staffprofile.php">
					<span class="icon"><i class="fa fa-book"></i></span>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
                <a href="#">
					<span class="icon"><i class="fa fa-truck"></i></span>
					<span class="text">Courier Boy</span>
				</a>
			</li>
			<li>
				<a href="leave.php">
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


<!--RIGHT SIDE CODE-->

<!--TABLE TO VIEW ALL CUSTOMERS-->
<section class="viewtable">
    <center>
        <h1 style="margin-top:6%"><b>Couriers</b></h1>

        <table id="viewtableid" style="margin-top:3%">
        <tr>
            <th>Courier</th>
            <th>Category</th>
            <th>Weight</th>
            <th>Price</th>
            <th>Details</th>
        </tr>
<!--PHP CONNECTION & FETCH CUSTOMER DETAILS-->
            <?php
            $res= mysqli_query($con,"SELECT * FROM `tbl_courier`");//fetch data from database
            while($r = mysqli_fetch_array($res))
            {
              $courier_weight=$r["courier_weight"];
            ?>
            <tr>
                
                <td><img src="images/<?php echo $r["courier_image"];?>" height="100" width="100"/></td>
                <td><b><?php echo $r["courier_cat"];?></b></td>
                <td><b><?php 
                if($courier_weight=='1'){
                  echo "Below 5 Kg";
                }
                else if($courier_weight=='2'){
                  echo "6-9 Kg";
                }
                else{
                  echo "10-15 Kg";
                }
                ?></b></td>
               <td>
                  <b style="color:red;">Rs.<?php echo $r["courier_price"];?>/-</b>
                </td>
                <td>
                    <button style="margin-left:150px"class="btn btn-effect-7">More</button> 
                </td>
            </tr>	
            <?php
            }
            ?>
        </table>
    </center>
    </section>

  </body>
</html>

<?php
}
?>