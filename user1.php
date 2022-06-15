<?php
session_start();
$r =0;
if(isset($_SESSION["email"]) AND $_SESSION['role'] = "user")
{
  $r=1;
}
else
header("location:fi/loginnisha.php");
?>

<?php 

//index.php
error_reporting(0);
include('database_connection.php');
$f=0;
if (isset($_POST['search'])) 
{
  require "fetch_data.php";
}
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

    <title>USER</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/boot.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBXKG2dp-gb9BqGTh5q3AlCtyHvrh_W6Dc&libraries=places&callbackinitAutocomplete" type="text/javascript"></script>
</head>


  
<style>
  
  body{
    background-image: url('image');
  }


  #loading{
    text-align: center;
    height: 150px;
  }

  .navbar {
    border-color: black;
    background: black;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;

    font-family: Lato, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
     background: black;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: black !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }

.jumbotron {
    background-image: url('image/img1.gif');
    color: #fff;
    padding: 60px 25px;
    font-family: Montserrat, sans-serif;
  }
footer{
  background-image: url('image/img.gif');
  height: 200px;
  color: #fff;
}


h2{
  text-shadow:2px 1px red; 
  letter-spacing: 4px;
}

#sear:focus{
background-color: white;


}
#sear:hover{
  background-color: gray;


}

#but:hover{
  background-color: gray;

}

</style>



</head>
<body >


