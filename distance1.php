
<?php 

//index.php
error_reporting(0);
include('database_connection.php');

?>

<?php
session_start();
$r =0;
if(isset($_SESSION["email"]))
{
  $r =1;
}
else
header("location:fi/loginnisha.php");
?>



<html>
<head>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>distance</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/boot.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyADMy5tYPTP20UzlIaDuBRPbIjU0Q3WCx8&libraries=places&callbackinitAutocomplete" type="text/javascript"></script>
</head>


  
<style>

body
{
  background-image: url('image/img6.gif');
  background-repeat: no-repeat;
  background-size: 1370px 1000px;
}

.jumbotron {
    background-color: black;
    color: #fff;
    padding: 60px 25px;
    font-family: Montserrat, sans-serif;
  }
footer{
  background-color: black;
  height: 200px;
  color: #fff;
}


h2{
  text-shadow:2px 1px red; 
  letter-spacing: 4px;
}



</style>



</head>
<body >
<div class="container">
  
        <div class="row">
        <div class="col-md-1">
        </div>
         <div class="col-md-10" style="background-color: lavenderblush; margin-top: 20px;">
           <?php if($r ==1 ){
          echo "<h3 style='text-transform:uppercase; text-shadow:2px 1px 3px black; letter-spacing: 2px; text-align: right;'>HEY!!! "."<i><a href='user1.php' style='color: black;'>".$_SESSION["email"]."</a></i>"."</h3>";}
         ?>
        
            
            <h2 style="color: white; font-family:Tahoma, Geneva, sans-serif; letter-spacing: 2px; background-color: black; text-align: center; opacity: 0.7; border-radius: 10px;">
        Get Distance & Time</h2 >
        
        <form method = "post"> 
         
            <select name="fromplace" style="padding: 5px; width: 50%; border-radius: 6px; border-color: gray;">   
                <option value = "lpu" >LPU</option> 
                
            </select> 
               <select name = "toplace"style="padding: 5px; width: 50%; border-radius: 6px; border-color: gray;"> 
               <option value = "SELECT ANY">SELECT ANY</option>   
                <option value = "HOSHIARPUR">HOSHIARPUR</option> 
                <option value = "LAWGATE">LAWGATE</option> 
                <option value = "PHAGWARA">PHAGWARA</option> 
                <option value = "CHAHERU">CHAHERU</option> 
                <option value = "MAHERU">MAHERU</option> 
            </select> 
            

         <input type="submit" value="FIND" name="btn" title="click" style="padding: 5px; border-radius: 6px; border-color: gray; width: 20%;" id="but">
     
        </form> 
        <?php
        if(isset($_POST['btn']))
        {
        
        $q.= "
           SELECT * FROM pg WHERE place LIKE '%".$_POST['toplace']."%'
        ";
          
         $statement = $connect->prepare($q);
         $statement->execute();
         $result = $statement->fetchAll();
         $total_row = $statement->rowCount();
         if($total_row > 0)
      {
        foreach($result as $row)
        {
          $output.= 
          '<div class="col-sm-4 col-lg-3 col-md-3">
                 <div style="border:2px solid white; border-radius:10px; padding:16px; margin-bottom:16px; height:300px; width: 200px; background-color: lavender;">
                     
                   <h4 align="center" style="color: white; font-family: Georgia, serif; background-color:black; border-radius: 20px;"><strong>' .$row['pg_name'].'</strong></h4>
                   <p style="color: black; text-align:center;" >
                      <b>DISTANCE</b> <h5 style="text-align:center; font-family:fantasy"; class="text-danger"> '.$row['distance'].' &nbsp;M/KM from LPU</h5></p>
                     <p style="color: black; text-align:center;" > <b>TIME TAKEN TO REACH BY WALK</b> <h5 style="text-align:center; font-family:fantasy"; class="text-danger">'.$row['walktime'].' MINUTES </h5></p>
                     <p style="color: black; text-align:center;" > <b>TIME TAKEN TO REACH BY VEHICLE</b> <h5 style="text-align:center; font-family:fantasy"; class="text-danger">'.$row['vehicletime'].' MINUTES</h5></p>.<br>
                    
                   
                 </div>
          </div>';
        }
        echo $output;
      }
      else
      {
        $output = '<h3 style="color: black; font-family: fantasy;">No data Found </h3>';

      }
      

    }

    ?>
</form>
</div>
<div class="col-md-1">
</div> </div>


</div></body></html>