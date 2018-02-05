<?php
session_start();
//checking if the person is logged in. If logged in the current username should be logged to the session variable.
/**
if(empty($_SESSION['login']))
{
	header('location:login.php');
}
**/
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
$session = $_SESSION['hemail'];

$query= "select * from homeloan where hemail='".$session."'";

$result = mysqli_query($db,$query);
$value = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>

<body class="w3-light-grey">
<!-- Navigation Bar -->
<header class="w3-display-container w3-content" style="max-width:2000px;">
<img class="w3-image" src="f.jpg" alt="Online Loan application & verification" style="min-width:800px" width="1500" height="800">
  <div class="w3-display-center w3-padding w3-col 16 m8">
</header>
<div class="w3-top">  
<div class="w3-bar w3-black w3-large">
  <a href="scustomerpage.php" class="w3-bar-item w3-button w3-black w3-mobile"><i class="fa fa-home w3-margin-right"></i>Home</a>
  

</div>



<body>
	<div class="w3-container">
	<div id="id01" class="w3-modal">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:500px">
  
    <div class="w3-center w3-white"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
     <br>  
    </div>
	 
<table>

<tr>
<th style="text-align:left"><label>Employment Status</label></th>
<td style="text-align:right;"> <?php echo $value['estatus']; ?></td>
</tr>
<tr>
<th style="text-align:left"><label>Email-ID</label></th>
<td style="text-align:right;"> <?php echo $value['hemail']; ?></td>
</tr>
<tr>
<th style="text-align:left"><label>Expected Loan Amount</label></th>
<td style="text-align:right;"><?php echo $value['hamount']; ?></td>
</tr>
<tr>
<th style="text-align:left"><label>Annual Income</label></th>
<td style="text-align:right;"><?php echo $value['hincome']; ?></td>
</tr>
<tr>
<th style="text-align:left"><label>Acc.no</label></th>
<td style="text-align:right;"><?php echo $value['haccno']; ?></td>
</tr>
<tr>
<th style="text-align:left"><label>Aadhar No</label></th>
<td style="text-align:right;"><?php echo $value['hadhaar']; ?></td>
</tr>
<tr>
<th style="text-align:left" ><label>Address</label></th>
<td style="text-align:right;" ><?php echo $value['haddress']; ?></td>
</tr>
<tr>
<th style="text-align:left"><label>Mob.no</label></th>
<td style="text-align:right;"><?php echo $value['hmobile']; ?></td>
</tr>

</table><br>


	</div>
	</div>
	</div>
  
</body>

      <div class="w3-container w3-jumbotron w3-padding-64 w3-center" >
<br>

	  
<marquee><h2>Online Loan Application and Verification System</h2></marquee><br><br>
<center>

    <div class="w3-card-4 w3-center " style="width:50%;">
    <header class="w3-container w3-center w3-black">
      <h1>Status</h1>
    </header>

	<div class="w3-container w3-white w3-center">

	<br>
	<center>
      Your details have been recieved successfully.<br>
	  "Lead a happy life-Thank You..."<br><br>
	  
	  </center>
	  </div>

      </div>
</div>
</center>
  </div>
</div>


</body>
</html>
