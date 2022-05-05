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
                <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Card details</span> <span class=""> <span class="fab fa-cc-amex"></span> <span class="fab fa-cc-mastercard"></span> <span class="fab fa-cc-discover"></span> </span> </a> </p>
                <div class="collapse show p-3 pt-0" id="collapseExample">
                <div class="row">
                    <div class="col-lg-5 mb-lg-0 mb-3">
                        <p class="h4 mb-0">Summary</p>
                        <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green"></span> </p>
                        <p class="mb-0"> <span class="fw-bold">Total Amount:</span> <span class="c-green"></span> </p>
                        <p class="mb-0"></p>
                    </div>
                        <div class="col-lg-7">
                            <form action="" class="form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">Card Number</label> </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">MM / yy</label> </div>
                                </div>
                                <div class="col-6">
                                    <div class="form__div"> <input type="password" class="form-control" placeholder=" "> <label for="" class="form__label">cvv code</label> </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">name on the card</label> </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn btn-primary payment" onclick="pay_now()"> Make Payment </div>
                                </div>
                            </div>
                            </form>
                            <?php
                            $q1="SELECT `courier_id`,`courier_price`, `status` FROM `tbl_courier`";
                            ?>

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

    
    <!--Footer-->
    <div class="footer">
        <p>For Booking & Enquiries</p><br>
        <p>fastocouriers@gmail.com</p>
        <p class="copyright">Copyright © 2021</p>      
    </div>

                            
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
         </div>
      </div>
   </div>

    </body>
    </html>


