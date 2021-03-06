<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
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
        <div align="center"><font color="white" size="6" type="comic sans">My Transaction History.</font></div>
        <table id="customers" class="radie">
    <tr>
      <th>TRANS.NA</th>
      <th>DATE</th>
      <th>AMOUNT</th>
      <th>TRANSCODE</th>
    </tr>
    <tr>

      <td>###TN1</td>
      <td>###T1DAT</td>
      <td>###T1AMT</td>
      <td>###T1COD</td>

    </tr>
    <tr>

      <td>###TN2</td>
      <td>###T2DAT</td>
      <td>###T2AMT</td>
      <td>###T2COD</td>

    </tr>
    <tr>
      <td>###TN3</td>
      <td>###T3DAT</td>
      <td>###T3AMT</td>
      <td>###T3COD</td>
    </tr>
    <tr>
      <td>###TN4</td>
      <td>###T4DAT</td>
      <td>###T4AMT</td>
      <td>###T4COD</td>
    </tr>
    <tr>
      <td>###TN5</td>
      <td>###T5DAT</td>
      <td>###T5AMT</td>
      <td>###T5COD</td>
    </tr>
    <tr>
      <td>###TN6</td>
      <td>###T6DAT</td>
      <td>###T6AMT</td>
      <td>###T6COD</td>
    </tr>
    <tr>
      <td>###TN7</td>
      <td>###T7DAT</td>
      <td>###T7AMT</td>
      <td>###T7COD</td>
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
