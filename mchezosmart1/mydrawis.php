<?php
session_start();
require_once('loginsystem/dbconnection.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
?>

<?php
//Code for Registration

if(isset($_POST['request']))
{
  $fname=$_POST['fname'];
  $tamount1=$_POST['tamount1'];
  $tdate1=$_POST['tdate1'];
  $tamount2=$_POST['tamount2'];
  $tdate2=$_POST['tdate2'];
  $tamount3=$_POST['tamount3'];
  $tdate3=$_POST['tdate3'];
  $tamount4=$_POST['tamount4'];
  $tdate4=$_POST['tdate4'];
  $tamount5=$_POST['tamount5'];
  $tdate5=$_POST['tdate5'];
  $tamount6=$_POST['tamount6'];
  $tdate6=$_POST['tdate6'];


$sql=mysqli_query($con,"select id from transactions where tamount1='$tamount1'");
$row5=mysqli_num_rows($sql);
if($row5>0)
{
	echo "<script>alert('Transaction Already Made. Please Use The Next Field');</script>";
} else{
	$msg=mysqli_query($con,"insert into transactions (fname,tamount1,tdate1,tamount2,tdate2,tamount3,tdate3,tamount4,tdate4,tamount5,tdate5,tamount6,tdate6) values('$fname', '$tamount1', '$tdate1', '$tamount2', '$tdate2', '$tamount3', '$tdate3', '$tamount4', '$tdate4', '$tamount5', '$tdate5', '$tamount6', '$tdate6')");

if($msg)
{
	echo "<script>alert('Request Sent Successfully');</script>";
}
}
}

 ?>
<!from users>
<?php
$con=mysqli_connect("localhost","root","","loginsystem");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users");
$row = mysqli_fetch_array($result)
?>
<!from transactions>

<?php
$con=mysqli_connect("localhost","root","","loginsystem");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM transactions");
$row5 = mysqli_fetch_array($result)
?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='styles/style4-opens.css'>
<link rel="stylesheet" href="styles/styleo.css">
<link rel="stylesheet" href="styles/style1.css">
<link rel="stylesheet" href="styles/style2-Montserrat.css">
<link rel="stylesheet" href="styles/style3-cloudflare.css">
<link rel="stylesheet" href="styles/style5-blue.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

#customers td, #customers th {
  border: 2px solid #ddd;

  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: silver;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: grey;
  color: white;

}

.radie {
  border-radius: 8px;
}
</style>



<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="contabee">

  <!-- Navbar -->
  <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
    <a href="myindex.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Dashboard"><i class="fa fa-dashboard w3-text-purple"></i></a>
    <a href="mydrawis.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Withdraw"><i class="fa fa-money w3-text-green"></i></a>
    <a href="mycontactos.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Contact Us"><i class="fa fa-envelope w3-text-blue"></i></a>

    <a href="myindex.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
      <img src="pichaz/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
    </a>
   </div>
  </div>

  <!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="myindex.php" class="w3-bar-item w3-button w3-padding-large">Dashboard</a>
  <a href="mydrawis.php" class="w3-bar-item w3-button w3-padding-large">Withdraw</a>
  <a href="mycontactos.html" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>

</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="pichaz/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-user w3-text-green fa-fw w3-margin-right w3-text-green"></i> ###Name</p>
         <p><i class="fa fa-envelope w3-text-red fa-fw w3-margin-right w3-text-red"></i> ###Email</p>
         <p><i class="fa fa-map-marker  w3-text-blue fa-fw w3-margin-right w3-text-blue"></i>###Location</p>
        </div>
      </div>
      <br>

      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
            <a href="myindex.php" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-dashboard  w3-text-purple fa-fw w3-margin-right"></i>Dashboard</a>

          <a href="mytransactionso.php" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o  w3-text-orange fa-fw w3-margin-right"></i>My Transactions</a>

          <a href="mydrawis.php" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class=" fa fa-money  w3-text-green fa-fw w3-margin-right"></i> Withdraw</a>

                <a href="loginsystem/logout.php" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-sign-out w3-text-red fa-fw w3-margin-right"></i> Log-Out</a>
  </div>
    </div>
    <br>
      <!-- Alert Box -->


    <!-- End Left Column -->
    </div>

    <!-- Middle Column -->
    <div class="w3-col m9">

      <div class="w3-row-padding">
        <div class="w3-col m12">

      <div class="w3-container w3-card w3-white w3-round w3-margin radie contabee"><br>
        <div align="center"><font color="white" size="6" type="comic sans">Request Withdraw</font></div>
        <table id="customers" class="radie">

    <tr>
      <th>Username</th>
      <th>Amount</th>

      <th>Time Used</th>
    </tr>
    <tr>
