<!--PHP CONNECTION & FETCH USER DETAILS-->
<?php
include('dbcon.php');
session_start();
$var=$_SESSION['name'];
$res= mysqli_query($con,"SELECT * FROM `tbl_login` where username='$var'");
while($r = mysqli_fetch_array($res))
{
$uname=$r['username'];  //username from table field & $uname is a random name
$uemail=$r['email'];    //email from table field & $uemail is a random name
$aadhar=$r['aadharid']; //aadharid from table field & $aadhar is a random name
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>
    <link rel="stylesheet" href=".//css/courier.css">
    <link rel="stylesheet" href="addstaff.css">
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
    
    <title>Responsive Side Menu</title> 
    <link rel="icon" href="images/iconbox.png">
    <style>
        table{
            border-style:solid;
            border-color: #ff661fd2;
            margin-bottom: 10%;
        }
    </style>
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
				<a href="staffadd.php">
					<span class="icon"><i class="fa fa-user-plus"></i></span>
					<span class="text">Add Staff</span>
				</a>
			</li>
			<li>
                <a href="courierboyadd.php">
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

<!--Signup Form-->
    <div class="wrapper" style="margin-left:38%">
        <div class="title-text">
        <div class="title login">
        Add Staff
        </div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form role="form" data-toggle="validator" action="staffadd.php" method="post">      
                    <div class="form-group">
                    <div class="field">
                    <input type="text" class="form-control" name="name" maxlength="10" minlength="4"
                    pattern="^[a-zA-Z0-9_.-]*$" id="uid" placeholder="Username" required>
                    </div>
                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                    <div class="field">
                    <input type="text" class="form-control" name="aadhar" data-minlength="12" maxlength="12"
                    pattern="^[0-9]*$" id="aadhar" data-error="Have atleast 12 characters" placeholder="Aadhar Number" required>
                    </div>
                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                    <div class="field">
                    <input type="email" class="form-control" id="eid" name="email" placeholder="Email" required>
                    </div>
                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                    <div class="form-group">
                    <div class="field">
                    <input type="password" data-minlength="5" class="form-control" name="password" id="pwd1"
                    data-error="Have atleast 5 characters" placeholder="Password" required />
                    </div>
                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="form-group">
                    <div class="field">
                    <input type="password" class="form-control" name="cpassword" id="pwd2"
                    placeholder="Confirm Password" required />
                    </div>
                    <!-- Error -->
                    <div class="help-block with-errors"></div>
                    </div>
                    </div>
                    
                    <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Sign Up" name="signupval">
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--PHP code for signup-->
      <?php
            if(isset($_POST['signupval']))
            {
               //echo '<script type="text/javascript"> alert("Error!!Pleae try again!!")</script>';
               $uname=$_POST['name'];
               $uaadhar=$_POST['aadhar'];
               $uemail=$_POST['email'];
               $pas=$_POST['password'];
               $cpas=$_POST['cpassword'];

               if($pas==$cpas)
               {
                  $pass= md5($pas);
               $query="SELECT * FROM `tbl_login` WHERE username='$uname' ";
               $query_run = mysqli_query($con,$query);

                  if(mysqli_num_rows($query_run)>0)
                  {
                     $_SESSION['status']="Already exist! Try again!!";
                     $_SESSION['status_code']="info";
                     //echo '<script type="text/javascript"> alert("User already exist!!Try Another Username!!")</script>';
                  }
                  else
                  {
                     $query="INSERT INTO `tbl_login`(`username`, `aadharid`, `password`, `email`, `role`) VALUES ('$uname','$uaadhar','$pass','$uemail','Staff')";
                     $query_run = mysqli_query($con,$query);

                     if($query_run)
                     {
                     $_SESSION['status']="Staff Added!";
                     $_SESSION['status_code']="success";
                     //echo '<script type="text/javascript"> alert("User Rgistered Successfully!!!Go To Login..!!")</script>';                                      
                     }
                     else
                     {
                        $_SESSION['status']="ERROR!!Try Again later!!";
                        $_SESSION['status_code']="error";
                        //echo '<script type="text/javascript">alert("ERROR!!Try Again!!")</script>';
                     }
                  }
               }
            else
               {
                  $_SESSION['status']="Passwords fail to match!";
                  $_SESSION['status_code']="error";
                  //echo '<script type="text/javascript"> alert("Enter Same Password!!")</script>';
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
                              button: "Ok. Done!",
                        });
               </script>
                           <?php
                           unset($_SESSION['status']);
         }
                           ?>


<!--Footer-->
    <div class="footer">
        <p>For Booking & Enquiries</p><br>
        <p>fastocouriers@gmail.com</p>
        <p class="copyright">Copyright © 2021</p>      
    </div>
</body>
</html>


