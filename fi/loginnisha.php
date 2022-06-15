<?php
 session_start();
 $conn =  new mysqli("localhost","root","","pgms");

 $msg="";
 //$user="";
 if(isset($_POST['login'])){
 	$email = $_POST['email'];
 	$password = $_POST['password'];
 	$password1 = sha1($password);
 	$userType = $_POST['userType'];
 	if($email=='pamu6789@gmail.com' AND $password=='nis123' AND $userType=='admin')
 	 { session_regenerate_id();
 	 	$_SESSION['role']="admin";
 		      $_SESSION['email']=$email;
                session_write_close();
 				header("location:admin1.php");}
 		else
 		{
 		
 		

 	$sql = "SELECT * FROM user WHERE email=? AND password=? AND user_type=?";
 	$stmt=$conn->prepare($sql);
 	$stmt->bind_param("sss",$email,$password1,$userType);
 	$stmt->execute();
 	$result = $stmt->get_result();
 	$row = $result->fetch_assoc();
 	session_regenerate_id();
 	$_SESSION['email'] = $row['email'];
 	$_SESSION['role'] = $row['user_type'];
 	$_SESSION['status'] = $row['status'];
   session_write_close();
 	if( $_SESSION['role']=="user" AND $_SESSION['status']==1){
 		header("location:../user1.php");
 	}
 	else if($_SESSION['role']=="tenant" AND $_SESSION['status']==1){
 		header("location:pgowner.php");

 	}
 	
 	else{
 		$msg= $email;
         //$user=$userType;
 	}
 
}
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
	body{
		background-image: url("images/log.jpeg");
	}
</style>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 bg-light mt-5 px-0">
				<h3 class="test-center text-light bg-danger p-3">Login</h3>
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">
					<div class="form-group">
						<input type="text" name="email" class="form-control form-control-lg" placeholder="Email" required>
						
					</div>

					<div class="form-group">
						<input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
					</div>

					<div class="form-group">
						<label for="userType">I'm a :</label>
							<input type="radio" name="userType" value="user" class="custom-radio" required> User |
							<input type="radio" name="userType" value="admin" class="custom-radio" required> Admin |
							<input type="radio" name="userType" value="tenant" class="custom-radio" required> PGowner
                      </div>
                      <span>Not a member?<a href="signup.php" class="si" style="text-decoration:none;color:red;">Signup now</a></span>
                      <div class="form-group">
                      	<input type="submit" name="login" class="btn btn-danger btn-block">
                      </div>
                    <h5 class="text-danger text-center"> <?= $msg; ?></h5> 
				</form>
			</div>
		</div>
	</div>

</body>
</html>