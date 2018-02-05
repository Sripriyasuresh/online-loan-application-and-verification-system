<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'registration');




if(isset($_POST['hemail'])){
	
	$husername = $_POST['husername'];
	$hemail = $_POST['hemail'];
	$hmobile = $_POST['hmobile'];
	$hamount = $_POST['hamount'];
	$hincome = $_POST['hincome'];
	$hadhaar = $_POST['hadhaar'];
	$haccno = $_POST['haccno'];
	$haddress = $_POST['haddress'];
	$admin = $_POST['admin'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE homeloan SET husername='$husername',hemail='$hemail' ,hmobile='$hmobile', hamount = '$hamount',
	hincome = '$hincome', hadhaar = '$hadhaar', haccno = '$haccno', haddress = '$haddress', admin = '$admin'	WHERE id='$id'");

	if($result){
		echo 'data updated';
	}

}
?>