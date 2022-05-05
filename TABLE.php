<!--PHP CONNECTION & FETCH STAFF DETAILS-->
<?php
include('dbcon.php');
session_start();
$role="Staff";
$res= mysqli_query($con,"SELECT * FROM `tbl_login` where role='$role'");
while($r = mysqli_fetch_array($res))
{
$uname=$r['username'];  //username from table field & $uname is a random name
}
?>



<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>
  <link rel="stylesheet" href=".//css/footer.css">
  <link rel="stylesheet" href=".//css/header.css">
  <link rel="stylesheet" href=".//css/order.css">
  <link rel="stylesheet" href=".//css/style.css">
<!--Bootstrap links for validations-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="js/sweetalert.js"></script> 
    <style>
        table{
            padding-left: 70px;
            margin-bottom: 90px;
        }
        td{
            padding:10px;
        }
        th{
            padding:10px;
            padding-top:10px ;
            
        }
.addstafftable{
margin-left:15%;
}
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: black;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: orange;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
    </style>

</head>
<body>
    <!--Header-->
    <div class="header">
        <div class="navbar">
            <a href="index.php" class="logo">FASTO COURIERS</a>
            <div class="header-right">
            <a href="adminpanel.php">Back</a>
            </div>
        </div>      
    </div>

    <form action="TABLE.php"  method="POST">
    <div class="addstafftable">
      <table style="margin-top: 100px;">
          <th style="background:black; font-size:25px; color:#f48c5b;  border: 5px solid #f48c5b;">Basic Information</th>
          <tr>
              <th>Fullname</th>
              <td><input type="text" name="fullname" placeholder="Enter Full Name" required></td>
              <th>Username</th>
              <td><input type="text" name="name" placeholder="Enter Name" required></td>
              <th>Aadhar Number</th>
              <td><input type="text" name="aadhar" placeholder="Enter Aadhar" required></td>
              
          </tr>
          <tr>
              <th>Phone</th>
              <td><input type="number" name="phone" placeholder="Enter Contact" required></td>
              <th>Date of Birth</th>
              <td>
                  <div class="input-group">
                  <input type="date" name="dob" id="dob" placeholder="Enter Date of Birth" />
                  </div>
              </td>
          </tr>
          <tr>
              <th>Gender</th>
              <td>
              <div class="radio-container">
              <input type="radio" class="radioinput" id="Male" name="gender" />
              <label class="radiolabel" for="Male">Male</label>
              </div>
              </td>
              <td>
              <div class="radio-container">
              <input type="radio" class="radioinput" id="Female" name="gender" />
              <label class="radiolabel" for="Female">Female</label>
              </div>
              </td>
              <td>
              <div class="radio-container">
              <input type="radio" class="radioinput" id="Others" name="gender" />
              <label class="radiolabel" for="Others">Others</label>
              </div>
              </td>
          </tr>
      </table>
      <table style="margin-top: 60px;">
          <th style="background:black; font-size:25px; color:#f48c5b;  border: 5px solid #f48c5b;" >Staff Information</th>
          <tr>
              <th>Staff Id</th>
              <td><input type="text" name="staffid" placeholder="Enter Staff Id" required></td>
              <th>Date of Joining</th>
              <td>
                  <div class="input-group">
                  <input type="date" name="doj" id="doj" placeholder="Enter Date of Joining" />
                  </div>
              </td>  
          </tr>
          <tr>
              <th>Company Email</th>
              <td><input type="email" name="email" required></td>
              <th>Password</th>
              <td><input type="password" name="password" required></td>
              <th>confirm Password</th>
              <td><input type="password" name="cpassword" required></td>
          </tr>
      </table>
              <div class="field btn" style="margin-bottom:30px; ">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Submit" name="addstaff">
              </div>
    </div>
    </form>

    
<!--PHP code for signup-->
<?php
            if(isset($_POST['addstaff']))
            {
               //echo '<script type="text/javascript"> alert("Error!!Pleae try again!!")</script>';
               $uname=$_POST['name'];
               $fname=$_POST['fullname'];
               $uaadhar=$_POST['aadhar'];
               $dob=$_POST['dob'];
               $gender=$_POST['gender'];
               $phone=$_POST['phone'];
               $staffid=$_POST['staffid'];
               $doj=$_POST['doj'];
               $uemail=$_POST['email'];
               $pas=$_POST['password'];
               $cpas=$_POST['cpassword'];

               if($pas==$cpas)
               {
                  $pass= md5($pas);
               $query="SELECT * FROM `tbl_login` WHERE username='$uname' ";
               $query_run = mysqli_query($con,$query);

                  if(mysqli_num_rows($query_run)>0)
                  {
                     $_SESSION['status']="User already exist! Try again!!";
                     $_SESSION['status_code']="info";
                     //echo '<script type="text/javascript"> alert("User already exist!!Try Another Username!!")</script>';
                  }
                  else
                  {
                     $query="INSERT INTO `tbl_login`(`username`, `aadharid`, `password`, `email`, `role`) VALUES ('$uname','$uaadhar','$pass','$uemail','Staff')";
                     $query_run = mysqli_query($con,$query);
                     $resid = mysqli_query($con,"SELECT id FROM `tbl_login`");
                     while($r1 = mysqli_fetch_array($resid))
                     {
                       $tblid=$r1['id'];
                     }
                     $query3="INSERT INTO `tbl_staff`(`staff_id`, `idnumber`, `fullname`, `phone`, `dob`, `gender`, `doj`) VALUES ('$staffid','$tblid','$fname','$phone','$dob','$gender', '$doj')";
                     $query_run3 = mysqli_query($con,$query3);

                     if($query_run3)
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
        
    <!--Footer-->
    <div class="footer">
        <p>For Booking & Enquiries</p><br>
        <p>fastocouriers@gmail.com</p>
        <p class="copyright">Copyright © 2021</p>      
    </div>
<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

</body>
</html>