<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'registration');




if(isset($_POST['pemail'])){
	
	$pusername = $_POST['pusername'];
	$pemail = $_POST['pemail'];
	$mobile = $_POST['pmobile'];
	$pamount = $_POST['pamount'];
	$mobile = $_POST['pincome'];
	$padhaar = $_POST['padhaar'];
	$paddress = $_POST['paddress'];
	$paccno = $_POST['paccno'];
	$admin = $_POST['admin'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE persloan SET pusername='$pusername' ,pemail='$pemail' , pmobile='$pmobile' , pamount = '$pamount'
	, pincome = '$pincome' , padhaar = '$padhaar' ,paddress = '$address', paccno = '$paccno', admin = '$admin'	WHERE id='$id'");

	if($result){
		echo 'data updated';
	}

}
?>