<?php
session_start();

// variable declaration
//$adminname = "adminname";
//$adminpassword = "adminpassword";
//$pusername = "pusername";
//$ppassword = "ppassword";
//$eusername = "eusername";
//$epassword = "epassword";
//$husername = "husername";
//$hpassword = "hpassword";


$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 =  mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
 $adhaar = mysqli_real_escape_string($db, $_POST['adhaar']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $d_o_b = mysqli_real_escape_string($db, $_POST['d_o_b']);  
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);  
  $address = mysqli_real_escape_string($db, $_POST['address']);  
  
  // form validation: ensure that the form is correctly filled
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($lastname)) { array_push($errors, "Lastname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($adhaar)) { array_push($errors, "Adhaar No is required"); }
	if (empty($gender)) { array_push($errors, "Gender is required"); }
	if (empty($d_o_b)) { array_push($errors, "Date-of-Birth is required"); }
	if (empty($mobile)) { array_push($errors, "Mobile Number is required"); }
    if (empty($address)) { array_push($errors, "Address is required"); }

  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match"); }
	
  // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database
  	$query = "INSERT INTO users (firstname, lastname, email, password, adhaar, gender, d_o_b, mobile, address) 
  			  VALUES('$firstname','$lastname', '$email', '$password', '$adhaar', '$gender', '$d_o_b', '$mobile', '$address')";
  	mysqli_query($db, $query);
  	$_SESSION['firstname'] = $firstname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: homepage.php');
  }



  
  /** Edit_user
  
  if (isset($_POST['Edit_user'])) {
  // receive all input values from the form
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $d_o_b = mysqli_real_escape_string($db, $_POST['d_o_b']);  
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);  
  $address = mysqli_real_escape_string($db, $_POST['address']);  
  
	
  // register user if there are no errors in the form
  if (count($errors) == 0) {
  
  	$query = "UPDATE `users` SET `username`=[value-4],`email`=[value-5],`blood_group`=[value-7],`d_o_b`=[value-8],`age`=[value-9],`gender`=[value-10],`mobile`=[value-11],`address`=[value-12] WHERE 1";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	//header('location: customerpage.php');
  }

  **/
}


  
  if (isset($_POST['persloan'])) {
  // receive all input values from the form
  $pusername = mysqli_real_escape_string($db, $_POST['pusername']);
  $ppassword = mysqli_real_escape_string($db, $_POST['ppassword']);
  $pemail = mysqli_real_escape_string($db, $_POST['pemail']);
  $pamount = mysqli_real_escape_string($db, $_POST['pamount']);
  $padhaar = mysqli_real_escape_string($db, $_POST['padhaar']);
  $pincome = mysqli_real_escape_string($db, $_POST['pincome']);
  $paccno = mysqli_real_escape_string($db, $_POST['paccno']);  
  $pmobile = mysqli_real_escape_string($db, $_POST['pmobile']);  
  $paddress = mysqli_real_escape_string($db, $_POST['paddress']);  
  
  // form validation: ensure that the form is correctly filled
  if (empty($pusername)) { array_push($errors, "Username is required"); }
  if (empty($ppassword)) { array_push($errors, "Password is required"); }
  if (empty($pemail)) { array_push($errors, "Email is required"); }
  if (empty($pamount)) { array_push($errors, "Expected Loan Amount is required"); }
  if (empty($pincome)) { array_push($errors, "Annual Income No is required"); }
	if (empty($paccno)) { array_push($errors, "Acc.no is required"); }
	if (empty($padhaar)) { array_push($errors, "Adhaar No is required"); }
	if (empty($pmobile)) { array_push($errors, "Mobile Number is required"); }
    if (empty($paddress)) { array_push($errors, "Address is required"); }

	
  // register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO persloan (pusername, ppassword, pemail, pamount, pincome, paccno, padhaar, paddress, pmobile) 
  			  VALUES('$pusername', '$ppassword', '$pemail', '$pamount', '$pincome', '$paccno', '$padhaar', '$paddress', '$pmobile')";
  	mysqli_query($db, $query);
	$_SESSION['pusername'] = $pusername;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: pstatus.php');
  }
  }
  
  
  
  
  
  
  
  if (isset($_POST['eduloan'])) {
  // receive all input values from the form
  $eusername = mysqli_real_escape_string($db, $_POST['eusername']);
  $epassword = mysqli_real_escape_string($db, $_POST['epassword']);
  $estatus = mysqli_real_escape_string($db, $_POST['sstatus']);
  $eemail = mysqli_real_escape_string($db, $_POST['eemail']);
  $eincome = mysqli_real_escape_string($db, $_POST['eincome']);
  $eamount = mysqli_real_escape_string($db, $_POST['eamount']);
  $eadhaar = mysqli_real_escape_string($db, $_POST['eadhaar']);
  $eaccno = mysqli_real_escape_string($db, $_POST['eaccno']);  
  $emobile = mysqli_real_escape_string($db, $_POST['emobile']);  
  $eaddress = mysqli_real_escape_string($db, $_POST['eaddress']);  
  
  // form validation: ensure that the form is correctly filled
  if (empty($eusername)) { array_push($errors, "Username is required"); }
  if (empty($epassword)) { array_push($errors, "Password is required"); }
  //if (empty($estatus)) { array_push($errors, "Status of Student is required"); }
  if (empty($eemail)) { array_push($errors, "Email is required"); }
  if (empty($eamount)) { array_push($errors, "Expected amount No is required"); }
  
  if (empty($eincome)) { array_push($errors, "Annual Income No is required"); }
  if (empty($eaccno)) { array_push($errors, "Acc.no is required"); }
  if (empty($eadhaar)) { array_push($errors, "Adhaar No is required"); }
  if (empty($emobile)) { array_push($errors, "Mobile Number is required"); }
  if (empty($eaddress)) { array_push($errors, "Address is required"); }

	
  // register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO eduloan (eusername, epassword, eemail, estatus, eincome, eamount, eaccno, eadhaar, emobile, eaddress) 
  			  VALUES( '$eusername', '$epassword', '$eemail','$estatus',  '$eincome', '$eamount',  '$eaccno', '$eadhaar', '$emobile', '$eaddress')";
  	mysqli_query($db, $query);
	$_SESSION['eusername'] = $eusername;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: estatus.php');
  }
  }


  
  
  
  if (isset($_POST['homeloan'])) {
  // receive all input values from the form
  $husername = mysqli_real_escape_string($db, $_POST['husername']);
  $hpassword = mysqli_real_escape_string($db, $_POST['hpassword']);
  
  $hemail = mysqli_real_escape_string($db, $_POST['hemail']);
  $hincome = mysqli_real_escape_string($db, $_POST['hincome']);
  $hamount = mysqli_real_escape_string($db, $_POST['hamount']);
  $hadhaar = mysqli_real_escape_string($db, $_POST['hadhaar']);
  $haccno = mysqli_real_escape_string($db, $_POST['haccno']);  
  $hmobile = mysqli_real_escape_string($db, $_POST['hmobile']);  
  $haddress = mysqli_real_escape_string($db, $_POST['haddress']);  
  
  // form validation: ensure that the form is correctly filled
  if (empty($husername)) { array_push($errors, "Username is required"); }
  if (empty($hpassword)) { array_push($errors, "Password is required"); }
  
  if (empty($hemail)) { array_push($errors, "Email is required"); }
  if (empty($hamount)) { array_push($errors, "Expected amount No is required"); }
  if (empty($hincome)) { array_push($errors, "Annual Income No is required"); }
  if (empty($haccno)) { array_push($errors, "Acc.no is required"); }
  if (empty($hadhaar)) { array_push($errors, "Adhaar No is required"); }
  if (empty($hmobile)) { array_push($errors, "Mobile Number is required"); }
  if (empty($haddress)) { array_push($errors, "Address is required"); }

	
  // register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO homeloan (husername, hpassword, hemail, hincome, hamount, haccno, hadhaar, hmobile, haddress) 
  			  VALUES('$husername', '$hpassword', '$hemail',  '$hincome', '$hamount',  '$haccno', '$hadhaar', '$hmobile', '$haddress')";
  	mysqli_query($db, $query);
	$_SESSION['husername'] = $husername;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: hstatus.php');
  	
  }
  }

  
  
  
  
  
  
  
