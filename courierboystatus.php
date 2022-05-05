<?php
 include('dbcon.php');

 $id=$_GET['id'];
 $status=$_GET['status'];
 $q="update tbl_login set status=$status where id=$id";
 mysqli_query($con,$q);
 header('location:courierboyview.php');
	?>
