<!--PHP CONNECTION-->
<?php
require 'dbcon.php';
session_start();
?>

<!--HTML begins-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Courier Boy Login</title>
   <link rel="icon" href="images/iconbox.png">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/footer.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>

   <!--Bootstrap links for validations-->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
   <script src="js/sweetalert.js"></script>     
</head>
<body>
   <nav>
    <div class="menu">
      <div class="logo">
        <a href="index.html">FastoCouriers</a>
      </div>  
    </div>
   </nav>
  <img src="./images/boy.jpg" align="left" alt="Paris" style="width:40%;margin-top:80px; margin-left:60px;">

   <!--Square container -->
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Courier Boy Login
            </div>
         </div>
      <div class="form-container">

      <div class="form-inner">

   <!--SignIn Form--> 
      <form role="form" data-toggle="validator" class="login" action="courierboylogin.php" method="post">      
         <div class="form-group">
            <div class="field">
               <input type="email" class="form-control" name="email" id="eid" placeholder="Email" required>
            </div>
               <!-- Error -->
               <div class="help-block with-errors"></div>
         </div>
         <div class="form-group">
               <div class="form-group">
                  <div class="field">
                  <input type="password" data-minlength="5" class="form-control" name="password" id="pwd1" 
                     data-error="Have atleast 5 characters" placeholder="Password" required />
                  </div>
                  <!-- Error -->
                  <div class="help-block with-errors"></div>
               </div>
         </div>
         <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Sign In" name="loginval">
         </div>
      </form>

        
    <!--PHP code for signin-->
    <?php
        
        if(isset($_POST['loginval']))
        {
                $uemail=$_POST['email'];
                $pas=$_POST['password'];
                $role="Courier Boy";
                $pass= md5($pas);
                $query = "SELECT * FROM `tbl_login` WHERE email='$uemail' AND password='$pass' AND status='0' ";
                $query_run = mysqli_query($con,$query);
                if(mysqli_num_rows($query_run)>0)
                {
                $userdata = mysqli_fetch_assoc($query_run);
                $_SESSION['fastoSession']=session_id();
                $_SESSION['name']= $userdata['username'];
                $_SESSION['email']=$uemail;
                    if(($userdata['role'] == "Courier Boy"))
                        {
                        header('location:courierboydashboard.php');
                        }
                        else
                        {
                            $_SESSION['status']="Invalid Email id Or Password!";
                            $_SESSION['status_code']="error";

                        }                              
                }                           
                else
                {  
                    $_SESSION['status']="Invalid Email id Or Password!";
                    $_SESSION['status_code']="error";
                    //echo '<script type="text/javascript"> alert("Invalid Username And Password!!")</script>';
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
