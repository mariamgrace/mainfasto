<!--PHP CONNECTION & FETCH USER DETAILS-->
<?php
include('dbcon.php');
session_start();
$var=$_SESSION['name'];
$res= mysqli_query($con,"SELECT * FROM `tbl_login` where username='$var'");
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
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send Courier</title>
  <link rel="icon" href="images/iconbox.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/courier.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="js/sweetalert.js"></script>  

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 0px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 30 px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #fff;
  padding: 5px 20px 15px 20px;
  border: 2px solid #ff661fd2;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ff661fd2;
  border-radius: 3px;
}
input[type=date] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ff661fd2;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #ff661fd2;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 30%;
  border-radius: 12px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #000;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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
      <li style="margin-left:100px;color:black"><b>
      <i class="fas fa-user-alt"></i>
      <span><?php echo $var;?> </span></b></li>
    </ul>
  </div>
</nav>

<div class="row">
  <div class="col-75">
    <div class="container">
    <form action="sendcourier.php" method="POST" enctype="multipart/form-data">
        <div class="row">
          <!--PHP code for Pickup-->
          <div class="col-50">
           <br> <h3>Pickup</h3><br>
            <label for="pickupname"><i class="fa fa-user"></i> Senders Name</label>
            <input type="text" class="form-control pickupname" name="pickupname" id="pickupname" placeholder="Enter your Name" required>
            <div class="row">
              <div class="col-50">
                <label for="pickupdate">Pickup Date</label>
                <input type="date" name="pickupdate" id="pickupdate" placeholder="Prefered pickup date" min="<?php echo date('Y-m-d') ?>" required/>
              </div>
              <div class="col-50">
                <label for="pickup">Pickup Location</label>
                <select name="pickuplocation" required>
                  <option value="" disabled selected>Pick your location</option>
                  <option value="Kanjirappally">Kanjirappally</option>
                  <option value="Erumeli">Erumeli</option>
                  <option value="Pala">Pala</option>
                </select>
              </div>
            </div>
            <label for="pickupaddress"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="pickupaddress" name="pickupaddress" placeholder="542 W. 15th Street" required>
            <label for="pickupinstructions"><i class="fa fa-institution"></i>Nearest Landmark</label>
            <input type="text" class="form-control pickupinstructions" id="pickupinstructions" name="pickupinstructions" placeholder="Landmark" required>
            <div class="row">
              <div class="col-50">
              <label for="pickupcontact">Mobile</label>
              <input type="text" class="form-control pickupcontact" name="pickupcontact" id="pickupcontact" placeholder="Enter Phone Number" required />
              </div>
              <div class="col-50">
              <label for="pickup">Address Type</label>
              <select name="pickupaddrtype" required>
              <option value="" disabled selected>Choose</option>
              <option value="Home">Home(Anytime)</option>
              <option value="Office">Office(Between 9am-6pm)</option>
              </select>
              </div>
            </div>
          </div>
          <!--PHP code for Delivery-->
          <div class="col-50">
            <br><h3>Delivery</h3><br>
            <label for="deliveryname"><i class="fa fa-user"></i> Receivers Name</label>
            <input type="text" class="form-control deliveryname"  name="deliveryname" id="deliveryname" placeholder="Enter Recepient Name" required>
            <div class="row">
              <div class="col-50">
                <label for="deliverycontact">Mobile</label>
                <input type="text" class="form-control deliverycontact" name="deliverycontact" id="deliverycontact" placeholder="Recepient Phone number" required />
              </div>
              <div class="col-50">
                <label for="delivery">Delivery Location</label>
                <select name="deliverylocation" required>
                  <option value="" disabled selected>Drop Location</option>
                  <option value="Kanjirappally">Kanjirappally</option>
                  <option value="Erumeli">Erumeli</option>
                  <option value="Pala">Pala</option>
                </select>
              </div>
            </div>
            <label for="deliveryaddress">Address</label>
            <input type="text" name="deliveryaddress" id="deliveryaddress" placeholder="Enter delivery address" required>
            <div class="row">
              <div class="col-50">
                <label for="deliveryinstructions">Nearest Landmark</label>
                <input type="text" class="form-control deliveryinstructions" name="deliveryinstructions" id="deliveryinstructions" placeholder="Nearest landmark" required />
              </div>
              <div class="col-50">
                <label for="delivery">Address Type</label>
                <select name="deliveryaddrtype" required>
                  <option value="" disabled selected>Choose</option>
                  <option value="Home">Home(Anytime)</option>
                  <option value="Office">Office(Between 9am-6pm)</option>
                </select>
              </div>
            </div>
          </div>
          <!--PHP code Package-->
          <div class="col-50">
            <br><h3>Package</h3><br>
            <div class="row">
              <div class="col-50">
              <label for="weight"><b>Package Weight</b></label>
              <select name="packageweight" onchange="calculateAmount(this.value)" required>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Below 5Kg</option>
                <option value="2">6-9Kg</option>
                <option value="3">10-15Kg</option>
              </select>
              </div>
              <div class="col-50">
              <label><b>Amount</b></label>
              <input type="text"  name="tot_amount" id="tot_amount" readonly >
              </div>
            </div>
            <label for="packagesize"><b>Upload Package Image</b></label>
            <label  class="uploadimage" for="upload">Choose file</label>
            <input type="file" id="upload" name="upload" accept="image/x-png,image/jpeg" hidden/>
            <br>
            <label for="packagesize">Courier Category</label>
            <input type="checkbox" id="checkbox-1" name="category" value="Document"  />
            <label for="checkbox-1">Documents</label>
            <input type="checkbox" id="checkbox-2" name="category" value="Medical" />
            <label for="checkbox-2">Medical</label>
            <input type="checkbox" id="checkbox-3" name="category" value="Fragile" />
            <label for="checkbox-3">Fragile</label>
            <input type="checkbox" id="checkbox-4" name="category" value="Non-Fragile" />
            <label for="checkbox-4">Non-Fragile</label>
          </div>
        </div>
        <input type="submit" value="Pickup Now" name="order"  class="btn">
      </form>
 
    <!--PHP code for Pickup, Delivery, Package-->
    <?php
    include('dbcon.php');
    if(isset($_POST['order']))
    {
      $pickuplocation=$_POST['pickuplocation'];
      $pickupaddress=$_POST['pickupaddress'];
      $pickupinstructions=$_POST['pickupinstructions'];
      $pickupname=$_POST['pickupname'];
      $pickupcontact=$_POST['pickupcontact'];
      $pickupaddrtype=$_POST['pickupaddrtype'];
      $pickupdate=$_POST['pickupdate'];

      $deliverylocation=$_POST['deliverylocation'];
      $deliveryaddress=$_POST['deliveryaddress'];
      $deliveryinstructions=$_POST['deliveryinstructions'];
      $deliveryname=$_POST['deliveryname'];
      $deliverycontact=$_POST['deliverycontact'];
      $deliveryaddrtype=$_POST['deliveryaddrtype'];

      $category=$_POST['category'];
      $orderno=mt_rand(100000000,999999999);
      echo $orderno;
      $packageweight=$_POST['packageweight'];
      $tot_amount=$_POST['tot_amount'];
      $upload=$_FILES['upload']['name'];
      move_uploaded_file($_FILES['upload']['tmp_name'],"images/".$_FILES['upload']['name']);

      $query1="INSERT INTO `tbl_pickupdetails`(`pickup_loc`, `pickup_addr`, `pickup_ins`, `pickup_sender`, `pickup_addrtype`, `pickup_mobile`, `pickup_date`, `status`) VALUES ('$pickuplocation','$pickupaddress','$pickupinstructions','$pickupname','$pickupaddrtype','$pickupcontact','$pickupdate','Pending')";
      $query_run1 = mysqli_query($con,$query1);
      $respickupdetails= mysqli_query($con,"SELECT pickup_id FROM `tbl_pickupdetails`");
      while($r1 = mysqli_fetch_array($respickupdetails))
        {
        $pickup_id=$r1['pickup_id'];  
        }         
      $query2="INSERT INTO `tbl_deliverydetails`(`delivery_loc`, `delivery_addr`, `delivery_ins`, `delivery_receiver`, `delivery_addrtype`, `delivery_mobile`, `status`) VALUES ('$deliverylocation','$deliveryaddress','$deliveryinstructions','$deliveryname','$deliveryaddrtype','$deliverycontact','Pending')";
      $query_run2 = mysqli_query($con,$query2);
      $resdeliverydetails= mysqli_query($con,"SELECT delivery_id FROM `tbl_deliverydetails`");
      while($r2 = mysqli_fetch_array($resdeliverydetails))
        {
        $delivery_id=$r2['delivery_id'];  
        }
        
      $query3="INSERT INTO `tbl_courier`(`consignment_no`, `pickup_id`, `delivery_id`, `courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status`) VALUES ('$orderno', '$pickup_id','$delivery_id','$upload','$category','$packageweight','$tot_amount','Pending')";
      $query_run3 = mysqli_query($con,$query3);
      if($query_run3)
        {
          $pick_id = mysqli_insert_id($con); //TO GET THE CURRECT COURIER ID (LAST ROW IN TABLE)
          $_SESSION['pick_id']=$pick_id;

        $_SESSION['status']="Place Your Order";
        $_SESSION['status_code']="success";
        //echo '<script type="text/javascript"> alert("User Rgistered Successfully!!!Go To Login..!!")</script>';                                      
        }
        else
        {
          $_SESSION['status']="Unsuccessfull";
          $_SESSION['status_code']="error";
          //echo '<script type="text/javascript">alert("ERROR!!Try Again!!")</script>';
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
    text: "Pay Now",
    icon: "<?php echo $_SESSION['status_code']; ?>",
    type: "success"
    }).then(function(){
    //redirect to another page
    window.location.href = "payment.php";
    });
    </script>
    <?php
    unset($_SESSION['status']);
    }
    ?>
    </div>
  </div>
