
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

<!-- Navigation Bar -->
<header class="w3-display-container w3-content" style="max-width:2000px;">
<img class="w3-image" src="p.jpg" alt="Online Loan application & verification" style="min-width:800px" width="1500" height="800">
  <div class="w3-display-center w3-padding w3-col 16 m8">
</header>
<div class="w3-top">  
<div class="w3-bar w3-black w3-large">
  <a href="scustomerpage.php" class="w3-bar-item w3-button w3-black w3-mobile"><i class="fa fa-home w3-margin-right"></i>Home</a>
  
  
</div>


<marquee><h2>Online Loan Application and Verification System</h2></marquee><br><br>
<center>
<center><b><label>HOME LOAN</label></b></center><br><br>
<form   method="post" action="homeloan.php">
<?php include('errors.php'); ?>
<table>

<tr>
<th style="text-align:left"><label>Username</label></th>
<td style="text-align:right;"><input type="text" name="husername"></td>
</tr>
<tr>
<th style="text-align:left"><label>New Password</label></th>
<td style="text-align:right;"><input type="text" name="hpassword"></td>
</tr>
<tr>
<th style="text-align:left"><label>Confirm Password</label></th>
<td style="text-align:right;"><input type="text" name="hpassword"></td>
</tr>
<tr>
<th style="text-align:left"><label>Email-ID</label></th>
<td style="text-align:right;"><input type="text" name="hemail"></td>
</tr>
<tr>
<th style="text-align:left"><label>Mobile No</label></th>
<td style="text-align:right;"><input type ="text" name="hmobile"></td>
</tr>
<tr>
<th style="text-align:left" ><label>Address</label></th>
<td style="text-align:right;" ><input type="text" name="haddress"></td>
</tr>
<tr>
<th style="text-align:left"><label>Aadhaar No</label></th>
<td style="text-align:right;"><input type="text" name="hadhaar"></td>
</tr>
<tr>
<th style="text-align:left"><label>Acc.no</label></th>
<td style="text-align:right;"><input type="text" name="haccno"></td>
</tr>
<tr>
<th style="text-align:left"><label> Annual Income</label></th>
<td style="text-align:right;"><input type="text" name="hincome"></td>
</tr>
<tr>
<th style="text-align:left"><label>Expected Loan Amount</label></th>
<td style="text-align:right;"><input type="text" name="hamount"></td>
</tr>


</table><br>
<button class="btn" name="homeloan">Submit</button></a>

</center>
</form>
</div>
</div>
</header>


</body>
</html>




</table><br>
<button class="btn" name="homeloan">Submit</button></a>
<a href="scustomerpage.php"><button>Close</button></a>
</center>
</form>
</div>
</div>
</header>


</body>
</html>



