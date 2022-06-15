<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
  header("location:loginnisha.php");
}
$email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBXKG2dp-gb9BqGTh5q3AlCtyHvrh_W6Dc&libraries=places&callbackinitAutocomplete" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}


.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}


.sidebar h1 {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar h1:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar h1 {font-size: 18px;}
}


</style>
</head>

<body >
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
  <div class="sidebar">
  <h1><i id="request" class="fa fa-fw fa-envelope">Request</i></h1>
   <h1><i id="list" class="fa fa-fw fa-user">List</i></h1>
   <h1><i id="help" class="fa fa-fw fa-user">help</i></h1>
  <h1><i id="delete" class="fa fa-fw fa-user">Delete</i></h1>
   <h1><i id="logout" class="fa fa-fw fa-envelope">logout</i></h1>
</div>

<div id="myApp" class="main">
  <h1>Welcome <?= $email; ?> to Paying Guest System</h1>
</div>

<script>
 $(document).ready(function(){
 $('#delete').click(function(){
        
            $.ajax({
                 url:"delete.php",
                method:"post",
              
              
                success:function(data)
                {   $('#myApp').load("newdelete.php");
                    
                    
                }
            });
       
        });
 $('#request').click(function(){
        
            $.ajax({
                 url:"request.php",
                method:"post",
              
              
                success:function(data)
                {   $('#myApp').load("request.php");
                    
                    
                }
            });
       
        });
  $('#list').click(function(){
        
            $.ajax({
                 url:"list1.php",
                method:"post",
              
              
                success:function(data)
                {   $('#myApp').load("list1.php");
                    
                    
                }
            });
       
        });
  $('#help').click(function(){
                
            $.ajax({
                 url:"newhelp.php",
                method:"post",
              
               
                success:function(data)
                {   $('#myApp').load("newhelp.php");
                    
                    
                }
            });
       
        });
  $('#logout').click(function(){
    window.location='logout1.php';
        });

  });
</script>

</body>




</html> 
