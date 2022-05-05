<!--PHP CONNECTION & FETCH USER DETAILS-->
<?php
include('dbcon.php');
session_start();
$var=$_SESSION['name']; //name is forms attribute name
$var2=$_SESSION['email']; //email is forms attribute name

$res= mysqli_query($con,"SELECT * FROM `tbl_login` where username='$var'");
while($r = mysqli_fetch_array($res))
{
$uname=$r['username'];  //username from table field & $uname is a random name
$uemail=$r['email'];    //email from table field & $uemail is a random name
$uaadhar=$r['aadharid'];
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
    $query="UPDATE `tbl_login` SET `username`='$uname' AND `aadharid`='$uaadhar' WHERE `email`='$uemail'";
    $query_run = mysqli_query($con,$query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Profile</title>
  <link rel="icon" href="images/iconbox.png">
	<link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/header.css">
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
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">FastoCouriers</a>
      </div>
      
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="userprofile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li style="margin-left:50px;color:white"><b>
        <span>Welcome <?php echo $var;?> </span></b></li>
      </ul>
    </div>
  </nav>

  <div class="wrapper">
      <div class="left">
          <img src="https://i.imgur.com/cMy8V5j.png" alt="user" width="100">
          <h2><span><b><?php echo $var; ?></b></span></h2>
          <button onclick="location.href = 'userpasswordreset.php';"class="resetbutton" style="vertical-align:middle"><span>Reset Password</span></button>
      </div>
      <div class="right">
          <div class="info">
              <h3>My Profile</h3>
              <div class="info_data">
                  <div class="data">
                      <h4>Email</h4>
                      <p><?php echo $var2; ?></p>
                      <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  </div>
                  <div class="data">
                    <h4>Aadhar Number</h4>
                      <p><?php echo $uaadhar; ?></p>
                </div>
              </div>
          </div>
        
        <div class="projects">
              <h3></h3>
              <div class="projects_data">
                  <div class="data">
                      <h4></h4>
                      <p></p>
                  </div>
                  <div class="data">
                    <h4></h4>
                      <p></p>
                </div>
              </div>
          </div>
      </div>
  </div>

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
