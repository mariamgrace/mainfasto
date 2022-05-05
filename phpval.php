<!--PHP code for Pickup, Delivery, Package-->
<?php
          if(isset($_POST['order']))
          {
            $pickuplocation=$_POST['pickuplocation'];
            $pickupaddress=$_POST['pickupaddress'];
            $pickupinstructions=$_POST['pickupinstructions'];
            $pickupname=$_POST['pickupname'];
            $pickupcontact=$_POST['pickupcontact'];
            $pickupaddrtype=$_POST['pickupaddrtype'];
            $pickupdate=$_POST['pickupdate'];
            $pickuptime=$_POST['pickuptime'];

            $deliverylocation=$_POST['deliverylocation'];
            $deliveryaddress=$_POST['deliveryaddress'];
            $deliveryinstructions=$_POST['deliveryinstructions'];
            $deliveryname=$_POST['deliveryname'];
            $deliverycontact=$_POST['deliverycontact'];
            $deliveryaddrtype=$_POST['deliveryaddrtype'];

            $category=$_POST['category'];
            $packageweight=$_POST['packageweight'];
            $tot_amount=$_POST['tot_amount'];
            $upload=$_FILES['upload']['name'];
            move_uploaded_file($_FILES['upload']['tmp_name'],"images/".$_FILES['upload']['name']);

            $query1="INSERT INTO `tbl_pickupdetails`(`pickup_loc`, `pickup_addr`, `pickup_ins`, `pickup_sender`, `pickup_addrtype`, `pickup_mobile`, `pickup_date`, `pickup_time`, `status`) VALUES ('$pickuplocation','$pickupaddress','$pickupinstructions','$pickupname','$pickupaddrtype','$pickupcontact','$pickupdate', '$pickuptime','Pending')";
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
              
            $query3="INSERT INTO `tbl_courier`(`pickup_id`, `delivery_id`, `courier_image`, `courier_cat`, `courier_weight`, `courier_price`, `status`) VALUES ('$pickup_id','$delivery_id','$upload','$category','$packageweight','$tot_amount','Pending')";
            $query_run3 = mysqli_query($con,$query3);
                  if($query_run3)
                   {
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

                            
    