<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/owner1.css">

<style>
    #defaultRegisterFormEmail:focus{
      text-transform: uppercase;
    font-style: italic;
   -moz-transform: translate(0, -35px) scale(1);
   -ms-transform: translate(0, -35px) scale(1);
   -webkit-transform: translate(0, -35px) scale(1);
    transform: translate(0, -15px) scale(1);
    }

     #defaultRegisterFormEmail:focus{
   border-color: #d9534f;
   border-radius: 10px;
    }
</style>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
             <div class="col-md-8">
<form class="border border-light p-5">

    <div class="foo"><span class="letter" data-letter="REGISTER PG">REGISTER PG</span></div>

     <input type="text" id="PGName" name="pgname" class="form-control" placeholder="ENTER PG NAME" ><br>

    <input type="text" id="location" name="pglocation" class="form-control" placeholder="ENTER LOCATION"><br>

    <textarea id="defaultRegisterFormEmail" name="pgaddress" class="form-control mb-4" placeholder="Enter Address">Address</textarea>
    <select class="browser-default custom-select mb-4" id="select" name="gender">
        <option value="" disabled="" selected="">Choose Gender</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Both</option>
    </select>
    

    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="checkbox1" value="1" name="seater">
            <label class="custom-control-label" for="checkbox1"  >One Seater</label>
        </div>
       <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="checkbox2" value="2" name="seater">
            <label class="custom-control-label" for="checkbox2">Two Seater</label></div>
       <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="checkbox3" value="3" name="seater">
            <label class="custom-control-label" for="checkbox3">Three Seater</label></div> 
       <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="checkbox4" value="4" name="seater">
            <label class="custom-control-label" for="checkbox4">Four Seater</label>
    </div>

    <select class="browser-default custom-select mb-4" id="select" name="food">
        <option value="" disabled="" selected="">Mess</option>
        <option value="1">Available</option>
        <option value="2">Not Available</option>
    </select>

    <select class="browser-default custom-select mb-4" id="select" name="ac">
        <option value="" disabled="" selected="">AC</option>
        <option value="1">Available</option>
        <option value="2">Not Available</option>
    </select>
       <select class="browser-default custom-select mb-4" id="select" name="cooler">
        <option value="" disabled="" selected="">COOLER</option>
        <option value="1">Available</option>
        <option value="2">Not Available</option>
    </select>
 
    <input type="text" id="rent" class="form-control" name="rent"placeholder="ENTER RENT/MONTH"><br>
   <input type="text" id="rent" class="form-control" name="contact"placeholder="ENTER CONTACT NUMBER"><br>
   <div class="input-group mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text">ADD IMAGE</span>
        </div>
        <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" id="fileInput" aria-describedby="fileInput">
            <label class="custom-file-label" for="fileInput"></label>
        </div>
    </div>
  

    

    

    <button class="btn btn-danger my-4 btn-block" type="submit" >SUBMIT</button>

   
</form></div>
 <div class="col-md-2"></div></div></div>
</body>
</html>