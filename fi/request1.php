<?php
//require 'tenant.php';
 session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
	header("location:loginnisha.php");
}
 $conn =  new mysqli("localhost","root","","pgms");
if(isset($_POST['submit'])){
    $email=$_SESSION['email'];
	$pgname=$_POST['pgname'];
	$pglocation=$_POST['pglocation'];
	$pgaddress=$_POST['pgaddress'];
	$seater=$_POST['seater'];
	$rent=$_POST['rent'];
	$gender=$_POST['gender'];
	$food=$_POST['food'];
	$ac=$_POST['ac'];

	$cooler=$_POST['cooler'];
	$contact=$_POST['contact'];
	
	if($ac="1")
	{
		$ac="AVAILABLE";
	}else{
    $ac="NOT AVAILABLE";
  }
  if($gender="1")
  {
    $gender="MALE";
  }else if($gender="2")
    $gender="FEMALE";
  }
  else{
    $gender="BOTH";
  }
	
if($seater="4")
  {
    $seater=4;
  }
  else if($seater="3")
    $seater=3;
  }
  else if($seater="2"){
    $seater=2;
  }
  else{
    $seater=1;
  }


	
	if($cooler="1")
	{
		$cooler="AVAILABLE";
	}
  else{
    $cooler="NOT AVAILABLE";
  }

  if($food="1")
  {
    $food="AVAILABLE";
  }
  else{
    $food="NOT AVAILABLE";
  }
	//$f="";
	$file=$_FILES['file'];
	$file_name=$_FILES['file']['name'];
	$file_type=$_FILES['file']['type'];
	$file_size=$_FILES['file']['size'];
	$file_tem_loc=$_FILES['file']['tmp_name'];
	$file_store="../image/".$file_name;
	//$f="fi/images".$file_name;
	move_uploaded_file($file_tem_loc,$file_store);

   //echo $file_store;
   //  $fil=basename($file_name);
	$status=0;
	
	$sql = "INSERT INTO  pgowner(email,status,pg_name,address,pg_location,seater,gender,food,ac,cooler,rent,contact,image)  VALUES('".$email."','".$status."','".$pgname."','".$pgaddress."','".$pglocation."','".$seater."','".$gender."','".$food."','".$ac."','".$cooler."','".$rent."','".$contact."','".$filestore."')";
 	mysqli_query($conn,$sql);

  
 	 echo "<script>alert('wait for the approval.....')</script>";



}

?>