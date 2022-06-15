<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
  header("location:loginnisha.php");
}
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBXKG2dp-gb9BqGTh5q3AlCtyHvrh_W6Dc&libraries=places&callbackinitAutocomplete" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <style>
    .button {
  height:49px;
  width:89px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 9px;
  box-shadow: 0 5px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(2px);
}
</style>
 </head>
 <body class="bg-white">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 bg-light mt-5 px-0">
				<h3 class="test-center text-light bg-success p-3">Deleting PG</h3>
				
					<div class="form-group">
						<input type="text" id="myInput" name="my" class="form-control form-control-lg" autocomplete="off">
						
					</div>

					<div class="form-group" id="result"></div>

				
			</div>
			<button class="button" style="margin-top:11%;margin-left:1%;" id="addbut">Submit</button>
			
		</div>

	
	</div>
	<div id="res" style="display:none;"><br></div> 
  <center><br><br><button class="btn btn-danger" id="addbut1" style="display:none;">Delete</button></center>
  <div id="res1" style="display:none;"><br><br>
  	<h4 id="res2" style="color:red;">PG has been Deleted</h4>
  </div> 
	<script>
	 $(document).ready(function(){
	 	$('#myInput').keyup(function(){
           var txt=$(this).val();
           if(txt != '')
           {
        $('#myInput').typeahead({
        	
           source:function(query,result)
           {

             $.ajax({
                url:"deletelist.php",
                method:"post",
                data:{query:query},
                dataType:"json",
                success:function(data)
                {
                    result($.map(data,function(item){
                       return item;

                    }));
                  
                }
            });
           }
          
        });
    }
    else{
    	$('#myInput').html('');
    }
        });


        $('#addbut').click(function(){
        	var txt=$('#myInput').val();
           if(txt != '')
           {
            $.ajax({
                 url:"show1.php",
                method:"post",
                data:{query:txt},
                dataType:"text",
                success:function(data)
                {   $('#res').fadeIn();
                    $('#res').html(data);
                    $('#addbut1').show();
                }
            });
        }
            
        else
           {
            $('#res').html('');
            
           }
        });


        $('#addbut1').click(function(){
           var txt=$('#myInput').val();
           if(txt != '')
           {

             $.ajax({
                url:"delete1.php",
                method:"post",
                data:{query:txt},
                dataType:"text",
                success:function(data)
                {
                	$('#res').hide();
                	$('#addbut1').hide();
                    $('#res1').show();
                     $('#res2').show();
                    $('#res1').html(data);
                }
            });
           }
           else
           {
            $('#res1').html('');
            
           }
        });



 });

    
</script>
 
 
</body>

 </html>