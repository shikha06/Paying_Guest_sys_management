<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
  header("location:loginnisha.php");
}
 $conn =  new mysqli("localhost","root","","pgms");
 
$output='';
   
  $email=$_SESSION['email'];
  $sql="SELECT * FROM pgowner WHERE email='".$email."' AND pg_name='".$_POST["query"]."' ";
  $task=mysqli_query($conn,$sql);
  if(mysqli_num_rows($task)>0)
  {
    $output.='<h4 align="center">Search Result</h4>';
    $output.='<div align="center" class="table-responsive">
          <table class="table table bordered">
        <tr>
            <th>PG NAME</th>
            <th>PG LOCATION</th>
            <th>APPROVED/NOT-APPOROVED</th>
        </tr>';
        while($row=mysqli_fetch_array($task)){
        $ans="NOT-APPROVED";
        if($row["status"]==1){$ans="APPROVED";}
        $output.='
        <tr>
            <td>'.$row["pg_name"].'</td>
            <td>'.$row["pg_location"].'</td>
            <td>'.$ans.'</td>
        </tr>';

        }
echo $output;

$output.='</table>';
$output.='</div>';


  }
  else
  {
     echo '<h4 align="center">Search Result</h4>';
    echo '<h4 align="center">Data Not Found</h4>';
  
    
  }


  


?>