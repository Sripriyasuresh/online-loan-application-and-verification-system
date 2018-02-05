<?php include('server.php') ?>
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

<header class="w3-display-container w3-content" style="max-width:2000px;">
  <img class="w3-image" src="s.jpg" alt="Online Loan application & verification" style="min-width:800px" width="2000" height="2000">
  <div class="w3-display-center w3-padding w3-col l6 m8">
      <div class="w3-container w3-jumbotron w3-padding-64 w3-center">

	  </header>
<!-- Navigation Bar -->
<div class="w3-top">

<div class="w3-bar w3-black w3-large">
  <a href="scustomerpage.php" class="w3-bar-item w3-button w3-black w3-mobile"><i class="fa fa-home w3-margin-right"></i>Home</a>
  
  
</div>

<!-- Header -->
<marquee><h2>Online Loan Application and Verification System</h2></marquee><br><br>
<center>
<center><b><label>EDUCATIONAL LOAN</label></b></center><br><br>

<form   method="post" action="edloan.php">
<?php include('errors.php'); ?>

<table>
<tr>
<th style="text-align:left"><label>Username</label></th>
<td style="text-align:right;"><input type="text" name="eusername"></td>
</tr>
<tr>
<th style="text-align:left"><label>New Password</label></th>
<td style="text-align:right;"><input type="text" name="epassword"></td>
</tr>
<tr>
<th style="text-align:left"><label>Confirm Password</label></th>
<td style="text-align:right;"><input type="text" name="epassword"></td>
</tr>
<tr>
<th style="text-align:left"><label>Email-ID</label></th>
<td style="text-align:right;"><input type="text" name="eemail"></td>
</tr>
<tr>
<th style="text-align:left"><label>Mobile No</label></th>
<td style="text-align:right;"><input type ="text" name="emobile"></td>
</tr>
<tr>
<th style="text-align:left" ><label>Address</label></th>
<td style="text-align:right;" ><input type="text" name="eaddress"></td>
</tr>
<tr>
<th style="text-align:left"><label>Aadhaar No</label></th>
<td style="text-align:right;"><input type="text" name="eadhaar"></td>
</tr>
<tr>
<th style="text-align:left"><label>Acc.no</label></th>
<td style="text-align:right;"><input type="text" name="eaccno"></td>
</tr>
<tr>
<th style="text-align:left"><label> Parents Annual Income</label></th>
<td style="text-align:right;"><input type="text" name="eincome"></td>
</tr>
<tr>
<th style="text-align:left"><label>Expected Loan Amount</label></th>
<td style="text-align:right;"><input type="text" name="eamount"></td>
</tr>
<tr>
<th style="text-align:left"><label>Student Status</label></th>
<td style="text-align:right;"><input type="text" name="estatus"></td>
</tr>
</table><br>
<button class="btn" name="eduloan">Submit</button></a>

   </center>
   </form>
   </div>
</div>


</div>
</body>
</html>
