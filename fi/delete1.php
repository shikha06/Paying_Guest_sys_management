<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
  header("location:loginnisha.php");
}
 $conn =  new mysqli("localhost","root","","pgms");
 
 $result=$_POST["query"];

  
  $email=$_SESSION['email'];

  $sql="SELECT * FROM pgowner WHERE email='".$email."' AND pg_name='".$result."'";
  $task=mysqli_query($conn,$sql);
  
  if(mysqli_num_rows($task)==1)
  {
      
        $sql="DELETE  FROM pgowner WHERE email='".$email."' AND pg_name='".$result."'";
          mysqli_query($conn,$sql);
        
         //$sql="DELETE  FROM pg_details WHERE pg_name='".$result."'";
         //mysqli_query($conn,$sql);
        
     
    
  }
  
  

 




?>