<form name="registration" method="post" action="" enctype="multipart/form-data">
      <td><input type="text" name=fname class="text" value="<?php echo $row5["fname"];?>'s 1st Transaction" readonly></td>
      <td><input type="text" name=tamount1 class="text" placeholder="eg. 10,000" required></td>

      <td><input type="text" name=tdate1 class="text" value="<?php echo $row5["tdate1"];?>  " readonly>
  <input class="buttons2 w3-blue w3-hover-green" type="submit" name="request"  value="Submit" ></td>

  </form>
    </tr>

    <tr>
<form name="registration" method="post" action="" enctype="multipart/form-data">
      <td><input type="text" name=fname class="text" value="<?php echo $row5["fname"];?>'s 2nd Transaction" readonly></td>
      <td><input type="text" name=tamount2 class="text" placeholder="eg. 10,000" required ></td>

      <td><input type="text" name=tdate2 class="text" value="<?php echo $row5["tdate2"];?>" readonly>
      <input class="buttons2 w3-blue w3-hover-green" type="submit" name="request"  value="Submit" ></td>
  </form>
    </tr>

    <tr>
<form name="registration" method="post" action="" enctype="multipart/form-data">
      <td><input type="text" name=fname class="text" value="<?php echo $row5["fname"];?>'s 3rd Transaction" readonly></td>
      <td><input type="text" name=tamount3 class="text" placeholder="eg. 10,000" required ></td>

      <td><input type="text" name=tdate3 class="text" value="<?php echo $row5["tdate3"];?>" readonly>
      <input class="buttons2 w3-blue w3-hover-green" type="submit" name="request"  value="Submit" ></td>
  </form>
    </tr>

    <tr>
<form name="registration" method="post" action="" enctype="multipart/form-data">
      <td><input type="text" name=fname class="text" value="<?php echo $row5["fname"];?>'s 4th Transaction" readonly></td>
      <td><input type="text" name=tamount4 class="text" placeholder="eg. 10,000" required ></td>

      <td><input type="text" name=tdate4 class="text" value="<?php echo $row5["tdate4"];?>" readonly>
      <input class="buttons2 w3-blue w3-hover-green" type="submit" name="request"  value="Submit" ></td>
  </form>
    </tr>

    <tr>
<form name="registration" method="post" action="" enctype="multipart/form-data">
      <td><input type="text" name=fname class="text" value="<?php echo $row5["fname"];?> 's 5th Transaction" readonly></td>
      <td><input type="text" name=tamount5 class="text" placeholder="eg. 10,000" required></td>

      <td><input type="text" name=tdate5 class="text" value="<?php echo $row5["tdate5"];?>" readonly>
      <input class="buttons2 w3-blue w3-hover-green" type="submit" name="request"  value="Submit" ></td>
  </form>
    </tr>

    <tr>
<form name="registration" method="post" action="" enctype="multipart/form-data">
      <td><input type="text" name=fname class="text" value="<?php echo $row5["fname"];?>'s 6th Transaction" readonly></td>
      <td><input type="text" name=tamount6 class="text" placeholder="eg. 10,000" required></td>

      <td><input type="text" name=tdate6 class="text" value="<?php echo $row5["tdate6"];?>" readonly>
      <input class="buttons2 w3-blue w3-hover-green" type="submit" name="request"  value="Submit" ></td>
  </form>
    </tr>

  </table>
<br>
      </div>

    <!-- End Middle Column -->
    </div>


    </div>

  <!-- End Grid -->
  </div>

<!-- End Page Container -->
</div>
<br>
</div>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <div align="center"> <h5><font color="white">Mchezo</font> <font color="orange">Wangu</font></h5> </div>
</footer>

<footer class="w3-container w3-theme-d5">
<div align="center">  <p>Powered by MchezoSmart. </p> </div>
</footer>

<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else {
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className =
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
<?php } ?>
