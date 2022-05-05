<!--PHP CONNECTION & FETCH USER DETAILS-->
<?php
include('dbcon.php');
session_start();
$resi= mysqli_query($con,"SELECT s.*, l.* FROM tbl_staff s, tbl_login l WHERE s.idnumber = l.id");//fetch data from database
while($r = mysqli_fetch_array($resi))
{
$staffid=$r['staff_id'];  //username from table field & $uname is a random name
}

if(isset($_SESSION["fastoSession"]) != session_id()){
  header("Location:index.php");
  die();
}
else{

?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>
  <link rel="icon" href="images/iconbox.png">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href=".//css/header.css">
  <link rel="stylesheet" href=".//css/courier.css">
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
        background-color:#ffa061;
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
<div class="top_navbar">
		<div class="logo">FastoCouriers</div>
	</div>

	<div class="sidebar">
		<div class="sidebar_inner">
		<ul>
			<li>
				<a href="staffdashboard.php">
					<span class="icon"><i class="fa fa-qrcode"></i></span>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="staffprofile.php">
					<span class="icon"><i class="fa fa-book"></i></span>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
                <a href="#">
					<span class="icon"><i class="fa fa-truck"></i></span>
					<span class="text">Courier Boy</span>
				</a>
			</li>
			<li>
				<a href="leave.php">
					<span class="icon"><i class="fa fa-calendar"></i></span>
					<span class="text">Leave</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="icon"><i class="fa fa-question-circle"></i></span>
					<span class="text">About</span>
				</a>
			</li>
      <li>
				<a href="#">
					<span class="icon"><i class="fa fa-pen"></i></span>
					<span class="text">Service</span>
				</a>
			</li>
      <li>
	 			<a href="logout.php">
                    <span class="icon"><i class="fa fa-power-off" style="color:white;"></i></span>           
					<span class="text">Logout</span>
				</a>
			</li>

		</ul>
		</div>
	</div>

    <form action="leave.php"  method="POST">
    <div class="addstafftable">
      <table style="margin-top: 100px;">
          <th style="background:black; font-size:25px; color:#f48c5b;border: 5px solid #f48c5b;">Apply Leave    </th>
          <tr>
              <th>Employee Id</th>
              <td><input type="text" name="eid" value="<?php echo $staffid; ?>" readonly></td>
          </tr>
          <tr>
          <th>Start Date</th>
              <td>
                  <div class="input-group">
                  <input type="date" name="sdate" id="sdate" placeholder="Leave Start Date" />
                  </div>
              </td>
              <th>End Date</th>
              <td>
                  <div class="input-group">
                  <input type="date" name="edate" id="edate" placeholder="Leave End Date" />
                  </div>
              </td>
              <td>
                  <div class="custom-select" style="width:200px;">
                  <select>
                      <option value="">Apply for:</option>
                      <option value="FN">FN</option>
                      <option value="AN">AN</option>
                      <option value="FD">FD</option>
                  </select>
                  </div>
              </td>
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

<?php
}
?>