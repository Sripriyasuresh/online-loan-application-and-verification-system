<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'registration');




if(isset($_POST['eemail'])){
	
	$eusername = $_POST['eusername'];
	$eemail = $_POST['eemail'];
	$emobile = $_POST['emobile'];
	$eamount = $_POST['eamount'];
	$eincome = $_POST['eincome'];
	$eadhaar = $_POST['eadhaar'];
	$eaccno = $_POST['eaccno'];
	$eaddress = $_POST['eaddress'];
	$admin = $_POST['admin'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE eduloan SET eusername='$eusername' ,eemail='$eemail' , emobile='$emobile' , eamount = '$eamount'
	, eincome = '$eincome' , eadhaar = '$eadhaar' , eaccno = '$eaccno', eaddress = '$eaddress', admin = '$admin'	WHERE id='$id'");

	if($result){
		echo 'data updated';
	}

}
?>