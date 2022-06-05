<!--PHP CONNECTION & FETCH USER DETAILS-->
<?php
include('dbcon.php');
session_start();
$var=$_SESSION['name'];
$pick_id = $_SESSION['pick_id'];   // LATEST COURIER ID FETCHED HERE FROM sendcourier.php
//echo $pick_id;
$query = mysqli_query($con,"SELECT * FROM `tbl_courier` where courier_id='$pick_id'");
while($row = mysqli_fetch_array($query)){
    $tot_amt = $row['courier_price'];
    $courier_image=$row["courier_image"];
    $courier_cat=$row["courier_cat"]; 
    $courier_weight=$row["courier_weight"];
}
$res1= mysqli_query($con,"SELECT c.*, p.* FROM tbl_courier c, tbl_pickupdetails p WHERE c.pickup_id = p.pickup_id");//fetch data from 2 database tables
    while($r1 = mysqli_fetch_array($res1)){
        $courier_id=$r1["courier_id"];
        $pickup_date=$r1["pickup_date"];
        $pickup_sender=$r1["pickup_sender"];
        $pickup_addr=$r1["pickup_addr"];
        $pickup_loc=$r1["pickup_loc"];
    }
$res2= mysqli_query($con,"SELECT c.*, d.* FROM tbl_courier c, tbl_deliverydetails d WHERE c.delivery_id = d.delivery_id");//fetch data from 2 database tables
    while($r2 = mysqli_fetch_array($res2)){
        $courier_id=$r2["courier_id"];
        $delivery_receiver=$r2["delivery_receiver"];
        $delivery_loc=$r2["delivery_loc"];
        $delivery_addr=$r2["delivery_addr"];
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
    <!--JS file link to save html to pdf-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--JS function of button to save html to pdf-->
    <script>
        function generatePDF() {
            const element = document.getElementById('invoice');
            html2pdf().from(element).save("Invoice.pdf");
        }
	</script>

    <style>
        .imagestyle {
                width:100px;
                height:100px;
            }
        img {
            width:100%;
            height:100%;
        }
        .box img {
            max-width:100%;
            max-height:100%;
            vertical-align: middle;
        }
        .box3 img {
        object-fit: cover;
        }      
        #invoice {
            box-sizing: inherit;		
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
            <li style="margin-left:100px;color:black"><b>
        <i class="fas fa-user-alt"></i>
        <span><?php echo $var?></span></b></li>
        </ul>
        </div>
    </nav>
   
    <div class="container" id="invoice">
        <div class="row">
            <div class="col-12 mt-4">
            <div class="card p-3">   
            <span class="imagestyle"><img src="images/iconbox.png"></img></span>
            <p class="mb-0 fw-bold h4">FASTO Couriers</p>
            </div>
            </div>
            <div class="col-12">
            <div class="card p-3">
            <div class="card-body border p-0">
                <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Invoice</span> </a> </p>
                <div class="collapse show p-3 pt-0" id="collapseExample">
                <div class="row">
                    <div class="col-lg-5 mb-lg-0 mb-3">
                        <b><p class="h4 mb-0">Order Summary</p></b><br>
                        <p class="mb-0"><span class="fw-bold">Consignment No:</span><span class="c-green"></span> </p>
                        <p class="mb-0"> <span class="fw-bold">Pickup Date: </span> <span class="fw-normal">&nbsp&nbsp&nbsp<?php echo $pickup_date;?></span> </p>
                        <div class="wrapper">
                            <div class="box box3"><img src="images/<?php echo $courier_image;?>" alt="Image Unavailable"></div>
                        </div>  
                        <br><p class="mb-0"> <span class="fw-bold" style="font-size:20px;">TOTAL AMOUNT:</span> <span class="fw-bold"  style="color:red;font-size:20px;">&nbsp&nbsp Rs. <?php echo $tot_amt;?></span> </p>
                    </div>
                        <div class="col-lg-7">
                            <form action="" class="form">
                                <div class="row">
                                <div class="col-6">
                                <div class="fw-bold">Senders Name : <input type="text" class="form-control" value="<?php echo  $pickup_sender?> " readonly ></div>
                                </div>
                                <div class="col-6">
                                <div class="fw-bold">Senders Location : <input type="text" class="form-control" value="<?php echo  $pickup_loc?> " readonly ></div>
                                </div>
                                <div class="col-12">
                                <br><div class="fw-bold">Senders Address : <input type="text" class="form-control" value="<?php echo  $pickup_addr?> " readonly ></div>
                                </div>
                                <div class="col-6">
                                <br><p class="mb-0"> <span class="fw-bold">Courier Catagery : </span><span class="fw-normal"><?php echo $courier_cat;?></span> </p>
                                </div>
                                <div class="col-6">
                                <br><p class="mb-0"><span class="fw-bold">Courier Weight : </span><span class="fw-normal"><?php
                                    if($courier_weight=='1'){
                                        echo "Below 5 Kg";
                                    }
                                    else if($courier_weight=='2'){
                                        echo "6-9 Kg";
                                    }
                                    else{
                                        echo "10-15 Kg";
                                    }
                                    ?></span></p>
                                </div>
                                <div class="col-6">
                                <br><div class="fw-bold">Recepient Name : <input type="text" class="form-control" value="<?php echo   $delivery_receiver?> " readonly ></div>
                                </div>
                                <div class="col-6">
                                <br><div class="fw-bold">Recepient Location : <input type="text" class="form-control" value="<?php echo   $delivery_loc?> " readonly ></div>
                                </div>
                                <div class="col-12">
                                <br><div class="fw-bold">Recepient Address : <input type="text" class="form-control" value="<?php echo   $delivery_addr?> " readonly ></div>
                                </div>
                                </div>
                            </form>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-6">
        <div class="btn btn-primary payment" onclick="generatePDF()"> Click to Download </div>
        </div>
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


