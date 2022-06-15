<?php

error_reporting(0);
//fetch_data.php
include('database_connection.php');

if(isset($_POST["action"]))
{
     $query = "
          SELECT * FROM pg WHERE pg_status = '0'
     ";
     
     if(isset($_POST["rent"]))
      {
      	$rent_filter = implode("','", $_POST["rent"]);
      	$query .= "
            AND rent IN('".$rent_filter."')
      	";
      }
     if(isset($_POST["accomodation"]))
      {
      	$accomodation_filter = implode("','", $_POST["accomodation"]);
      	$query .= "
            AND accomodation IN('".$accomodation_filter."')
      	";
      }

      if(isset($_POST["seater"]))
      {
      	$seater_filter = implode("','", $_POST["seater"]);
      	$query .= "
            AND seater IN('".$seater_filter."')
      	";
      }
       
      if(isset($_POST["food"]))
      {
      	$food_filter = implode("','", $_POST["food"]);
      	$query .= "
            AND food IN('".$food_filter."')
      	";
      }

      if(isset($_POST["cooler"]))
      {
      	$cooler_filter = implode("','", $_POST["cooler"]);
      	$query .= "
            AND cooler IN('".$cooler_filter."')
      	";
      }

      if(isset($_POST["ac"]))
      {
      	$ac_filter = implode("','", $_POST["ac"]);
      	$query .= "
            AND ac IN('".$ac_filter."')
      	";
      }

      if(isset($_POST["place"]))
      {
      	$place_filter = implode("','", $_POST["place"]);
      	$query .= "
            AND place IN('".$place_filter."')
      	";
      }
      
     
      $statement = $connect->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();
      $total_row = $statement->rowCount();
      if($total_row > 0)
      {
      	foreach($result as $row)
      	{
      		$output .= 
      		'<div class="col-sm-4 col-lg-3 col-md-3">
                 <div style="border:1px solid gray; border-radius:10px; padding:16px; margin-bottom:16px; height:590px; width: 210px; box-shadow: 2px 2px 2px 2px;">
                     <img src="image/'. $row['pimage'].'" alt="" class="img-thumbnail" id="img1" style="height: 200px; width: 200px; box-shadow: 2px 2px 2px black; border-radius: 5%; " title = '.$row['pg_name'].'>
                   <p align="center" style="color: black; font-family:Tahoma, Geneva, sans-serif ;"><strong>' .$row['pg_name'].'</strong></p>
                   <h4 style="text-align:center;" class="text-danger">'.$row['rent'].' per month</h4>
                   <p style="color: black; font-family:Tahoma, Geneva, sans-serif"  >
                      <b>ADDRESS:</b> '.$row['address'].'<hr>
                      <b>CONTACT NO</b> '.$row['contact'].'<br>
                      <b>FOOD IS </b> '.$row['food'].'<br>
                      <b>COOLER IS </b> '.$row['cooler'].'<br>
                      <b>AC IS </b> '.$row['ac'].'<br>
                      <b>ACCOMODATION FOR</b> ' .$row['accomodation'].'<br>
                      '.$row['seater']. ' <b>seater is available</b>
                   </p>
                 </div>
      		</div>';
      	}
      }
      else
      {
      	$output = '<h3 style="color: black; font-family: fantasy;">No data Found </h3>';

      }
      echo $output;

}


?>

<?php

if(isset($_POST["btn"]))
{

if(isset($_POST["search"]))
      {
        $f=1;
      }
}
?>
