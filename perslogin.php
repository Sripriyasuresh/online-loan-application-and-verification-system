<?php include('server.php') ?>
<?php
//session_start();
//checking if the person is logged in. If logged in the current username should be logged to the session variable.
/**
if(empty($_SESSION['login']))
{
	header('location:login.php');
}
**/

  if (!isset($_SESSION['pusername'])) {
  	
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['pusername']);
  	header("location: login.php");
  }
$db = mysqli_connect('localhost', 'root', '', 'registration');


if($db)
{ 
	echo "db connectd";
}
else
{
	echo "not connected";
}
// storing session value to a variable.
$session = $_SESSION['pusername'];

$query= "select * from persloan where pusername='".$session."'";

$result = mysqli_query($db,$query);
$value = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html>
<title>Index Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
body{
	background-image:url("https://finance.advids.co/wp-content/uploads//2017/05/banking11.gif");
}
</style>
<body>

<!-- Navbar -->

<div class="w3-top">
	<div class="w3-bar w3-black w3-card">
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
	<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact</a>   
		
		<a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>   
		
	</div>
</div> 
  


<!-- Header -->
<header >

  <br><h1 class="w3-margin w3-center w3-text-white w3-jumbo ">ABC Bank</h1>
  <p class="w3-xlarge  w3-text-white w3-center">Status Page.</p>
  </header>

  <center>
<center><b><label>PERSONAL LOAN</label></b></center><br><br>


<?php include('errors.php'); ?>
<table>
<tr>
<th style="text-align:left"><label>Username</label></th>
<td style="text-align:right;"><input type="text" name="pusername" value="<?php echo $value['pusername']; ?>"></td>
</tr>
<tr>
<th style="text-align:left"><label>Email-ID</label></th>
<td style="text-align:right;"><input type="text" name="pemail" value="<?php echo $value['pemail']; ?>"></td>
</tr>
<tr>
<th style="text-align:left"><label>Mobile No</label></th>
<td style="text-align:right;"><input type ="text" name="pmobile" value="<?php echo $value['pmobile']; ?>"></td>
</tr>
<tr>
<th style="text-align:left"><label>Expected Loan Amount</label></th>
<td style="text-align:right;"><input type="text" name="pamount" value="<?php echo $value['pamount']; ?>"></td>
</tr>
<tr>
<th style="text-align:left"><label>Annual Income</label></th>
<td style="text-align:right;"><input type="text" name="pincome" value="<?php echo $value['pincome']; ?>"></td>
</tr>
<tr>
<th style="text-align:left"><label>Aadhar No</label></th>
<td style="text-align:right;"><input type="text" name="padhaar" value="<?php echo $value['padhaar']; ?>"></td>
</tr>
<tr>
<th style="text-align:left" ><label>Address</label></th>
<td style="text-align:right;" ><input type="text" name="paddress" value="<?php echo $value['paddress']; ?>"></td>
</tr>
<tr>
<th style="text-align:left"><label>Acc.no</label></th>
<td style="text-align:right;"><input type="text" name="paccno" value="<?php echo $value['paccno']; ?>"></td>
</tr>
<tr>
<th style="text-align:left"><label>Status</label></th>
<td style="text-align:right;"><input type="textarea" name="pstatus" value="<?php echo $value['admin']; ?>"></td>
</tr>
</table><br>
  </center>
<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <br><br><br><br><h2 class="w3-wide w3-center w3-text-white">CONTACT</h2>
    
    <div class="w3-row w3-padding-32 w3-text-white">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker w3-text-black" style="width:30px"></i> Tamil Nadu, INDIA<br>
        <i class="fa fa-phone w3-text-black" style="width:30px"></i> Phone: +91 9043448894<br>
        <i class="fa fa-envelope w3-text-black" style="width:30px"> </i> Email: subashmuthuraj1997@gmail.com<br>
      </div>
      
    </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
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
