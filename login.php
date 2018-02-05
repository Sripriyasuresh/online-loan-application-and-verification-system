<?php include('server.php') ?>
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
</style>
<style> 
#main {
    width: 350px;
   
   height: 100px;
	
    border: 1px solid #c3c3c3;
    display: flex;
}

#main div:nth-of-type(1) {flex-grow: 1;}
#main div:nth-of-type(2) {flex-grow: 1;}
#main div:nth-of-type(3) {flex-grow: 1;}

#myBlueDiv {
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {flex-grow: 8;}
}

/* Standard syntax */
@keyframes mymove {
    50% {flex-grow: 8;}
}
</style>
<body>

<!-- Navbar -->

<div class="w3-top">
	<div class="w3-bar w3-black w3-card">
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
	<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact</a>   
		<div class="w3-dropdown-hover w3-hide-small">
		<button class="w3-padding-large w3-button" title="More">Login <i class="fa fa-caret-down"></i></button>     
		
		<div class="w3-dropdown-content w3-bar-block w3-card-4">
		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-large">Personal loan</button>
		<button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black w3-large">Educational Loan</button>
		<button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-black w3-large">Home Loan</button>
		</div>
		</div>     
		<button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-black w3-large">Admin</button>
		
	</div>
</div> 
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
  </div>

<body>
	<div class="w3-container">
	<div id="id01" class="w3-modal">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:500px">
  
      <div class="w3-center w3-light-blue"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
       
      </div>
	 
  <form class="w3-container w3-light-blue"  method="post" action="login.php">
  	<?php include('errors.php'); ?>
	<div class="w3-section">
  	<div class="input-group">
  		<label>Username</label>
  		<input class="w3-input w3-border w3-margin-bottom"  placeholder="Enter Username" type="text" name="pusername" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="w3-input w3-border" type="password" placeholder="Enter Password" type="password" name="ppassword">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="w3-button w3-block w3-black w3-section w3-padding" class="btn" name="pers_login">Login</button>
  	</div>
  	
	
	</div>
	</div>
	</div>
	</div>
  </form>
</body>
  
  
<body>
	<div class="w3-container">
	<div id="id02" class="w3-modal">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:500px">
  
      <div class="w3-center w3-light-blue"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
       
      </div>
	 
  <form class="w3-container w3-light-blue"  method="post" action="login.php">
  	<?php include('errors.php');?>
	<div class="w3-section">
  	<div class="input-group">
  		<label>Username</label>
  		<input class="w3-input w3-border w3-margin-bottom"  placeholder="Enter Username" type="text" name="eusername" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="w3-input w3-border" type="password" placeholder="Enter Password" type="password" name="epassword">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="w3-button w3-block w3-black w3-section w3-padding" class="btn" name="edu_login">Login</button>
  	</div>
  	
	
	</div>
	</div>
	</div>
	</div>
  </form>
</body>
  
  
<body>
	<div class="w3-container">
	<div id="id03" class="w3-modal">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:500px">
  
      <div class="w3-center w3-light-blue"><br>
        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
       
      </div>
	 
  <form class="w3-container w3-light-blue"  method="post" action="login.php">
  	<?php include('errors.php'); ?>
	<div class="w3-section">
  	<div class="input-group">
  		<label>Username</label>
  		<input class="w3-input w3-border w3-margin-bottom"  placeholder="Enter Username" type="text" name="husername" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="w3-input w3-border" type="password" placeholder="Enter Password" type="password" name="hpassword">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="w3-button w3-block w3-black w3-section w3-padding" class="btn" name="home_login">Login</button>
  	</div>
  	
	
	</div>
	</div>
	</div>
	</div>
  </form>
</body>
  
  
<body>
	<div class="w3-container">
	<div id="id04" class="w3-modal">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:500px">
  
      <div class="w3-center w3-light-blue"><br>
        <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
       
      </div>
	 
  <form class="w3-container w3-light-blue"  method="post" action="login.php">
  	<?php include('errors.php'); ?>
	<div class="w3-section">
  	<div class="input-group">
  		<label>Username</label>
  		<input class="w3-input w3-border w3-margin-bottom"  placeholder="Enter Username" type="text" name="adminname" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="w3-input w3-border" type="password" placeholder="Enter Password" type="password" name="adminpassword">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="w3-button w3-block w3-black w3-section w3-padding" class="btn" name="admin_login">Login</button>
  	</div>
  	
	
	</div>
	</div>
	</div>
	</div>
  </form>
</body>
  
  

<!-- Header -->
<header class="w3-container w3-orange w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">ABC Bank</h1>
  <p class="w3-xlarge">Portal for banking.</p>
  <center>
  <div id="main">
  <div style="background-color:white;"><b><br><p>->></p></b></div>
  <div style="background-color:black;" id="myBlueDiv">


  <a href="scustomerpage.php"><button  class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Application Form</button></a>

</div>
  <div style="background-color:white;"><b><br><p><<-</p></b></div>
</div>
</center>
  </header>

<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <br><br><br><br><h2 class="w3-wide w3-center w3-text-black">CONTACT</h2>
    
    <div class="w3-row w3-padding-32 w3-text-black">
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
