
 <?php
  include 'connection2.php';
 ?>

<!DOCTYPE html>

<html>
<head>
 <title>GSK Insurance</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: red;
    color: white;
}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="sadmin.php" class="w3-bar-item w3-button w3-red w3-mobile"><i class="fa fa-home w3-margin-right"></i>Home</a>
  
  <a href="apersloan.php" class="w3-bar-item w3-button w3-mobile">PersonalLoan</a>
  <a href="ahomloan.php" class="w3-bar-item w3-button w3-mobile">Home Loan</a>
  <a href="aedloan.php" class="w3-bar-item w3-button w3-mobile">Educational Loan</a>
  <a href="login.php" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">Logout</a>
</div>


<!-- Page content -->


</body>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:150px;margin-right:130px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="Customer Details">
    
    
    <h1 class="w3-center w3-xxxlarge w3-text-black"><b>Customer Details of Home Loan</b></h1><br>


<body>


  <table id="customers" class="table">
    <thead>
      <tr>
        
		<th>Username</th>
		<th>Email</th>
        <th>Mobile No</th>
        <th>Expected Amount</th>
        <th>Annual Income</th>
		<th>Adhaar No</th>
		<th>Account No</th>
		<th>Address</th>
		<th>Status</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
	  
          $table  = mysqli_query($connection ,'SELECT * FROM homeloan');
          while($row  = mysqli_fetch_array($table)){ ?>
              <tr id="<?php echo $row['id']; ?>">
                <td data-target="husername"><?php echo $row['husername']; ?></td>
				<td data-target="hemail"><?php echo $row['hemail']; ?></td>
				<td data-target="hmobile"><?php echo $row['hmobile']; ?></td>
				<td data-target="hamount"><?php echo $row['hamount']; ?></td>
				<td data-target="hincome"><?php echo $row['hincome']; ?></td>
                <td data-target="hadhaar"><?php echo $row['hadhaar']; ?></td>
				<td data-target="haccno"><?php echo $row['haccno']; ?></td>
				<td data-target="haddress"><?php echo $row['haddress']; ?></td>
				<td data-target="admin"><?php echo $row['admin']; ?></td>
				<td><a href="#" data-role="update" data-id="<?php echo $row['id'] ;?>">Update</a></td>
              </tr>
         <?php }
       ?>
       
    </tbody>
  </table>
</body>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Username</label>
                <input type="text" id="husername" class="form-control">
              </div>
			  <div class="form-group">
                <label>Email</label>
                <input type="text" id="hemail" class="form-control">
              </div>
			  <div class="form-group">
                <label>Mobile</label>
                <input type="text" id="hmobile" class="form-control">
              </div>
			  <div class="form-group">
                <label> Expected Amount</label>
                <input type="text" id="hamount" class="form-control">
              </div>
			  <div class="form-group">
                <label> Annual Income</label>
                <input type="text" id="hincome" class="form-control">
              </div>
			  <div class="form-group">
                <label>Adhaar</label>
                <input type="text" id="hadhaar" class="form-control">
              </div>
			  <div class="form-group">
                <label>Account No</label>
                <input type="text" id="haccno" class="form-control">
              </div>
			  <div class="form-group">
                <label>Address</label>
                <input type="text" id="haddress" class="form-control">
              </div>
			  <div class="form-group">
                <label>Status</label>
                <input type="text" id="admin" class="form-control">
              </div>
                <input type="hidden" id="id" class="form-control">
          </div>
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

</body>
<script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
			var husername  = $('#'+id).children('td[data-target=husername]').text();
            var hemail  = $('#'+id).children('td[data-target=hemail]').text();
			var hmobile  = $('#'+id).children('td[data-target=hmobile]').text();
            var hamount  = $('#'+id).children('td[data-target=hamount]').text();
            var hincome  = $('#'+id).children('td[data-target=hincome]').text();
            var hadhaar  = $('#'+id).children('td[data-target=hadhaar]').text();
			var haccno  = $('#'+id).children('td[data-target=haccno]').text();
            var haddress  = $('#'+id).children('td[data-target=haddress]').text();
            var admin  = $('#'+id).children('td[data-target=admin]').text();


            $('#husername').val(husername);
   		    $('#hemail').val(hemail);
			$('#hmobile').val(hmobile);
			$('#hamount').val(hamount);
			$('#hincome').val(hincome);
			$('#hadhaar').val(hadhaar);
			$('#haccno').val(haccno);
			$('#haddress').val(haddress);
			$('#admin').val(admin);
			
            $('#id').val(id);
            $('#myModal').modal('toggle');
      });

      // now create event to get data from fields and update in database 

       $('#save').click(function(){
         var id  = $('#id').val(); 
         var husername =  $('#husername').val();
		 var hemail =  $('#hemail').val();
         var hmobile =  $('#hmobile').val();
		 var hamount =  $('#hamount').val();
		 var hincome =  $('#hincome').val();
		 var hadhaar =  $('#hadhaar').val();
		 var haccno =  $('#haccno').val();
		 var haddress =  $('#haddress').val();
		 var admin =  $('#admin').val();
		  

          $.ajax({
              url      : 'connection2.php',
              method   : 'post', 
              data     : {husername : husername, hemail : hemail, hmobile : hmobile, hamount : hamount, hincome : hincome,
			  hadhaar : hadhaar ,haccno : haccno, haddress : haddress, admin: admin, id: id},
              success  : function(response){
                            // now update user record in table 
                             $('#'+id).children('td[data-target=husername]').text(husername);
							 $('#'+id).children('td[data-target=hemail]').text(hemail);
							 $('#'+id).children('td[data-target=hmobile]').text(hmobile);
							 $('#'+id).children('td[data-target=hamount]').text(hamount);
							 $('#'+id).children('td[data-target=hincome]').text(hincome);
							 $('#'+id).children('td[data-target=hadhaar]').text(hadhaar);
							 $('#'+id).children('td[data-target=haccno]').text(haccno);
							 $('#'+id).children('td[data-target=haddress]').text(haddress);
							 $('#'+id).children('td[data-target=admin]').text(admin);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
  });
</script>
</html>