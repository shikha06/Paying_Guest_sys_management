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
						<input type="email" name="email" class="form-control form-control-lg" value="<?= $email; ?>" required>
					</div>

                      <div class="form-group">
						<input type="text" name="name" class="form-control form-control-lg" value="<?= $name; ?>" required>
					  </div>

					  
                      

                      <div class="form-group">
						<input type="text" name="address" class="form-control form-control-lg" value="<?= $address; ?>" required>
					  </div>
					  <div class="form-group">
						<input type="number" name="contact" class="form-control form-control-lg" value="<?= $contact; ?>" required>
					</div>
					 
					
					

                      <div class="form-group">
                      	<input type="submit" name="edit" class="btn btn-danger btn-block">
                      </div>
                    <h5 class="text-danger text-center"> <?= $msg; ?></h5>
				</form>
			</div>
		</div>
	</div>

</body>
</html>