<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastoCouriers</title>
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
      </style>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">FastoCouriers</a>
      </div>
      <ul>
        
        <li><a href="userlogin.php">Login</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">FASTO - Connecting Lives</div>
    <div class="sub_title">Secure Pickup and Delivery</div> 
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
