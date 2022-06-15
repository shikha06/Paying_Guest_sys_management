<?php
//require 'tenant.php';
 session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
	header("location:loginnisha.php");
}
 $conn =  new mysqli("localhost","root","","users");
 $msg="";
$pg="";
 if(isset($_POST['submit'])){
 	$email=$_SESSION['email'];
 	$sql="SELECT * FROM pgowner WHERE email='$email'";
 	$stmt=$conn->prepare($sql);
 	 $stmt->execute();
 	 $result = $stmt->get_result();
 	$row = $result->fetch_assoc();
 	$pg=$row['pgname'];
 	if( $row['status']==0){
      $msg=" Not Approved";
 	}
 	else{
 		$msg=" Apporoved";
 	}

 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 </head>
 <body class="bg-white">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 bg-light mt-5 px-0">
				<h3 class="test-center text-light bg-success p-3">Status</h3>
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">
					<div class="form-group">
						<input type="submit" name="submit" class="form-control form-control-lg" value="Show">
						<h4><?php echo "$pg : $msg" ?></h4>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

 
 
 </html>