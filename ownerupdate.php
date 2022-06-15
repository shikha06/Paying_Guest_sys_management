<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="css/owner.css">
<script type="text/javascript" src="js/owner.js"></script>



</head>
<body>

<form method="post" name="myform" id="form1">
  <label>
    <p class="label-txt">ENTER NAME</p>
    <input type="text" class="input" name="owname" id="name" required >
    <p id="p1"></p>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">ENTER USERNAME</p>
    <input type="text" class="input" name="owuser" id="userid" required >
    <p id="p2"></p>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">ADDRESS</p>
    <input type="text" class="input" name="owadd" id="address" required >
    <p id="p5"></p> 
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">PHONE NO.</p>
    <input type="text" class="input" name="owphone" id="phone" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

 <label>
    <p class="label-txt">EMAIL</p>
    <input type="email" class="input" name="owmail" id="owemail" required >
    <p id="p3"></p>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">PASSWORD</p>
    <input type="password" class="input" name="owpass" id="owepass" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">CONFIRM PASSWORD</p>
    <input type="password" class="input" name="owconpass" id="oweconpass" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>


  <button id="sub">UPDATE</button>
</form>
</body>
</html>