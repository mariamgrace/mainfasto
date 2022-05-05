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
    <title>Assign Courier Boys</title>
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
        /*Dropdown*/
        select {
            background: #ffa061;
            font-family: Arial, Helvetica, sans-serif;
            font-weight:bold;
            width: 100%;
            color: black;
            border: 5px solid black;
            border-radius: 3px;
        }
        
        .select {
            position: relative;
            display: block;
            line-height: 5;
            border-radius: .25em;
            padding-bottom: 30px;
        }
        /*Button for approve & reject CSS*/
        .button-assignapprove {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        cursor: pointer;
        }
        .assigncancel {background-color: #f44336;} /* Red */ 
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
        <h1 style="margin-top:2%"><b>Couriers</b></h1>

        <table id="viewtableid" style="margin-top:3%">
        <tr>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Courier</th>
            <th>&nbsp;&nbsp;&nbsp;Category</th>
            <th>&nbsp;&nbsp;&nbsp;Pickup</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Weight</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Price</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Assign</th>
            <th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
        </tr>
<!--PHP CONNECTION & FETCH CUSTOMER DETAILS-->
            <?php
            $res= mysqli_query($con,"SELECT c.*, p.* FROM tbl_courier c, tbl_pickupdetails p WHERE c.pickup_id = p.pickup_id");//fetch data from database
            while($r = mysqli_fetch_array($res))
            {
              $courier_weight=$r["courier_weight"];
              $courier_image=$r["courier_image"];
              $courier_cat=$r["courier_cat"];
              $pickup_date=$r["pickup_date"];
              $courier_price=$r["courier_price"];
            ?>
            <form action="assigncourierboy.php" method="POST">
            <tr>     
                <td><img src="images/<?php echo $courier_image;?>" height="100" width="100"/></td>
                <td><b><?php echo $courier_cat;?></b></td>
                <td><b><?php echo $pickup_date;?></b></td>
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
                  <b style="color:red;">Rs.<?php echo $courier_price;?>/-</b>
                </td>
                <td>
                    <div class="select">
                        <select name="courierboyname">
                        <option>Select</option>
                            <?php 
                            $sql= mysqli_query($con,"SELECT * FROM `tbl_courierboy`");
    // use a while loop to fetch data from the $sql variable and individually display as an option
                                while ($cboyname = mysqli_fetch_array($sql,MYSQLI_ASSOC)):;
                                {
                                    $courierboyid = $cboyname["idnumber"];
                                    $courierboyname = $cboyname["fullname"];
                                }
                            ?>
                            
                            <option value="<?php echo $courierboyid;?>">
                                <?php echo $courierboyname;// To show the courierboy name to the staff?>
                            </option>
                            <?php endwhile;// While loop must be terminated ?>
                        </select>
                    </div>
                </td>
                <td> <input type="submit" class="button-assignapprove" name="applybtn" value="Apply" /></td>
                <td><button class="button-assignapprove assigncancel" name="cancelbtn">Cancel</button></td>
            </tr>
            </form>
            <?php
            }
            ?>
            
    <!--PHP code for fetching idnumber from tbl_courierbot and insert it into assigned_cboy_id-->
    <?php
          if(isset($_POST['applybtn']))
        {
            $results= mysqli_query($con,"SELECT `idnumber` FROM `tbl_courierboy`");//fetch data from database
            while($rest = mysqli_fetch_array($results))
            {
                $cboyid=$r["idnumber"];
                $applyquery="INSERT INTO `tbl_courier`(`assigned_cboy_id`) VALUES ('$cboyid')";
                $applyquery_run = mysqli_query($con,$applyquery);
                if($applyquery_run)
                {
                    $_SESSION['status']="Assign Success";
                    $_SESSION['status_code']="success";
                    //echo '<script type="text/javascript"> alert("User Rgistered Successfully!!!Go To Login..!!")</script>';                                      
                }
                else
                {
                    $_SESSION['status']="Assign Failed";
                    $_SESSION['status_code']="error";
                    //echo '<script type="text/javascript">alert("ERROR!!Try Again!!")</script>';
                }
            }
        }
    ?>

                            
    <!--PHP code for sweet alert-->     
    <?php
      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
      {
    ?>
    <script>
            swal({
                  title: "<?php echo $_SESSION['status']; ?>",
                  //text: "You clicked the button!",
                  icon: "<?php echo $_SESSION['status_code']; ?>",
                  button: "Ok",
            });
         </script>
         <?php
         unset($_SESSION['status']);
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