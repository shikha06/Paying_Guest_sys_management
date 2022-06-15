<?php


session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
  header("location:loginnisha.php");
}
 $conn =  new mysqli("localhost","root","","pgms");
$email=$_SESSION['email'];
 $sql="SELECT * FROM pgowner WHERE email='".$email."' ";
  $task=mysqli_query($conn,$sql);
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
    margin-top:10px;

  }
  </style>  
  
  
</head>
<body>
<div class="container">
			<?php	if(mysqli_num_rows($task)>0){ ?>
<?php  while($row=mysqli_fetch_array($task)) { ?>
			<div class="row">
				<div class="col-md-offset-2 col-md-7">
	 			<div class="well">
         <h4><?php echo $row["pg_name"];  ?><button class="btn btn-default pull-right" data-toggle="collapse" href="#pg_<?php echo $row["id"]; ?>" aria-expanded="false" aria-controls="pg_<?php $row["id"] ?>"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true" ></span></button></h4>


      <div class="collapse" id="pg_<?php echo $row["id"]; ?>">
      	<br />
      	<br />
      	<p><strong>PG-LOCATION: </strong><?php echo $row["pg_location"]; ?></p>
      	<p><strong>RENT: </strong><?php echo $row["rent"]; ?></p>
        <p><strong>SEATER: </strong><?php echo $row["seater"]; ?></p>
        <p><strong>GENDER: </strong><?php echo $row["gender"]; ?></p>
        <p><strong>FOOD: </strong><?php echo $row["food"]; ?></p>
        <p><strong>COOLER: </strong><?php echo $row["cooler"]; ?></p>
        <p><strong>AC: </strong><?php echo $row["ac"]; ?></p>
        
      		
      	<br />
      	<hr />
      
      	<button class="btn btn-default edit-pg" data-toggle="modal" data-target="#editFormModal" data-id="<?php echo $row["id"]; ?>" data-name="<?php echo $row["pg_name"]; ?>" data-rent="<?php echo $row["rent"]; ?>" data-seater="<?php echo $row["seater"]; ?>" data-gender="<?php echo $row["gender"]; ?>"  data-food="<?php echo $row["food"]; ?>" data-cooler="<?php echo $row["cooler"]; ?>" data-ac="<?php echo $row["ac"]; ?>">
      		<span class="glyphicon glyphicon-edit" aria-hidden="true" ></span>
      	</button>
      	<button class="btn btn-danger delete-pg" data-name="<?php echo $row["pg_name"]; ?>">
      		<span class="glyphicon glyphicon-remove" aria-hidden="true" ></span>
      	</button>
      </div>



                       </div>
</div>
</div>
 

  <?php

}
} ?>

 </div>	




 <div class="modal fade" id="editFormModal" tabindex="-1" role="dialog" aria-labelledby="editFormModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
        <input type="hidden" id="edit-form-name" name="name" />
         <input type="hidden" id="edit-form-id" name="id" />
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="editFormModalLabel">UpdatePG</h4>
              </div>
             <div class="modal-body">
                  <div class="form-group">
                    <label>RENT</label>
                    <textarea class="form-control" name="rent" id="edit-form-rent" ></textarea>
                  </div>
                     <div class="form-group">
                    <label>SEATER</label>
                    <textarea class="form-control" name="seater" id="edit-form-seater" ></textarea>
                  </div>
                     <div class="form-group">
                    <label>GENDER</label>
                    <textarea class="form-control" name="gender" id="edit-form-gender"></textarea>
                  </div>
                  <div class="form-group">
                    <label>FOOD</label>
                    <textarea class="form-control" name="food" id="edit-form-food"></textarea>
                  </div>
                  <div class="form-group">
                    <label>COOLER</label>
                    <textarea class="form-control" name="cooler" id="edit-form-cooler"></textarea>
                  </div>
                  <div class="form-group">
                    <label>AC</label>
                    <textarea class="form-control" name="ac" id="edit-form-ac"></textarea>
                  </div>
            </div>
             <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary" id="edit-button" >Save</button>
             </div>
  </form>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){

  $('.delete-pg').on('click',function(){
    var name=$(this).data('name');
    
    if(confirm('ARE YOU SURE TO DELETE PG')){
      $.ajax({
        url:'delete1.php',
        type:'POST',
        data:{query:name},
        success: function(result){
          
          $('.container').load('newdelete.php');
        },
        error: function(err){
          alert(err);
        }
      });
    }
  });

$('.edit-pg').on('click',function(){
  var rent=$('#edit-form-rent').val($(this).data('rent'));
  var seater=$('#edit-form-seater').val($(this).data('seater'));
  var gender=$('#edit-form-gender').val($(this).data('gender'));
  var food=$('#edit-form-food').val($(this).data('food'));
  var cooler=$('#edit-form-cooler').val($(this).data('cooler'));
  var ac=$('#edit-form-ac').val($(this).data('ac'));
  var name=$('#edit-form-name').val($(this).data('name'));
  var id=$('#edit-form-id').val($(this).data('id'));
  
 
  });

  $('#edit-button').on('click',function(){
   var query=$('#edit-form-name').val();
 var rent=$('#edit-form-rent').val();
 var seater=$('#edit-form-seater').val();
  var gender=$('#edit-form-gender').val();
  var food=$('#edit-form-food').val();
  var cooler=$('#edit-form-cooler').val();
  var ac=$('#edit-form-ac').val();
  var id=$('#edit-form-id').val();
 if(rent!='' && seater!='' && gender!='' && food!='' && cooler!='' && ac!=''){

     $.ajax({
        url:'editpg.php',
        type:'POST',
        data:{query:query,rent:rent,seater:seater,gender:gender,food:food,cooler:cooler,ac:ac},
        success: function(result){
          alert("DATA SAVED SUCCESSFULY");
          
         // $('#editFormModal').model("hide");
         // $('.container').load('newdelete.php');
         location.reload(true);

        }
      });
  }
   else
   {
   alert("FiELD SHOULD NOT BE EMPTY");
   }
  
  });
      

});
  </script>
</body>
</html>
