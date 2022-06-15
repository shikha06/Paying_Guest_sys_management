<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="css/owner.css">
<script type="text/javascript" src="js/owner.js"></script>


</head>
<body>
<form method="post" onsubmit="return check()">

 

  <label>
    <p class="label-txt">ENTER PG NAME</p>
    <input type="text" class="input" name="pgname" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">ENTER LOCATION</p>
    <input type="text" class="input" name="pgloc" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">ADDRESS</p>
    <input type="text" class="input" name="pgadd" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">GENDER</p><br>
    <select class="input" id="gend" name="pgtype" style="box-shadow: 1px 1px ;" required>
      <div class="line-box">
      <option value="Please Select">Please Select</option>
      <option>girls</option>
      <option>boys</option>
      <option>both </option>
      </div>
    </select>
  </label>

 <label>
    <p class="label-txt">SEATER</p>
    1 <input type="checkbox"  name="pgseat" placeholder="1" style="height: 25px; width: 25px; ">
    2 <input type="checkbox" name="pgseat" placeholder="2" style="height: 25px; width: 25px; ">
    3 <input type="checkbox"  name="pgseat" placeholder="3" style="height: 25px; width: 25px; ">
    4 <input type="checkbox"  name="pgseat" placeholder="4" style="height: 25px; width: 25px; ">

  </label>

  <label>
    <p class="label-txt">FOOD AVAILABILITY</p><br>
    <select class="input" id="food" name="pgfood" style="box-shadow: 1px 1px ;" required>
      <div class="line-box">
      <option value="Please Select">Please Select</option>
      <option>mess</option>
      <option>no mess</option>
      </div>
    </select>
  </label>

  <label>
    <p class="label-txt">RENT PER MONTH</p>
    <input type="text" class="input" name="pgrent" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

<label>
    <p class="label-txt">OTHER AVAILABILITY</p><br>

    AC <input type="checkbox"  name="pgavail" placeholder="1" style="height: 25px; width: 25px; ">
    Cooler <input type="checkbox" name="pgavail" placeholder="2" style="height: 25px; width: 25px; ">
    Electricity <input type="checkbox"  name="pgavail" placeholder="3" style="height: 25px; width: 25px; ">
    Laundry <input type="checkbox"  name="pgavail" placeholder="4" style="height: 25px; width: 25px; ">
    
  </label>

  <label>
    <p class="label-txt">ENTER CONTACT DETAILS</p>
    <input type="text" class="input" name="pgcon" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

<label>
    <p class="label-txt">ADD IMAGE</p>
    <input type="file" class="input" name="pgimg" required>
    
  </label>

  <button type="submit">submit</button>
</form>
</body>
</html>