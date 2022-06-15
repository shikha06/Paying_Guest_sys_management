<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://uah.edu/templates/uah/css/template.css">


<style>
  .transition,
form button,
form .question label,
form .question input[type="text"] {
-moz-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
-o-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
-webkit-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
}

* {
font-family: Helvetica, sans-serif;
font-weight: light;
-webkit-font-smoothing: antialiased;
}

html {
background-color: white;
}

form {
position: relative;
display: inline-block;
max-width: 700px;
min-width: 500px;
box-sizing: border-box;
padding: 30px 25px;
background-color: transparent;
border-radius: 40px;
margin: 40px 0;
left: 50%;
-moz-transform: translate(-50%, 0);
-ms-transform: translate(-50%, 0);
-webkit-transform: translate(-50%, 0);
transform: translate(-50%, 0);
}

form h1 {
color: #ff4a56;
font-weight: 10;
letter-spacing: 0.01em;
margin-left: 15px;
margin-bottom: 35px;
text-transform: uppercase;
}

form button {
margin-top: 35px;
background-color: white;
border: 3px solid #ff4a56;
line-height: 0;
font-size: 17px;
display: inline-block;
box-sizing: border-box;
padding: 20px 15px;
border-radius: 60px;
color: #ff4a56;
font-weight: 100;
letter-spacing: 0.01em;
position: relative;
z-index: 1;
}

form button:hover,
form button:focus {
color: white;
background-color: #ff4a56;
}

form .question {
position: relative;
padding: 10px 0;
}

form .question:first-of-type {
padding-top: 0;
}

form .question:last-of-type {
padding-bottom: 0;
}

form .question label {
transform-origin: left center;
color: #ff4a56;
font-weight: 100;
letter-spacing: 0.01em;
font-size: 17px;
box-sizing: border-box;
padding: 10px 15px;
display: block;
position: absolute;
margin-top: -40px;
z-index: 2;
pointer-events: none;
}

form .question input[type="text"] {
appearance: none;
background-color: none;
border: 1px solid red;
line-height: 0;
font-size: 17px;
width: 100%;
display: block;
box-sizing: border-box;
padding: 10px 15px;
border-radius: 60px;
color: #ff4a56;
font-weight: 100;
letter-spacing: 0.01em;
position: relative;
z-index: 1;
}

form .question input[type="text"]:focus {
outline: none;
background: #ff4a56;
color: white;
margin-top: 30px;
}
form .question input[type="text"]:valid {
margin-top: 30px;
}

form .question input[type="text"]:focus ~ label {
-moz-transform: translate(0, -35px);
-ms-transform: translate(0, -35px);
-webkit-transform: translate(0, -35px);
transform: translate(0, -35px);
}
form .question input[type="text"]:valid ~ label {
text-transform: uppercase;
font-style: italic;
-moz-transform: translate(5px, -35px) scale(0.6);
-ms-transform: translate(5px, -35px) scale(0.6);
-webkit-transform: translate(5px, -35px) scale(0.6);
transform: translate(5px, -35px) scale(0.6);
}



form .question select {
appearance: none;
background-color: none;
border: 1px solid #ff4a56;
line-height: 0;
font-size: 17px;
width: 100%;
height: 6%;
display: block;
box-sizing: border-box;
padding: 10px 15px;
border-radius: 60px;
color: #ff4a56;
font-weight: 100;
letter-spacing: 0.01em;
position: relative;
z-index: 1;
}

form .question select:focus {
outline: none;
background: #ff4a56;
color: white;
margin-top: 30px;
}
form .question select:valid {
margin-top: 30px;
}


form .question input[type="checkbox"] {
appearance: none;
background-color: none;
border: 1px solid #ff4a56;
line-height: 0;
font-size: 17px;
width: 100%;

box-sizing: border-box;
padding: 10px 15px;
height: 20px;
border-radius: 60px;
color: #ff4a56;
font-weight: 100;
letter-spacing: 0.01em;
position: relative;
z-index: 1;
padding: 10px;
}

form .question input[type="checkbox"]:focus {
outline: none;
background: #ff4a56;
color: white;
margin-top: 10px;
}
form .question input[type="checkbox"]:valid {
margin-top: 20px;
}


form .question input[type="file"] {
appearance: none;
background-color: none;
border: 1px solid #ff4a56;
line-height: 0;
font-size: 17px;
width: 100%;
height: 6%;
display: block;
box-sizing: border-box;
padding: 10px 15px;
border-radius: 60px;
color: #ff4a56;
font-weight: 100;
letter-spacing: 0.01em;
position: relative;
z-index: 1;
}

form .question input[type="file"]:focus {
outline: none;
background: #ff4a56;
color: white;
margin-top: 30px;
}
form .question input[type="file"]:valid {
margin-top: 20px;
}

form .question input[type="file"]:focus ~ label {
-moz-transform: translate(0, -35px);
-ms-transform: translate(0, -35px);
-webkit-transform: translate(0, -35px);
transform: translate(0, -35px);
}
form .question input[type="file"]:valid ~ label {
text-transform: uppercase;
font-style: italic;
-moz-transform: translate(5px, -35px) scale(0.6);
-ms-transform: translate(5px, -35px) scale(0.6);
-webkit-transform: translate(5px, -35px) scale(0.6);
transform: translate(5px, -35px) scale(0.6);
}




</style>

</head>
<body>
<div class="container">


 <form>
<h1>Register Your PG</h1>
<div class="question">
<input type="text" required/>
<label>PG Name</label>
</div>
<div class="question">
<input type="text" required/>
<label>Location</label>
</div>
<div class="question">
<input type="text" required/>
<label>Address</label>
</div>
<div class="question">
<input type="text" required/>
<label>Rent/Month</label>
</div>
<div class="question">
<input type="text" required/>
<label>Contact NO.</label>
</div>

<div class="question">
<select>
  <option value="" disabled="" selected="">Choose Gender</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Both</option>
</select>
</div>
<div class="question">
<input type="checkbox">
<label>One Seater</label></div>
<div class="question">
<input type="checkbox" />
<label>Two Seater</label></div>
<div class="question">
<input type="checkbox" />
<label>Three Seater</label></div>
<div class="question">
<input type="checkbox" />
<label>Four Seater</label>
</div>

<div class="question">
<select>
  <option value="" disabled="" selected="">MESS</option>
        <option value="1">Available</option>
        <option value="2">Not Available</option>
    
</select>
</div>
<div class="question">
<select>
  <option value="" disabled="" selected="">AC</option>
        <option value="1">Available</option>
        <option value="2">Not Available</option>
    
</select>
</div>

<div class="question"> 
 
<input type="file">
<label >ADD IMAGE</label>
</div>
<button>Submit</button>
</form>
</div>



</body></html>
