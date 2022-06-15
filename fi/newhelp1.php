<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
  header("location:loginnisha.php");
}
 $conn =  new mysqli("localhost","root","","pgms");
$output="";

$result=mysqli_real_escape_string($conn,$_POST["query"]);
if(isset($result)){
 
 $email=$_SESSION["email"];
 
 
 //$result="closed";
 
 $sql="SELECT * FROM help WHERE status='$result' AND email='$email' ORDER BY id DESC";
  $task=mysqli_query($conn,$sql);
  //$row=mysqli_fetch_array($task);
  $output.='<div class="container">';

	if(mysqli_num_rows($task)>0){ 
		$output.='
	            <div class="row">
				<div class="col-md-offset-2 col-md-7">
	 			<div class="well">';
while($row=mysqli_fetch_array($task)) { 
	        
	 			$output.='
	 			<p><strong>DESCRIPTION: </strong> '.$row["text1"].' </p>
	 			<p><strong>Reply: </strong> '.$row["reply"].' </p>
	 			 	<hr/>';

     
      	         
      	      }
            echo $output;
            $output.='</div></div></div>';
      	          
         
     
} 
$output.='</div>';

} ?>
