<!--PHP CONNECTION & FETCH USER DETAILS-->
<?php
    include('dbcon.php');
    session_start();
    $var=$_SESSION['name'];
    $res= mysqli_query($con,"SELECT * FROM `tbl_login` where username='$var'");
    while($r = mysqli_fetch_array($res))
    {
    $uemail=$r['email'];    //email from table field & $uemail is a random name
    }
  
if(isset($_SESSION["fastoSession"]) != session_id()){
  header("Location:index.php");
  die();
}
else{

?>

<!--PHP CODE FOR UPDATE PASSWORD--->
<?php
    if(isset($_POST['update']))
    {
    include 'dbcon.php';
    $uemail=$_POST['email'];
    $pas=$_POST['password'];
    $cpas=$_POST['cpassword'];
    $pass= md5($pas);
    $query="UPDATE `tbl_login` SET `password`='$pass' where `email`='$uemail'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
    $_SESSION['status']="Password reset Successfull";
    $_SESSION['status_code']="success";
    //echo '<script type="text/javascript"> alert("User Rgistered Successfully!!!Go To Login..!!")</script>';                                      
    }
    else
    {
      $_SESSION['status']="Failed to reset password";
      $_SESSION['status_code']="error";
      //echo '<script type="text/javascript">alert("ERROR!!Try Again!!")</script>';
    }
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
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="js/sweetalert.js"></script>  
    <title>Change Staff Password</title>
    <link rel="icon" href="images/iconbox.png">
</head>

<body>
    
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

    <form action="staffpasswordreset.php" class="orderform" method="POST" onsubmit="return validation()">
        <h1 class="text-center">Change Password?</h1>

        <!-- Change password form -->
        <div class="form-step form-step-active">
          <div class="input-group">
            <label for="emailid"><b>Email address</b></label>
            <input type="text" name="email" id="emailid" value="<?php echo $uemail ?>" readonly/>
          </div>
          <div class="input-group"></div>
            <label for="changepwd"><b>Password</b></label>
            <input type="password" name="password" id="changepwd" placeholder="Enter current password" autocomplete="off"/>
            <span id="passwords" class="text-danger font-weight-bold"></span>
          </div>
          <div class="input-group">
            <label for="confirmpwd"><b>Confirm password</b></label>
            <input type="password" name="cpassword" id="confirmpwd" placeholder="Re-enter password" autocomplete="off"/>
            <span id="confrmpass" class="text-danger font-weight-bold"></span>
          </div>
          <div class="input-group">
            <div class="btns-group">
              <input type="submit" name="update" value="Reset" class="btn" autocomplete="off" />
            </div>
          </div>
        </div>
    </form>

                      
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

    <!--JS Validations-->
    <script type="text/javascript">
    function validation()
    {
        var pwd = document.getElementById('changepwd').value;
        var conpwd = document.getElementById('confirmpwd').value; 

        if(pwd == "")
        {
        document.getElementById('passwords').innerHTML ="Please fill password field";
        return false;
        }
        if((pwd.length<=4)||(pwd.length>15))
        {
        document.getElementById('passwords').innerHTML="Have atleast 5 characters";
        return false;
        }
        if(pwd!=conpwd)
        {
        document.getElementById('passwords').innerHTML="Passwords fail to match";
        return false;
        }
        if(conpwd == "")
        {
        document.getElementById('confrmpass').innerHTML ="Please fill Confirm Password field";
        return false;
        }
    }
    </script>
   
</body>
</html>

<?php
}
?>