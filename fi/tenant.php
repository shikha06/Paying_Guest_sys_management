<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
	header("location:loginnisha.php");
}
if(isset($_POST['submit'])){
  	header("location:request.php");
  } 
  if(isset($_POST['submit3'])){
  	header("location:status.php");
  } 

  
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}


.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}



.f1 {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border:none;
   background-color: #111;
   border-bottom: 1px solid #818181;
   width:156px;

}

.f1:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .f1 {font-size: 18px;}
}


</style>
</head>

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <div class="sidebar">
     <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
  	    <input type="submit" name="submit" value="Request" class="f1">
  	</form>
  	 <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
  	    <input type="submit" name="submit1" value="Delete" class="f1">
  	</form>
  	 <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
  	    <input type="submit" name="submit2" value="Update Profile" class="f1">
  	</form>
  	 <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
  	    <input type="submit" name="submit3" value="Status" class="f1">
  	</form>
  	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
  	    <input type="submit" name="submit4" value="Logout" class="f1">
  	</form>
  	
  
</div>

   
	


</body>




</html> 