if (isset($_POST['pers_login'])) {
  $pusername = mysqli_real_escape_string($db, $_POST['pusername']);
  $ppassword = mysqli_real_escape_string($db, $_POST['ppassword']);
  
  if (empty($pusername)) {
  	array_push($errors, "Username is required");
  }
  if (empty($ppassword)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$ppassword = $ppassword;
  	$query = "SELECT * FROM persloan WHERE pusername='$pusername' AND ppassword='$ppassword'";
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['pusername'] = $pusername;
	  $_SESSION['ppassword'] = $ppassword;
	  
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: perslogin.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  
}




if (isset($_POST['edu_login'])) {
  $eusername = mysqli_real_escape_string($db, $_POST['eusername']);
  $epassword = mysqli_real_escape_string($db, $_POST['epassword']);
  
  if (empty($eusername)) {
  	array_push($errors, "Username is required");
  }
  if (empty($epassword)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$epassword = $epassword;
  	$query = "SELECT * FROM eduloan WHERE eusername='$eusername' AND epassword='$epassword'";
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['eusername'] = $eusername;
	  $_SESSION['epassword'] = $epassword;
	  
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: edlogin.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  
}


if (isset($_POST['home_login'])) {
  $husername = mysqli_real_escape_string($db, $_POST['husername']);
  $hpassword = mysqli_real_escape_string($db, $_POST['hpassword']);
  
  if (empty($husername)) {
  	array_push($errors, "Username is required");
  }
  if (empty($hpassword)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$hpassword = $hpassword;
  	$query = "SELECT * FROM homeloan WHERE husername='$husername' AND hpassword='$hpassword'";
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['husername'] = $husername;
	  $_SESSION['hpassword'] = $hpassword;
	  
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: homelogin.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  
}

if (isset($_POST['admin_login'])) {
  $adminname = mysqli_real_escape_string($db, $_POST['adminname']);
  $adminpassword = mysqli_real_escape_string($db, $_POST['adminpassword']);
  
  if (empty($adminname)) {
  	array_push($errors, "Username is required");
  }
  if (empty($adminpassword)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$adminpassword = $adminpassword;
  	$query = "SELECT * FROM admin WHERE adminname='$adminname' AND adminpassword='$adminpassword'";
  	$results = mysqli_query($db, $query);
	
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['adminname'] = $adminname;

	  
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: sadmin.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  
}


?>		




