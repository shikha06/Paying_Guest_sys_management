<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
  header("location:loginnisha.php");
}
 $conn =  new mysqli("localhost","root","","pgms");

if(isset($_POST["submit"])){
 $query=$_POST["query"];
 $email=$_SESSION["email"];
 $status="open";

 

 $sql="INSERT INTO help(email,text1,status) VALUES('".$email."','".$query."','".$status."')";
 $stmt=$conn->prepare($sql);
  function function_alert($msg){
  echo "<script>alert('$msg');</script>";}
  if($stmt->execute()){
    function_alert("Successfully Saved");
    header("location:pgowner.php");
       }

}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body{
    margin-top:11px;
    margin-right:29px;


  }
  </style>  
  
</head>
<body>
<div class="row" style="margin-left:28%;margin-top:4%;">
  <div class="col-sm-6">
    <div class="form-group">

  <select class="selectpicker form-control" id="hell" data-width="69%">
    <option value="" disabled selected>Choose....</option>
  <option value="open">Open</option>
  <option value="closed">closed</option>
</select>
</div>
</div>
 </div>
     
     <div style="width:75%;margin-left:9%; margin-top:7%;" role="document">

      <div class="modal-content">

      <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
        
             
             <div class="modal-body">
                  
                     <div class="form-group shadow-textarea">
                    <label>DESCRIPTION</label>
                    <textarea class="form-control z-depth-1" rows="7" name="query" id="edit-form-seater" placeholder="Write Something Here......"></textarea>
                  </div>
                    
            </div>
             <div class="modal-footer">
           
             <input type="submit" class="btn btn-primary"  name="submit" value="Submit" />
             </div>
  </form>
   </div>
 </div>
 <br>
 <br>

 
 
  
    <div  id="myapp" style="margin-left:4%;">
      
    
</div>

<script>
  $(document).ready(function(){
    $('#hell').on('change',function(){
      var text1=$("#hell option:selected").text();
      if(text1!=''){
        
      $.ajax({
                 url:"newhelp1.php",
                method:"post",
                data:{query:text1},
                dataType:"text",
              
                success:function(data)
                {   
                  $('#myapp').html(data);
                    
                }
            });
    }
    });
  });
</script>
</body>
</html>
