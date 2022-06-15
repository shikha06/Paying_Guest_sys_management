<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
  header("location:loginnisha.php");
}
 $conn =  new mysqli("localhost","root","","pgms");
 
 $result=$_POST["query"];
 $rent=$_POST["rent"];
 $seater=$_POST["seater"];
 $cooler=$_POST["cooler"];
 $ac=$_POST["ac"];
 $food=$_POST["food"];
 $gender=$_POST["gender"];
  
  $email=$_SESSION['email'];

  $sql="SELECT * FROM pgowner WHERE email='$email' AND pg_name='$result'";
  $task=mysqli_query($conn,$sql);
  
  if(mysqli_num_rows($task)==1)
  {
      
        $sql="UPDATE pgowner SET rent='$rent',seater='$seater',cooler='$cooler',ac='$ac',food='$food',gender='$gender' WHERE email='$email' AND pg_name='$result' ";
          mysqli_query($conn,$sql);
        
         
     
    
  }
  