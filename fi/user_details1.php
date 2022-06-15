<?php
session_start();
$_SESSION['email']='pamu6789@gmail.com'; 
$_SESSION['role']= "tenant";
  
 $conn =  new mysqli("localhost","root","","pgms");
 $output='';

if(isset($_POST["submit"])){
	$sql="SELECT * FROM pgowner";
	$result=mysql_query($sql,$conn);
	 if(mysqli_num_rows($result)>0)
  {

    $output.='<div align="center" class="table-responsive">
          <table class="table table bordered">
        <tr>
           <th>EMAIL</th>
            <th>PG NAME</th>
            <th>NAME</th>
            
        </tr>';
        while($row=mysqli_fetch_array($result)){
        $output.='
        <tr>
           <td>'.$row["$email"].'</td>
            <td>'.$row["pg_name"].'</td>
            <td>'.$row["name"].'</td>
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
}
?>
