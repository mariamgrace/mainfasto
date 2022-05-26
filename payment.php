<!--PHP CONNECTION & FETCH USER DETAILS-->
<?php
include('dbcon.php');
session_start();
$var=$_SESSION['name'];
$pick_id = $_SESSION['pick_id'];   // LATEST COURIER ID FETCHED HERE FROM sendcourier.php
//echo $pick_id;
$query = mysqli_query($con,"SELECT * FROM `tbl_courier` where courier_id='$pick_id'");
while($row = mysqli_fetch_array($query)){
    $tot_amt = $row['courier_price'];     // Amount of latest courier is fetched
}
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
<head>
    <title>Payment</title>
    <link rel="icon" href="images/iconbox.png">
    <link rel="stylesheet" href="payment.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"/>		
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>	
    <script src="js/sweetalert.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    
    <nav>
        <div class="menu">
        <div class="logo">
            <a href="#">FastoCouriers</a>
        </div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li style="margin-left:100px;color:black"><b>
        <i class="fas fa-user-alt"></i>
        <span><?php echo $var;?> </span></b></li>
        </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
            <div class="card p-3">
            <p class="mb-0 fw-bold h4">Payment</p>
            </div>
            </div>
            <div class="col-12">
            <div class="card p-3">
            <div class="card-body border p-0">
                <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Details</span> </span> </a> </p>
                <div class="collapse show p-3 pt-0" id="collapseExample">
                    <div class="row">
                        <div class="col-lg-7">

                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form__div"> <input type="text" name="name" id="name" class="form-control" placeholder=" "> <label for="" class="form__label">Name</label> </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form__div"> <input type="text" name="amt" id="amt" class="form-control" value="<?php echo $tot_amt;?>" readonly> <label for="" class="form__label">Amount</label> </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="btn btn-primary payment" onclick="pay_now()"> Make Payment </div>
                                    </div>
                                </div>
                            </form>
                            <script>
                                function pay_now()
                                {
                                    var name=jQuery('#name').val();
                                    var amt=jQuery('#amt').val();
                                    
                                    jQuery.ajax({
                                        type:'post',
                                        url:'payment_process.php',
                                        data:"amt="+amt+"&name="+name,
                                        success:function(result){
                                        var options = {
                                        "key": "rzp_test_5zwjxYHi3wvNyI", 
                                        "amount": amt*100, 
                                        "currency": "INR",
                                        "name": "Acme Corp",
                                        "description": "Test Transaction",
                                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                                        "handler": function (response){
                                        jQuery.ajax({
                                            type:'post',
                                            url:'payment_process.php',
                                            data:"payment_id="+response.razorpay_payment_id,
                                            success:function(result){
                                                window.location.href="paysuccess.php";
                                            }
                                        });
                                        }
                                    };
                                    var rzp1 = new Razorpay(options);
                                    rzp1.open();
                                        }
                                    });
                                    
                                    
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div> 
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

