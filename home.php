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
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="images/iconbox.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
    /* FOOTER*/
    .footer 
      {
        margin-top: 100px;
        background-color: black;
        position:relative;
        width: 100%;
        height:15%;
        margin: 0;
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
      
      .about{                                        /*About Us*/
        background-color: #f3d6c5;
        display: flex;
        margin-top: 50px;
        justify-content:left;
        flex-direction: column;
        padding-left: 100px;
        border-radius: 2% 60% 60% 2%;
        align-items: left;
        color: rgb(0, 0, 0);
      }
    .about h2{
        font-size: 36px;
        margin-left: 90px;
        margin-top: 20px;
        text-decoration:solid;
        letter-spacing: 6px;
        font-family: 'Poppins',sans-serif;
    }
    .about span{
        height: 0.5px;
        width: 80px;
        margin-left: 90px;
        margin: 20px 0;
    }
    .about p{
        padding-bottom: 15px;
        font-size: larger;
        width: 60%;
        font-weight: bold;
        text-align: left;
        margin-left: 90px;
        line-height: 1.7;
        color:#000000
    }
    .aboutlinks{
        margin: 15px 0;
        margin-left: 90px;
    }
    .aboutlinks li{
        border:3px solid #4158D0;
        list-style: none;
        border-radius: 5px;
        padding: 10px 15px;
        width: 160px;
        text-align: center;
    }
    .aboutlinks li a{
        text-transform: uppercase;
        color: rgb(0, 0, 0);
        text-decoration: none;
        font-size: larger;
    }
    .aboutlinks li:hover{
        border-color: #C850C0;
    }

    .aboutvertical-line{
        height: 30px;
        width: 5px;
        position: left;
        background: #4158D0;
        margin-left: 80px;
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
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li style="margin-left:50px;color:white"><b>
        <span>Welcome <?php echo $var;?> </span></b></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    
    <div class="btns">
      <button onclick="location.href = 'sendcourier.php';">Request Pickup</button>
      <button onclick="location.href = 'trackcourier.php';">Track Now</button>
    </div>
  </div>

  <!--section for About Us-->
  <div id="about">
    <div class = "about">
      <h2>About Us</h2>
      <span><!-- line here --></span>
      <p>We collect and delivers shipments in the shortest possible time frame, while postal services are generally used for transporting letters and parcels which can sometimes take some time to arrive at their final destination.</p>
      <ul class = "aboutlinks">
          <li><a href = "#">Speed</a></li>
          <div class = "aboutvertical-line"></div>
          <li><a href = "#">Efficiency</a></li>
          <div class = "aboutvertical-line"></div>
          <li><a href = "#">Packaging</a></li>
      </ul>
    </div>
  </div>

  <!--section for our commitment-->
  <div class="section1">
    <div class="part1">
        <h3>Our Commitment</h3>
    </div>
  </div>
  <hr class="solid">

  <div class="row">
    <div class="column">
    <div class="card">
        <div class="imagebox">
          <div class="imgset1">
        <img src="images/delivered.png"/></div>
        </div>
        <h3>Door-to-door courier service</h3>
        <p id="imageboxpara">Pick and drop items like documents, cloths, medicine etc.</p>
    </div>
    </div> 
    
    <div class="column">
    <div class="card">
        <div class="imagebox">
          <div class="imgset1">
        <img src="images/location.png"/></div>
        </div>
        <h3>Real time package tracking</h3>
        <p id="imageboxpara">Package can be easily tracked throughout the shipping process</p>
    </div>
    </div>  

    <div class="column">
    <div class="card">
        <div class="imagebox">
          <div class="imgset1">
        <img src="images/banknotes.png"/> </div>
        </div>
        <h3>Standardized Prices</h3>
        <p id="imageboxpara">We offer reasonable prices for your courier and makes it affordable.</p>  
    </div>
    </div> 
  </div>

  <!--section for shipping-->
  <div id="services">
    <div class="section1">
      <div class="part1">
        <h3>Shipping made easy</h3>
      </div>
    </div>
    <hr class="solid">

    <section class="section2">
      <div class="set1">
        <img src="images/p1.png">
      </div>
      <div class="set-1">
        <h2>Schedule Pickup</h2>
        <ul>
        <li><b>Set your pickup and drop location</b></li>
        <li><b>Tell us the package weight</b></li>
        <li><b>Set your pickup and drop location</b></li>
        </ul>
      </div>
    </section>
    <section class="section3">
      <div class="set2">
        <img src="images/serviceable.png">
      </div>
      <div class="set-2">
        <h2>Realtime Tracking</h2>
        <ul>
        <li><b>Track your shipment status anytime, anywhere</b></li>
        <li><b>Set your delivery preferences & experience much more</b></li>
        </ul>
      </div>
    </section>
    <section class="section4">
      <div class="set3">
        <img src="images/quickly.png">
      </div>
      <div class="set-3">
        <h2>Quick Package Delivery</h2>
        <p><b>We deliver your package swiftly, safely and on time</b></p>  
      </div>
    </section>
  </div>

  <!-- Back to top button -->
  <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
  </button>

  <!--Footer-->
  <div class="footer">
    <p>For Booking & Enquiries</p><br>
    <p>fastocouriers@gmail.com</p>
    <p class="copyright">Copyright © 2021</p>      
  </div>


  <!--Script-->
  <script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
    scrollFunction();
    };

    function scrollFunction() {
    if (
        document.body.scrollTop > 10 ||
        document.documentElement.scrollTop > 10
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
  </script>
</body>
</html>


<?php
}
?>