<nav class="navbar navbar-default navbar-fixed-top" >
  <div class="container">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home3.php"><img src="image/logo1.jpg" style="height: 70px; width: 70px; border-radius: 50%;" title="home"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
        
         <li><a href="logout.php">LOGOUT</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1 style=" text-shadow:2px 1px 2px brown; letter-spacing: 2px;">PGMS</h1> 
  <p style=" text-shadow:2px 1px  2px brown; letter-spacing: 4px;">We are here to make your life easy</p>
         </div>
      <?php if($r ==1 ){
          echo "<h3 style='text-transform:uppercase; text-shadow:2px 1px 2px black; color:black; letter-spacing: 2px; text-align: center;'>WELCOME!! "."<i>".$_SESSION["email"]."</i>"." </h3>";}
         ?>
       <h2 align="center" style="color: white; font-family:Tahoma, Geneva, sans-serif; background-image: url('image/img4.gif');  margin-left: 20px; margin-right: 20px; border-radius: 10px;"> FEATURE LISTING</h2>
   <br>
 
 <div class="container">
  
        <div class="row">
        <div class="col-md-12">
          <h2 style="color: black; font-family:Tahoma, Geneva, sans-serif;  letter-spacing: 2px; background-image: url('image/img.gif'); text-align: center; opacity: 0.5; border-radius: 10px;"><a href="distance1.php" style="text-decoration: none; color: white; text-shadow:2px 1px red; ">CLICK TO GET TIME AND DISTANCE</a></h2>
          <form method="post" >
        <h3 style="color: white; font-family:Tahoma, Geneva, sans-serif;  background-image: url('image/img4.gif'); text-shadow: 2px 2px 2px red; opacity: 0.8; text-align: center; border-radius: 15px;">
        SEARCH FOR PGs
        </h3>
        <input type="text" name="search" placeholder="ENTER PG NAME" title="pg name" id="sear" style="padding: 5px; width: 92%; border-radius: 6px; border-color: gray;">
        <input type="submit" value="SEARCH" name="btn" title="click" style="padding: 5px; border-radius: 6px; border-color: gray;" id="but"><br>
        <?php
        if($f==1)
        {
        
        $q.= "
           SELECT * FROM pg WHERE pg_name LIKE '%".$_POST['search']."%'
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
                 <div style="border:1px solid gray; border-radius:10px; padding:16px; margin-bottom:16px; height:540px; width: 210px;">
                     <img src="image/'. $row['pimage'].'" alt="" class="img-responsive" style="height: 200px; width: 200px; box-shadow: 2px 2px 2px black;">
                   <p align="center" style="color: black; font-family: Georgia, serif;"><strong>' .$row['pg_name'].'</strong></p>
                   <h4 style="text-align:center;" class="text-danger">'.$row['rent'].' per month</h4>
                   <p style="color: black;" >
                      <b>ADDRESS</b> '.$row['address'].'<hr>
                      <b>CONTACT NO</b> '.$row['contact'].'<br>
                      <b>FOOD IS </b> '.$row['food'].'<br>
                      <b>COOLER IS </b> '.$row['cooler'].'<br>
                      <b>ACCOMODATION FOR</b> ' .$row['accomodation'].'<br>
                      '.$row['seater']. '  <b>seater is available</b> 
                   </p>
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
</form></div> </div>
    <div class="row">
  <div class="col-md-3">
       


         <div class="list-group">
          <h3 style="color: white; border-radius: 5px; text-align: center; font-family:Tahoma, Geneva, sans-serif; text-shadow:2px 1px red; letter-spacing: 2px; background-image: url('image/img.gif'); opacity: 0.8; ">RENT in ₹</h3>
            <?php
            $query = "SELECT DISTINCT(rent) FROM pg WHERE pg_status = '0' ORDER BY rent ASC";

            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
            ?>
            <div class="list-group-item checkbox" style="border-radius: 10px; border-color: gray;">
              <label>
                <input type="checkbox" class="common_selector rent"  value="<?php echo $row['rent']; ?>" > <?php echo $row['rent']; ?>
              </label>
            </div>
            <?php
            }

            ?>
          </div>




         <div class="list-group">
          <h3 style="color: white; border-radius: 5px; text-align: center; font-family:Tahoma, Geneva, sans-serif; text-shadow:2px 1px red; letter-spacing: 2px; background-image: url('image/img.gif'); opacity: 0.8;">ACCOMODATION</h3>
            <?php
            $query = "SELECT DISTINCT(accomodation) FROM pg WHERE pg_status = '0' ORDER BY accomodation ASC";

            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
            ?>
            <div class="list-group-item checkbox" style="border-radius: 10px; border-color: gray;">
              <label>
                <input type="checkbox" class="common_selector accomo" value="<?php echo $row['accomodation']; ?>" > <?php echo $row['accomodation']; ?>
              </label>
            </div>
            <?php
            }

            ?>
          </div>


          <div class="list-group">
          <h3 style="color: white; border-radius: 5px; text-align: center; font-family:Tahoma, Geneva, sans-serif; text-shadow:2px 1px red; letter-spacing: 2px; opacity: 0.8; background-image: url('image/img.gif');">SEATER</h3>
            <?php
            $query = "SELECT DISTINCT(seater) FROM pg WHERE pg_status = '0' ORDER BY seater ASC";

            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
            ?>
            <div class="list-group-item checkbox" style="border-radius: 10px; border-color: gray;">
              <label>
                <input type="checkbox" class="common_selector seater" value="<?php echo $row['seater']; ?>" > <?php echo $row['seater']; ?>
              </label>
            </div>
            <?php
            }

            ?>
          </div>
           <div class="list-group">
          <h3 style="color: white; border-radius: 5px; text-align: center; font-family:Tahoma, Geneva, sans-serif; text-shadow:2px 1px red; letter-spacing: 2px; background-image: url('image/img.gif'); opacity: 0.8;">FOOD</h3>
            <?php
            $query = "SELECT DISTINCT(food) FROM pg WHERE pg_status = '0' ORDER BY food ASC";

            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
            ?>
            <div class="list-group-item checkbox" style="border-radius: 10px; border-color: gray;">
              <label>
                <input type="checkbox" class="common_selector food" value="<?php echo $row['food']; ?>" > <?php echo $row['food']; ?>
              </label>
            </div>
            <?php
            }

            ?>
          </div>
           <div class="list-group">
          <h3 style="color: white; border-radius: 5px; text-align: center; font-family:Tahoma, Geneva, sans-serif; text-shadow:2px 1px red; letter-spacing: 2px;background-image: url('image/img.gif'); opacity: 0.8;">COOLER</h3>
            <?php
            $query = "SELECT DISTINCT(cooler) FROM pg WHERE pg_status = '0' ORDER BY cooler ASC";

            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
            ?>
            <div class="list-group-item checkbox" style="border-radius: 10px; border-color: gray;">
              <label>
                <input type="checkbox" class="common_selector cooler" value="<?php echo $row['cooler']; ?>" > <?php echo $row['cooler']; ?>
              </label>
            </div>
            <?php
            }

            ?>
          </div>
           <div class="list-group">
          <h3 style="color: white; border-radius: 5px; text-align: center; font-family:Tahoma, Geneva, sans-serif; text-shadow:2px 1px red; letter-spacing: 2px; background-image: url('image/img.gif'); opacity: 0.8;">AC/NON-AC</h3>
            <?php
            $query = "SELECT DISTINCT(ac) FROM pg WHERE pg_status = '0' ORDER BY ac ASC";

            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
            ?>
            <div class="list-group-item checkbox" style="border-radius: 10px; border-color: gray;">
              <label>
                <input type="checkbox" class="common_selector ac" value="<?php echo $row['ac']; ?>" > <?php echo $row['ac']; ?>
              </label>
            </div>
            <?php
            }

            ?>
          </div>
           <div class="list-group">
          <h3 style="color: white; border-radius: 5px; text-align: center; font-family:Tahoma, Geneva, sans-serif; text-shadow:2px 1px red; letter-spacing: 2px; opacity: 0.8;background-image: url('image/img.gif');">PLACE</h3>
            <?php
            $query = "SELECT DISTINCT(place) FROM pg WHERE pg_status = '0' ORDER BY place ASC";

            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
            ?>
            <div class="list-group-item checkbox" style="border-radius: 10px; border-color: gray;">
              <label>
                <input type="checkbox" class="common_selector place" value="<?php echo $row['place']; ?>" > <?php echo $row['place']; ?>
              </label>
            </div>
            <?php
            }
            ?>
          </div></div>

          <div class="col-md-9">
            <br/>
            <div class="row filter_data">

            </div>

          </div>           


          


       </div>



  </div>
 </div>
 
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
          <div class="container text-center">
             <h4>About Us</h4><br>
                <p>PGMS has been created keeping in mind about the students who come from different places to study in the Lovely Professional University</p>
                <p>PGMS Help You to Find PG, Hostels, Apartments & much more with Suitable Accommodation.  </p>
          </div> </footer>
  




    <script>
  $(document).ready(function(){
    filter_data();
    
    function filter_data()
    {
       $('.filter_data').html('<div id="loading" style ="" ></div>');
       var action = 'fetch_data';
       
        var rent = get_filter('rent');
       var accomodation = get_filter('accomodation');
       var seater = get_filter('seater');
       var food = get_filter('food');
       var cooler = get_filter('cooler');
       var ac = get_filter('ac');
       var place = get_filter('place');
       $.ajax({
        url:"fetch_data.php",
        method:"POST",
        data:{action:action,rent:rent,accomodation:accomodation,seater:seater,food:food,cooler:cooler,ac:ac,place:place},
        success:function(data){
           $('.filter_data').html(data);
        }
       });
    }

    function get_filter(class_name)
    {
      var filter = [];
      $('.'+class_name+':checked').each(function(){
           filter.push($(this).val());
      });
      return filter;
    }

    $('.common_selector').click(function(){
       filter_data();

    });

    
     
});
  </script>
    


  

</body>
</html>
