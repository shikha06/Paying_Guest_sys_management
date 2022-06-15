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
    $gender="male";
  }else if($gender="2"){
    $gender="female";
  
  }
  else{
    $gender="both";
  }
  
if($seater="4")
  {
    $seater=4;
  }
  else if($seater="3"){
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
  $file_store="../image/".basename($file_name);
  //$f="fi/images".$file_name;

  $imagetype=strtolower(pathinfo($file_store,PATHINFO_EXTENSION));
  $extension_arr=array("jpg","jpeg","png");
  if(in_array($imagetype,$extension_arr)){

  $status=0;
  
  $sql = "INSERT INTO  pgowner(email,status,pg_name,address,pg_location,seater,gender,food,ac,cooler,rent,contact,image)  VALUES('".$email."','".$status."','".$pgname."','".$pgaddress."','".$pglocation."','".$seater."','".$gender."','".$food."','".$ac."','".$cooler."','".$rent."','".$contact."','".$file_name."')";
  mysqli_query($conn,$sql);

  
   echo "<script>alert('wait for the approval.....')</script>";
 header("location:pgowner.php");

  move_uploaded_file($file_tem_loc,$file_store);
   //$image=file_get_contents($file_tem_loc);
      //echo $file_store;
 }else{
  $status=0;
  $file_name="no.png";
  
  $sql = "INSERT INTO  pgowner(email,status,pg_name,address,pg_location,seater,gender,food,ac,cooler,rent,contact,image)  VALUES('".$email."','".$status."','".$pgname."','".$pgaddress."','".$pglocation."','".$seater."','".$gender."','".$food."','".$ac."','".$cooler."','".$rent."','".$contact."','".$file_name."')";
  mysqli_query($conn,$sql);

  
   echo "<script>alert('wait for the approval.....')</script>";
 header("location:pgowner.php");

  move_uploaded_file($file_tem_loc,$file_store);

 }

  

}

?>



<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="../css/owner1.css">

<style>
    #defaultRegisterFormEmail:focus{
      text-transform: uppercase;
    font-style: italic;
   -moz-transform: translate(0, -35px) scale(1);
   -ms-transform: translate(0, -35px) scale(1);
   -webkit-transform: translate(0, -35px) scale(1);
    transform: translate(0, -15px) scale(1);
    }

     #defaultRegisterFormEmail:focus{
   border-color: #d9534f;
   border-radius: 10px;
    }

</style>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
             <div class="col-md-8">
<form class="border border-light p-5" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

    <div class="foo"><span class="letter" data-letter="REGISTER PG">REGISTER PG</span></div>

     <input type="text" id="PGName" name="pgname" class="form-control" placeholder="ENTER PG NAME" ><br>

    <input type="text" id="location" name="pglocation" class="form-control" placeholder="ENTER LOCATION"><br>

    <textarea id="defaultRegisterFormEmail" name="pgaddress" class="form-control mb-4" placeholder="Enter Address">Address</textarea>
    <select class="browser-default custom-select mb-4" id="select" name="gender">
        <option value="" disabled="" selected="">Choose Gender</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Both</option>
    </select>
    

    <div class="custom-control custom-radio mb-4">
        <input type="radio" class="custom-control-input" id="checkbox1" value="1" name="seater" checked>
            <label class="custom-control-label" for="checkbox1"  >One Seater</label>
        </div>
       <div class="custom-control custom-radio mb-4">
        <input type="radio" class="custom-control-input" id="checkbox2" value="2" name="seater">
            <label class="custom-control-label" for="checkbox2">Two Seater</label></div>
       <div class="custom-control custom-radio mb-4">
        <input type="radio" class="custom-control-input" id="checkbox3" value="3" name="seater">
            <label class="custom-control-label" for="checkbox3">Three Seater</label></div> 
       <div class="custom-control custom-radio mb-4">
        <input type="radio" class="custom-control-input" id="checkbox4" value="4" name="seater">
            <label class="custom-control-label" for="checkbox4">Four Seater</label>
    </div>

    <select class="browser-default custom-select mb-4" id="select" name="food">
        <option value="" disabled="" selected="">Mess</option>
        <option value="1">Available</option>
        <option value="2">Not Available</option>
    </select>

    <select class="browser-default custom-select mb-4" id="select" name="ac">
        <option value="" disabled="" selected="">AC</option>
        <option value="1">Available</option>
        <option value="2">Not Available</option>
    </select>
       <select class="browser-default custom-select mb-4" id="select" name="cooler">
        <option value="" disabled="" selected="">COOLER</option>
        <option value="1">Available</option>
        <option value="2">Not Available</option>
    </select>
 
    <input type="text" id="rent" class="form-control" name="rent"placeholder="ENTER RENT/MONTH"><br>
   <input type="text"  class="form-control" name="contact"placeholder="ENTER CONTACT NUMBER"><br>
   <div class="input-group mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text">ADD IMAGE</span>
        </div>
        <div class="custom-file">
            <input type="file" name="file" >
          
        </div>
    </div>
  

    

    

    <button class="btn btn-danger my-4 btn-block" type="submit" name="submit">SUBMIT</button>

   
</form></div>
 <div class="col-md-2"></div></div></div>
</body>
<script>
  
  </script>
</html>