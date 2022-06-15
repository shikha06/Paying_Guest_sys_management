

<?php
session_start();
$_SESSION['email']='pamu6789@gmail.com'; 
$_SESSION['role']= "admin";
  
 $conn =  new mysqli("localhost","root","","pgms");
 $output='';

	$sql="SELECT * FROM pgowner where status=0";
	$result=mysqli_query($conn,$sql);

	 if(mysqli_num_rows($result)>0)
  {
     echo '<br>';
    $output.='<div align="center" class="table-responsive">
          <table class="table table bordered">
        <tr>
           <th>EMAIL</th>
            
            <th>PGNAME</th>
            <th>STATUS</th>
            
            
        </tr>';
        while($row=mysqli_fetch_array($result)){
        	$ans='NOT-APPROVED';
        	if($row["status"]==1){
              $ans="APPROVED";
        	}
        $output.='
        <tr>
           <td>'.$row["email"].'</td>
           
            <td>'.$row["pg_name"].'</td>
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

