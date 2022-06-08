<?php
include('dbcon.php');
session_start();
extract($_POST);
//echo $search_box;
$var=$_SESSION['name']; //name is forms attribute name
$var2=$_SESSION['email']; //email is forms attribute name

$res= mysqli_query($con,"SELECT * FROM `tbl_login` where username='$var'");
while($r = mysqli_fetch_array($res))
{
$uname=$r['username'];  //username from table field & $uname is a random name
$uemail=$r['email'];    //email from table field & $uemail is a random name
$uaadhar=$r['aadharid'];
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
    <title>Check Status</title>
    <style>
          /* FOOTER*/
      .footer 
      {
        margin-top: 100px;
        background-color: black;
        position:fixed;
        width: 100%;
        height:15%;
        margin-top: 650px;
        
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

        <?php
        if(isset($_POST['search_btn']))
        {
        $consignment_no=$_POST['search_box'];
    
        $rcc= mysqli_query($con,"SELECT `consignment_no`, `courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status` FROM `tbl_courier` WHERE consignment_no='$consignment_no'");
        while($rrc= mysqli_fetch_array($rcc))
        {
        $cons_no=$rrc["consignment_no"];
        $courier_image=$rrc["courier_image"];
        $courier_cat=$rrc["courier_cat"];
        $courier_weight=$rrc["courier_weight"];
        $status=$rrc["status"];
        ?>
        <?php
        }
        }
        ?> 

    <div class="wrapper">
        <div class="left">
          <br><br><br><br><br><br><h2 style="color:black;">Consignment Number</h2>
          <span><h2><b style="color:black;"><?php echo $cons_no;?></b></h2></span>
        </div>
        <div class="right">
            <div class="info">
            <form action="#" method="POST">
                <h3>Order Status</h3>
                <div class="info_data">
                    <div class="data">
                        <h4>Courier</h4>
                        <p><img src="images/<?php echo $courier_image;?>" height="100" width="100"/></p>
                    </div>
                    <div class="data">
                        <h4>Courier Categery</h4>
                        <p><?php echo  $courier_cat; ?></p>
                    </div>
                    <div class="data">
                        <h4>Status</h4>
                        <b style="color:red;"><?php echo  $status; ?></b>
                    </div>
                </div>
            </form>
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