</div>

<!--JS FOR CALCULATIONS-->
<script>
function calculateAmount(val) { //Character Validation
var tot_price = val * 100;
var divobj = document.getElementById('tot_amount');
divobj.value = tot_price;
}
$('.pickupname,.deliveryname').keyup(function() { //Character Validation
$('span.error-keyup-2').remove();
var inputVal = $(this).val();
var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
if(!characterReg.test(inputVal)) {
    $(this).after('<span class="error error-keyup-2" style="color:red">No special characters and numbers allowed.</span>');
}
});
$('.deliveryinstructions,.pickupinstructions').keyup(function() { //Character Validation
$('span.error-keyup-2').remove();
var inputVal = $(this).val();
var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
if(!characterReg.test(inputVal)) {
    $(this).after('<span class="error error-keyup-2" style="color:red">Enter valid character input</span>');
}
});
$('.deliverycontact,.pickupcontact').keyup(function() { //Phone number validation
$('span.error-keyup-2').remove();
var inputVal = $(this).val();
var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
if(!phoneno.test(inputVal)) {
    $(this).after('<span class="error error-keyup-2" style="color:red"> Number must be 10 digit </span>');
}
if(inputVal.charAt(0)!="9" && inputVal.charAt(0)!="8" && inputVal.charAt(0)!="7" ) {
    $(this).after('<span class="error error-keyup-2" style="color:red"> Enter a valid phone number. </span>');
}
});
</script>

</body>
</html>


<?php
}
?>

