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
   <title>Sign In</title>
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
        <a href="index.php">FastoCouriers</a>
      </div>  
    </div>
   </nav>
  <img src="./images/DELIVER.jpg" align="left" alt="Paris" style="width:40%;margin-top:80px; margin-left:60px;">

   <!--Square container -->
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Welcome back!
            </div>
            <div class="title signup">
               Signup here!
            </div>
         </div>
      <div class="form-container">

   <!--Slider-->
      <div class="slide-controls">
         <input type="radio" name="slide" id="login" checked>
         <input type="radio" name="slide" id="signup">
         <label for="login" class="slide login">Login</label>
         <label for="signup" class="slide signup">Signup</label>
         <div class="slider-tab"></div>
      </div>
      <div class="form-inner">

   <!--SignIn Form--> 
      <form role="form" data-toggle="validator" class="login" action="userlogin.php" method="post">      
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
         <div class="signup-link">
            Not a member? <a href="">Signup now</a>
         </div>
      </form>

   <!--PHP code for signin -->
      <?php
      
            if(isset($_POST['loginval']))
            {
                  $uemail=$_POST['email'];
                  $pas=$_POST['password'];
                  $pass= md5($pas);
                  $query = "SELECT * FROM `tbl_login` WHERE email='$uemail' AND password='$pass'";
                  $query_run = mysqli_query($con,$query);
                  if(mysqli_num_rows($query_run)>0)
                  {
                     $userdata = mysqli_fetch_assoc($query_run);
                     $_SESSION['fastoSession']=session_id();
                     $_SESSION['name']= $userdata['username'];
                     $_SESSION['email']=$uemail;
                        if(($userdata['role'] == "Customer"))
                           {
                           header('location:home.php');
                           }
                        else if(($uemail =="admin@gmail.com"))
                           {

                           header('location:admindashboard.php');
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

   <!--Signup Form-->
      <form role="form" data-toggle="validator" action="userlogin.php" method="post">      
         <div class="form-group">
               <div class="field">
               <input type="text" class="form-control" name="name" maxlength="10" minlength="4"
               pattern="^[a-zA-Z0-9_.-]*$" id="uid" placeholder="Username" required>
               </div>
               <!-- Error -->
               <div class="help-block with-errors"></div>
         </div>
         <div class="form-group">
               <div class="field">
               <input type="text" class="form-control" name="aadhar" data-minlength="12" maxlength="12"
               pattern="^[0-9]*$" id="aadhar" data-error="Have atleast 12 characters" placeholder="Aadhar Number" required>
               </div>
               <!-- Error -->
               <div class="help-block with-errors"></div>
         </div>
         <div class="form-group">
            <div class="field">
               <input type="email" class="form-control" id="eid" name="email" placeholder="Email" required>
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
         <div class="form-group">
               <div class="form-group">
                  <div class="field">
                  <input type="password" class="form-control" name="cpassword" id="pwd2"
                     placeholder="Confirm Password" required />
               </div>
                  <!-- Error -->
                  <div class="help-block with-errors"></div>
               </div>
         </div>
         <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Sign Up" name="signupval">
         </div>
      </form>

   <!--PHP code for signup-->
      <?php
            if(isset($_POST['signupval']))
            {
               //echo '<script type="text/javascript"> alert("Error!!Pleae try again!!")</script>';
               $uname=$_POST['name'];
               $uaadhar=$_POST['aadhar'];
               $uemail=$_POST['email'];
               $pas=$_POST['password'];
               $cpas=$_POST['cpassword'];

               if($pas==$cpas)
               {
                  $pass= md5($pas);
               $query="SELECT * FROM `tbl_login` WHERE email='$uemail' ";
               $query_run = mysqli_query($con,$query);

                  if(mysqli_num_rows($query_run)>0)
                  {
                     $_SESSION['status']="User already exist! Try again!!";
                     $_SESSION['status_code']="info";
                     //echo '<script type="text/javascript"> alert("User already exist!!Try Another Username!!")</script>';
                  }
                  else
                  {
                     $query="INSERT INTO `tbl_login`(`username`, `aadharid`, `password`, `email`, `role`) VALUES ('$uname','$uaadhar','$pass','$uemail','Customer')";
                     $query_run = mysqli_query($con,$query);

                     if($query_run)
                     {
                     $_SESSION['status']="Registered Successfully";
                     $_SESSION['status_code']="success";
                     //echo '<script type="text/javascript"> alert("User Rgistered Successfully!!!Go To Login..!!")</script>';                                      
                     }
                     else
                     {
                        $_SESSION['status']="ERROR!!Try Again!!";
                        $_SESSION['status_code']="error";
                        //echo '<script type="text/javascript">alert("ERROR!!Try Again!!")</script>';
                     }
                  }
               }
            else
               {
                  $_SESSION['status']="Passwords fail to match!";
                  $_SESSION['status_code']="error";
                  //echo '<script type="text/javascript"> alert("Enter Same Password!!")</script>';
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
  

   <!--Javascript-->
   <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
      signupBtn.click();
      return false;
      });
   </script>
 
</body>
</html>
