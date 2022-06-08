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
    <section class="viewtable">
    <center>
    <table id="viewtableid" style="margin-top:3%; margin-left:10%">
        <tr>
            <th>Consignment No</th>
            <th>Courier Image</th>
            <th>Courier Categery</th>
            <th>Courier Weight</th>
            <th>Status</th>
        </tr>
        
            <?php
            $r=mysqli_query($con,"SELECT `courier_id`, `consignment_no`, `pickup_id`, `delivery_id`, `courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status`, `username` FROM `tbl_courier` WHERE `username`='$userid'");
            while($rr= mysqli_fetch_array($r))
            {
            ?> 
        <tr>
        <td><b><?php echo $rr['consignment_no'];?></b></td>
        <td><img src="images/<?php echo $rr['courier_image'];?>" height="100" width="100"/></td>
        <td><b><?php echo $rr['courier_cat'];?></b></td>
        <td><b><?php echo $rr['courier_weight'];?></b></td>
        <td><b><?php echo $rr['status'];?></b></td>
        </tr>
        

    <!--
        <div class="wrapper">
            <div class="left">
            <br><br><br><br><br><br><h2 style="color:black;">Consignment Number</h2>
            <span><h2><b style="color:black;"><?php echo $rr['consignment_no'];?></b></h2></span>
            </div>
            <div class="right">
                <div class="info">
                <form action="#" method="POST">
                    <h3>Order Status</h3>
                    <div class="info_data">
                        <div class="data">
                            <h4>Courier</h4>
                            <p><img src="images/<?php echo $rr['courier_image'];?>" height="100" width="100"/></p>
                        </div>
                        <div class="data">
                            <h4>Courier Categery</h4>
                            <p><?php echo  $rr['courier_cat']; ?></p>
                        </div>
                        <div class="data">
                            <h4>Status</h4>
                            <b style="color:red;"><?php echo  $rr['status']; ?></b>
                        </div>
                    </div>
                </form>
                </div>   
            </div>
    </div>-->
    <?php
    }
    ?>
    </table>
    </section>

    <!--Footer-->
    <div class="footer">
    <p>For Booking & Enquiries</p><br>
    <p>fastocouriers@gmail.com</p>
    <p class="copyright">Copyright © 2021</p>      
  </div>

</body>
</html>