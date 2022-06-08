<?php
include('dbcon.php');
session_start();
$var=$_SESSION['name']; //name is forms attribute name
$var2=$_SESSION['email']; //email is forms attribute name

$res= mysqli_query($con,"SELECT * FROM `tbl_login` where username='$var'");
while($r = mysqli_fetch_array($res))
{
$uname=$r['username']; 
$userid = $r['id']; //username from table field & $uname is a random name
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/iconbox.png">
	<link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Courier History</title>
    <style>
          /* FOOTER*/
      .footer 
      {
        margin-top: 240px;
        background-color: black;
        position:fixed;
        width: 100%;
        height:15%;
        
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
    .column {
    margin-left:30px;
    margin-right:30px;

    margin-top:30px;
   
    }
    @media screen and (max-width: 600px) {
    .column {
        width: 100%;
        display: table;
        margin-bottom: 20px;
    }
    }
    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 40px;
    padding-top: 40px;
    text-align: center;
    background-color: #FDE6D5;
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
    <h1 style="margin-left:50px;margin-top:20px;">Order History</h1>
            <?php
            
            $r=mysqli_query($con,"SELECT `courier_id`, `consignment_no`, `pickup_id`, `delivery_id`, `courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status`, `username` FROM `tbl_courier` WHERE `username`='$userid'");
            while($rr= mysqli_fetch_array($r))
            {
            ?> 
    <div class="row"  style="display: table-cell; width: 20%;">
    <div class="column" >
        <div class="card" >
        <h3>Consignment No: <?php echo $rr['consignment_no'];?> </h3>
        <p>Courier: <img src="images/<?php echo $rr['courier_image'];?>" height="100" width="100"/> </p>
        <p>Courier Categery: <?php echo  $rr['courier_cat']; ?> </p>
        <p>Courier Status:<span style="color:green"><?php echo  $rr['status']; ?></span></p>
        </div>
    </div>
    </div>    
            <?php
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