
<?php
session_start();
if(!isset($_SESSION['email']) || $_SESSION['role'] != "tenant"){
  header("location:loginnisha.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  margin: 0;
  min-width: 250px;
}

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  text-decoration: line-through;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  background-color: #f44336;
  padding: 30px 40px;
  color: white;
  text-align: center;
}

/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the input */
input {
  margin: 0;
  border: none;
  border-radius: 0;
  width: 55%;
  padding: 10px;
  float: left;
  font-size: 16px;
  margin-left:5px;
}

/* Style the "Add" button */
#addBtn {
  padding: 10px;
  width: 15%;
  margin-left:8px;

  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

#addBtn:hover {
  background-color: #bbb;
}
</style>



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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBXKG2dp-gb9BqGTh5q3AlCtyHvrh_W6Dc&libraries=places&callbackinitAutocomplete" type="text/javascript"></script>
</head>
<body>
    <div id="myDIV" class="header">
  <h2 style="margin:5px">List Of Paying Guest</h2>
  <input type="text" id="myInput" placeholder="Title...">
  <button name="submit1" id="addBtn" class="btn btn-danger">Show All</button>
</div>
<br>
  <div  id="result"></div>
  <script>
    $(document).ready(function(){
        $('#myInput').keyup(function(){
           var txt=$(this).val();
           if(txt != '')
           {

             $.ajax({
                url:"nishlist.php",
                method:"post",
                data:{search:txt},
                dataType:"text",
                success:function(data)
                {
                    $('#result').fadeIn();
                    $('#result').html(data);
                }
            });
           }
           else
           {
            $('#result').html('');
            
           }
        });

        $('#addBtn').click(function(){
            $.ajax({
                url:"showall.php",
                method:"post",
                success:function(data)
                {   $('#result').fadeIn();
                    $('#result').html(data);
                }
            });
             });

    });
    </script>
</body>
</html>
