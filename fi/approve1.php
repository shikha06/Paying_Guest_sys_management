<?php
session_start();

  
 $conn =  new mysqli("localhost","root","","pgms");
 $output='';
   $text=$_POST["query"];
   

   $a=0;
  $sql="SELECT * FROM pgowner WHERE pg_name='".$text."' ";

  $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($result);

   //INSERT INTO xx_BLOB(ID,IMAGE) VALUES(1,LOAD_FILE('C:\xamppp\htdocs\pgms\image\IMG-20180404-WA0014.jpg')); C:\xamppp\htdocs\pgms\image\IMG-20180404-WA0014.jpg
                
	 if($row["status"]==0){
	 $sql="UPDATE pgowner SET status=1 WHERE pg_name='".$text."' ";
	mysqli_query($conn,$sql);

}
  


   
   $sql="SELECT * FROM pgowner WHERE pg_name='".$text."' ";
 

  $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($result);
   $email=$row['email'];
    $cooler=$row['cooler'];
   $ac=$row['ac'];
   $address=$row['address'];
   $contact=$row['contact'];
   $food=$row['food'];
   $gender=$row['gender'];
   $pg_location=$row['pg_location'];
   $pg_name=$row['pg_name'];
   $rent=$row['rent'];
   $seater=$row['seater'];
   $image=$row['image'];
   
   $status = 0;

   
   $sql = "INSERT INTO  pg(pg_status,pg_name,address,place,seater,accomodation,food,ac,cooler,rent,contact,pimage)  VALUES('".$status."','".$pg_name."','".$address."','".$pg_location."','".$seater."','".$gender."','".$food."','".$ac."','".$cooler."','".$rent."','".$contact."','".$image."') ";
  mysqli_query($conn,$sql);
  
  

  $sql="UPDATE pg SET pg_status=0 ";
  mysqli_query($conn,$sql);
  




	$sql1="SELECT * FROM pgowner";

	$result=mysqli_query($conn,$sql1);

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
