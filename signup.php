 <?php
// include 'function.php';
 require 'phpmailer1/PHPMailerAutoload.php';
session_start();
 $conn =  new mysqli("localhost","root","","pgms");

 $msg="";
 if(isset($_POST['signup'])){
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$email= $_POST['email'];
 	$contact= $_POST['contact'];
 	$password = sha1($password);
 	$userType = $_POST['userType'];
 	$address=$_POST['address'];
     
 	$sql = "SELECT * FROM user WHERE username='".$username."' AND email='".$email."'";
 	$stmt=$conn->prepare($sql);
 	
 	$stmt->execute();
 	$result = $stmt->get_result();
 	$row = $result->fetch_assoc();
 	session_regenerate_id();
 	if($row['username'] AND $row['email'] )
 	{
 		$msg="username or email is already exists";
 	}
 	elseif($row['contact']){
 		$msg="This contact already exists";
 	}
 	else{
 		$code =rand();
 		$status=0;
 	$sql = "INSERT INTO  user (username,password,user_type,email,contact,status,code,address) VALUES('".$username."','".$password."','".$userType."','".$email."','".$contact."','".$status."','".$code."','".$address."')";
 	$stmt=$conn->prepare($sql);
 	
 	
 	//send_code($code,$email);
 	$mail = new PHPMailer(true);
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();       
    $mail->Host = 'tls://smtp.gmail.com';                                     // Set mailer to use SMTP
    $mail->SMTPAuth=true;                                   // Enable SMTP authentication
    $mail->Username='nishakumari3199@gmail.com';                     // SMTP username
    $mail->Password='11602184N';                               // SMTP password
    $mail->SMTPSecure='tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port=587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nishakumari3199@gmail.com');
    $mail->addAddress($email);  
     $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
            )
       );
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject='Here is the subject';
    $mail->Body="Thank you for joining us Your Confirmation Code is :".$code;
    $mail->AltBody='This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
    
    $stmt->execute();
    header("location:fi/confirm.php");
      }
  else {
    $msg="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }
 	//header("location:loginnisha.php");
     

 	}

 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 bg-light mt-5 px-0">
				<h3 class="test-center text-light bg-danger p-3">Signup</h3>
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="p-4">
					<div class="form-group">
						<label for="userType">Signup As:</label>
							<input type="radio" name="userType" value="user" class="custom-radio" required> User |
							<input type="radio" name="userType" value="tenant" class="custom-radio" required> PGowner
                      </div>
                      <div class="form-group">
						<input type="text" name="name" class="form-control form-control-lg" placeholder="Name" required>
					  </div>

					  <div class="form-group">
						<label for="userType">Gender:</label>
							<input type="radio" name="gender" value="male" class="custom-radio" required> Male |
							<input type="radio" name="gender" value="female" class="custom-radio" required> Female
                      </div>
                        <div class="form-group">
						<input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required>
					  </div>

                      <div class="form-group">
						<input type="text" name="address" class="form-control form-control-lg" placeholder="Address" required>
					  </div>
					  <div class="form-group">
						<input type="number" name="contact" class="form-control form-control-lg" placeholder="Phone No" required>
					</div>
					 <div class="form-group">
						<input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
					</div>

					<div class="form-group">
						<input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
					</div>
					<div class="form-group">
						<input type="password" name="cpassword" class="form-control form-control-lg" placeholder="Confirm Password" required>
					</div>
					

                      <div class="form-group">
                      	<input type="submit" name="signup" class="btn btn-danger btn-block">
                      </div>
                    <h5 class="text-danger text-center"> <?= $msg; ?></h5>
				</form>
			</div>
		</div>
	</div>

</body>
</html>