<!--PHP CONNECTION & FETCH STAFF DETAILS-->
<?php
include('dbcon.php');
session_start();
$var=$_SESSION['name'];
$role="Courier Boy";
$res= mysqli_query($con,"SELECT * FROM `tbl_login` where username='$var' and role='$role'");
while($r = mysqli_fetch_array($res))
{
$uname=$r['username'];
$uid = $r['id'];  //username from table field & $uname is a random name
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
    <script src="js/sweetalert.js"></script>  
    <title>Courier List</title>
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
        <span><b><?php echo $role;?></b></span>
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
        <a href="courierboydashboard.php">
        <span class="icon"><i class="fa fa-qrcode"></i></span>
        <span class="text">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="#">
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
    <h1 style="margin-top:2%"><b></b></h1>
    <table id="viewtableid" style="margin-top:3%; margin-left:10%">
    <tr>
    <th>&nbsp;&nbsp;&nbsp;&nbsp;Courier</th>
    <th>&nbsp;&nbsp;&nbsp;Category</th>
    <th>&nbsp;&nbsp;&nbsp;Weight</th>
    <th>&nbsp;&nbsp;&nbsp;Price</th>
    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOP</th>
    <th>&nbsp;&nbsp;&nbsp;Sender</th>
    <th>&nbsp;&nbsp;Pickup Loc</th>
    <th>&nbsp;&nbsp;Pickup Addr</th>
    <th>&nbsp;&nbsp;Pickup Ins</th>
    <th>&nbsp;&nbsp;Address Type</th>
    <th>&nbsp;&nbsp;Mobile</th>
    <th>&nbsp;&nbsp;Update</th>
    <th>&nbsp;&nbsp;Status</th>
    <th colspan="2">&nbsp;&nbsp;&nbsp;Action</th>
    </tr>

    <!--PHP CONNECTION & FETCH COURIER DETAILS-->
    <?php
    $rr= mysqli_query($con,"SELECT `assign_courierid` FROM `tbl_assigncourier` WHERE `assigned_courierboy`='$uid'");
    while($rc= mysqli_fetch_array($rr))
    {
    $ascid=$rc["assign_courierid"];
    $res = mysqli_query($con,"SELECT `courier_id`, `pickup_id`,`courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status` FROM `tbl_courier` WHERE `courier_id`='$ascid'");
    while($r= mysqli_fetch_array($res))
    {
    $couid=$r["courier_id"];
    $pickid = $r["pickup_id"];
    $courier_image=$r["courier_image"];
    $courier_cat=$r["courier_cat"];
    $courier_weight=$r["courier_weight"];
    $courier_price=$r["courier_price"];
    $status=$r["status"];

    $rcc= mysqli_query($con,"SELECT `pickup_id`, `pickup_date`, `pickup_loc`, `pickup_addr`, `pickup_ins`, `pickup_sender`, `pickup_addrtype`, `pickup_mobile` FROM `tbl_pickupdetails` WHERE `pickup_id`='$pickid '");
    while($rrc= mysqli_fetch_array($rcc))
    {
    $pick_dt=$rrc["pickup_date"];
    $pick_sed=$rrc["pickup_sender"];
    $pick_loc=$rrc["pickup_loc"];
    $pick_addr=$rrc["pickup_addr"];
    $pick_ins=$rrc["pickup_ins"];
    $pick_addty=$rrc["pickup_addrtype"];
    $pick_ph=$rrc["pickup_mobile"];
    ?>

    <form action="viewassignedcouriers.php?action=idd&id=<?php echo $couid;?>" method="POST">
    <tr>     
        <td><img src="images/<?php echo $courier_image;?>" height="100" width="100"/></td>
        <td><b><?php echo $courier_cat;?></b></td>
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
        <b style="color:green;">Rs.<?php echo $courier_price;?>/-</b>
        </td>
        <td><b><?php echo $pick_dt;?></b></td>
        <td><b><?php echo $pick_sed;?></b></td>
        <td><b><?php echo $pick_loc;?></b></td>
        <td><b><?php echo $pick_addr;?></b></td>
        <td><b><?php echo $pick_ins;?></b></td>
        <td><b><?php echo $pick_addty;?></b></td>
        <td><b><?php echo $pick_ph;?></b></td>
        <td>
            <div class="select">
            <select name="courierstatus">
            <option style="font-weight:bold">Select</option>
            <option style="font-weight:bold">Out for Pickup</option>
            <option style="font-weight:bold">Pickup Accepted</option>
            <option style="font-weight:bold">On Transit</option>
            <option style="font-weight:bold">Out for Delivery</option>
            </select>
            </div>
        </td>
        <td><b style="color:red;"><?php echo $status;?></b></td>
        <td><input type="submit" class="button-assignapprove" name="applybtn" value="Apply" /></td>
    </tr>
    </form>
    
    <?php
    }
    }
    }
    ?>       
    <!--PHP code for fetching idnumber from tbl_courierbot and insert it into assigned_cboy_id-->
    <?php
    include ('dbcon.php');
    if(isset($_POST['applybtn']))
    {
    $couid = $_GET['id'];
    $status=$_POST['courierstatus'];
    $queryresult="UPDATE `tbl_courier` SET `status`='$status' where `courier_id` = '$couid'";
    if(mysqli_query($con, $queryresult))
        {
        $_SESSION['status']="Updated Successfully";
        $_SESSION['status_code']="success";
        //echo '<script type="text/javascript"> alert("User Rgistered Successfully!!!Go To Login..!!")</script>';    
        }
        else
        {
        $_SESSION['status']="Update Failed";
        $_SESSION['status_code']="error";
       
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