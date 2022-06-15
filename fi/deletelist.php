<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
  header("location:loginnisha.php");
}
 $conn =  new mysqli("localhost","root","","pgms");
 
 $request=mysqli_real_escape_string($conn,$_POST["query"]);

   
  $email=$_SESSION['email'];
  $sql="SELECT * FROM pgowner WHERE email='".$email."' AND pg_name LIKE '%".$request."%'";
  $task=mysqli_query($conn,$sql);
  $data= array();
  if(mysqli_num_rows($task)>0)
  {
    
        while($row=mysqli_fetch_array($task)){
      
       
        $data[]=$row["pg_name"];
        
        }
    echo json_encode($data);
  }
  

 




?>
