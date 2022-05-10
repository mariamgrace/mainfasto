<!--PHP CONNECTION & FETCH USER DETAILS-->
<?php
include('dbcon.php');
session_start();
$var=$_SESSION['name'];
$role="Courier Boy";
$res= mysqli_query($con,"SELECT * FROM `tbl_login` where username='$var' and role='$role'");
while($r = mysqli_fetch_array($res))
{
$uname=$r['username'];  //username from table field & $uname is a random name
$uemail=$r['email'];    //email from table field & $uemail is a random name
$uaadhar=$r['aadharid']; //aadharid from table field & $aadhar is a random name
}

if(isset($_SESSION["fastoSession"]) != session_id()){
  header("Location:index.php");
  die();
}
else{

?>


<!--PHP CODE FOR UPDATE PROFILE-->
<?php
    if(isset($_POST['update']))
    {
    include 'dbcon.php';
    $uname=$_POST['name'];
    $uemail=$_POST['email'];
    $query="UPDATE `tbl_login` SET `username`='$uname' WHERE `email`='$uemail'";
    $query_run = mysqli_query($con,$query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Staff Profile</title>
    <link rel="icon" href="images/iconbox.png">
	<link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="dashboard.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
      /* FOOTER*/
      .footer 
      {
        margin-top: 100px;
        background-color: black;
        position:fixed;
        width: 100%;
        height:15%;
        margin-top: 600px;
        
      }
      .footer p{
        color:#f48c5b;
        margin-left:80px;
        margin-top: 20px;
        float:left;
        font-size: 16px;
        position:absolute;
        width: 100%;
        height:2%;
      }
      .copyright{
        text-align: center;
        justify-content: center;
        margin-bottom: 10px;
        color:#f48c5b;
      }
      /*RESET PASSWORD BUTTON*/
      .resetbutton {                             
        display: inline-block;
        border-radius: 4px;
        background-color: #f4511e;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 18px;
        padding: 10px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 40px;
      }
      .resetbutton span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      .resetbutton span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      .resetbutton:hover span {
        padding-right: 25px;
      }
      .resetbutton:hover span:after {
        opacity: 1;
        right: 0;
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
                <a href="#">
					<span class="icon"><i class="fa fa-truck"></i></span>
					<span class="text">Courier Boy</span>
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
   
  <!--PHP CONNECTION & FETCH CUSTOMER DETAILS-->
  <?php
  /*
    $res1= mysqli_query($con,"SELECT s.*, l.* FROM tbl_courierboy s, tbl_login l WHERE s.idnumber = l.id");//fetch data from database
    $re = mysqli_fetch_array($res1)
*/
    $res1 = mysqli_query($con,"SELECT `id` FROM `tbl_login` WHERE `email`='$uemail'");
    $re=mysqli_fetch_array($res1);
    $reid = $re["id"];

    $res2 = mysqli_query($con,"SELECT `courierboy_id`, `phone`, `dob`, `doj` FROM `tbl_courierboy` WHERE `idnumber`='$reid'");
    $re1=mysqli_fetch_array($res2);
  ?>
  <div class="wrapper">
      <div class="left">
          <h2><span><b><?php echo $uname; ?></b></span></h2>
          <h4>Designation: <span><?php echo $role; ?></span></h4>
          <button onclick="location.href = 'staffpasswordreset.php';"class="resetbutton" style="vertical-align:middle"><span>Reset Password</span></button>
      </div>
      <div class="right">
          <div class="info">
              <h3>Profile</h3>
              <div class="info_data">
                  <div class="data">
                      <h4>Email</h4>
                      <p><?php echo $uemail; ?></p>
                  </div>
                    <div class="data">
                      <h4>Phone</h4>
                        <p><?php echo $re1["phone"];?></p>
                    </div>
                    <div class="data">
                        <h4>ID</h4>
                        <p><?php echo $re1["courierboy_id"];?></p>
                    </div>
              </div>
          </div>
        
        <div class="projects">
              <h3>Additional Information</h3>
              <div class="projects_data">
                  <div class="data">
                      <h4>Aadhar Number</h4>
                      <p><?php echo $uaadhar; ?></p>
                  </div>
                  <div class="data">
                    <h4>DOB</h4>
                      <p><?php echo $re1["dob"];?></p>
                  </div>
                  <div class="data">
                      <h4>DOJ</h4>
                      <p><?php echo $re1["doj"];?></p>
                  </div>
              </div>
          </div>
      </div>
  </div>

</body>
</html>

<?php
}
?>
