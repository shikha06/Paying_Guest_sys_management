<?php
session_start();
$_SESSION['email']='pamu6789@gmail.com'; 
$_SESSION['role']= "admin";
  
 $conn =  new mysqli("localhost","root","","pgms");
 $output='';

	$sql="SELECT * FROM user";
	$result=mysqli_query($conn,$sql);

	 if(mysqli_num_rows($result)>0)
  {

    $output.='<div align="center" class="table-responsive">
          <table class="table table bordered">
        <tr>
           <th>EMAIL</th>
            <th>USER TYPE</th>
            <th>CONTACT</th>
            
        </tr>';
        while($row=mysqli_fetch_array($result)){
        $output.='
        <tr>
           <td>'.$row["email"].'</td>
            <td>'.$row["user_type"].'</td>
            <td>'.$row["contact"].'</td>
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

