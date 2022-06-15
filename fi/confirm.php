<?php
session_start();
//include 'signup.php';
$conn =  new mysqli("localhost","root","","pgms");
$msg="";
if($conn->connect_error)
  {
    die("connection failed".$conn->connect_error);
  }

if(isset($_POST['confirm'])){
   //$email=$_POST['email'];
   $code=$_POST['confirm_code'];

   $sql = "SELECT * FROM user WHERE code='$code'";
   $stmt=$conn->prepare($sql);
 	
 	$stmt->execute();
 	$result = $stmt->get_result();
 	$row = $result->fetch_assoc();
 	
 	$msg=$row['code'];
 	if($row['code'] )
 	{  
 	$sql = "UPDATE user SET status=1 WHERE code='$code'";
 	$stmt=$conn->prepare($sql);
 	
 	$stmt->execute();
 	header("location:loginnisha.php");
        }




	
	//else{
		//$msg="nooooo";
	//}
	//$msg=$row[1];
}
$conn->close();




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 10%;margin-left:30%;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h4>Please Confirm Email</h4>
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

                       

				<div class="input-group">
					<input type="text" name="confirm_code" class="form-control" placeholder="Enter Confirmation Code...">
					<div class="input-group-btn">
						<input type="submit" value="Confirm" name="confirm" class="btn btn-success">
					</div>
				</div>
				 <h5 class="text-danger text-center"> <?= $msg; ?></h5> 
			</form>
		</div>
	</div>
</div>
</body>
</html>