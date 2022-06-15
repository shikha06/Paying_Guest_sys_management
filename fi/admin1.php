<?php
session_start();


if(!isset($_SESSION['email']) || $_SESSION['role'] != "admin"){
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
  <h1><i id="user_details" class="fa fa-fw fa-envelope">user details</i></h1>
   <h1><i id="list" class="fa fa-fw fa-user">Approve Pgms</i></h1>
   <h1><i id="help" class="fa fa-fw fa-user">Help Status</i></h1>

   <h1><i id="logout" class="fa fa-fw fa-envelope">logout</i></h1>
</div>

<div id="myApp" class="main">
  <h1>Welcome <?= $email; ?> to Paying Guest System</h1>
</div>

<div id="myApp1" class="main" style="display:none;">
  <br>
<input type="text" id="text1" name="name" class="form-control" placeholder="Write Pg Name to approve" required><br>
<center><button id="sub" class="btn btn-success">Approve</button></center><br>
</div>

<br>
<div id="myApp2" class="main"></div>


<div id="myApp3" class="main" style="display:none;">
  <input type="text" id="text2" name="name1" class="form-control" placeholder="email id to reply to" required><br>
  <input type="number" id="text3" name="name2" class="form-control" placeholder="id to reply to" required><br>
  <textarea style="height:39%;width:48%;" id="tarea" name="text4"></textarea><br>
  <button id="sub1" class="btn btn-success">reply</button><br>
</div>
 
<script>
   $(document).ready(function(){
 $('#user_details').click(function(){

            
       $('#myApp3').hide();
         $('#myApp').hide();
         $('#myApp1').hide();
            $('#myApp2').load("user_details.php");
            
       
        });


$('#list').click(function(){

       $('#myApp').hide();
       $('#myApp3').hide();
         $('#myApp1').show();
    $('#myApp2').load("approve.php");
    var query='';
    $('#sub').click(function(){
      query=$('#text1').val();
     $.ajax({
                url:"approve1.php",
                method:"post",
                data:{query:query},
                dataType:"text",
                success:function(data)
                {   
                    $('#myApp2').html(data);
                }
            });

        });
    });

$('#help').click(function(){
              $('#myApp').hide();
               $('#myApp1').hide();
            

            $('#myApp2').load("newhelpstatus.php");
           
       
        });
$('#logout').click(function(){
  window.location='logout1.php';
 });



 });
</script>



</body>
</html>