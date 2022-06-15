<?php
   if(isset($_POST['sub']))
   {
require 'PHPMailerAutoload.php';
require 'credential.php';

$mail = new PHPMailer;
$mail->isSMTP();                                    
$mail->Host = 'tls://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->AuthType = 'LOGIN';                             
$mail->Username = EMAIL; //SMTP usernmame                   
$mail->Password = PASS;                           
$mail->SMTPSecure = 'tls';                          
$mail->Port = 587;

$mail->From = $_POST['email'];
$mail->setFrom($_POST['email'],$_POST['name']);  
$mail->addReplyTo($_POST['email']);
$mail->isHTML(true);                  // Set email format to HTML
$mail->Subject = 'Feedback from Users of PGMS';
$mail->addAddress(EMAIL, 'Admin'); 
$mail->Body    = $_POST['comments'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
   


$mail2 = new PHPMailer;
$mail2->isSMTP();                                    
$mail2->Host = 'tls://smtp.gmail.com';
$mail2->SMTPAuth = true;
$mail2->AuthType = 'LOGIN';                             
$mail2->Username = EMAIL; //SMTP usernmame                   
$mail2->Password = PASS;                           
$mail2->SMTPSecure = 'tls';                          
$mail2->Port = 587;                         

$mail2->setFrom(EMAIL);
$mail2->addAddress($_POST['email'], $_POST['name']);   
$mail2->addReplyTo(EMAIL, 'admin');
$mail2->isHTML(true);                               // Set email format to HTML
$mail2->Subject = 'Reply from PGMS';
$mail2->Body    = 'We will be right back to you within a moment';
$mail2->FromName = 'PGMS';
$mail2->From = EMAIL;

if(!$mail2->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
   
}
?>

<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
    background-color: lavender;

  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-image: url('image/img1.gif');
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: black;
    font-size: 50px;
  }
  .logo {
    color: black;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: black;
  }
  .carousel-indicators li {
    border-color: black;
  }
  .carousel-indicators li.active {
    background-color: black;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid black; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid black;
    background-color: #fff !important;
    color: black;
  }
  .panel-heading {
    color: #fff !important;
    background-color: black !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: black;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: black;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: black !important;
    background-color: #fff !important;
  }
  
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: black;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home2.php" ><img src="image/logo1.jpg" style="height: 60px; width: 60px; border-radius: 50%;" title="home"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" >ABOUT</a></li>
        <li><a href="#services">LOCALITY</a></li>
        <li><a href="#portfolio">PICTURES</a></li>
         <li><a href="fi/loginnisha.php">SIGNIN</a></li>
         <li ><a href="#help">HELP</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>PGMS</h1> 
  <p>We are here to make your life easy</p> 
  
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid"  >
  <div class="row">
    <div class="col-sm-8">
      <h2>About PGMS</h2><br>
      <h4>PGMS has been created keeping in mind about the students who come from different places to study in the Lovely Professional University</h4><br>
      <p>Students who face difficulty in finding their place to stay of their choice, they can search that here on the basis of their requirements  </p>
      <br><a href = "fi/loginnisha.php"><button class="btn btn-default btn-lg">Get in Touch</button></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-thumbs-up logo slideanim"></span> 
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to be more affordable than a rental flat, owners take a number of measures in order to ensure your safety, offer other facilities like home-made meals etc.</h4><br>
      <p><strong>VISION:</strong> No sooner do we think we have assembled a comfortable life than we find a piece of ourselves that has no place to fit in.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>LOCALITY</h2>
  <h4>Where we are</h4>
  <br>
  <div class="row slideanim">
   
    <div class="col-sm-12">
      <span class="glyphicon glyphicon-home logo-small"></span>
      <h4>Paying Guests</h4>
      <p>Available at affordable range</p>
    </div>
  </div>
  <br><br>
  
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center" style="background-color: black; color: white;">
  <h2 style="color: white">PICTURES</h2><br>
  <h4 style="color: white">Views to view</h4>
  <div class="row text-center slideanim">
    <div class="col-md-4">
     
        <img src="image/view3.jpeg"  width="400" height="400">
        <p><strong>Bedroom</strong></p>
        <p>Yes, resting place</p>
      
    </div>
    <div class="col-md-4">
    
        <img src="image/view2.jpg"  width="400" height="400">
        <p><strong>Balcony</strong></p>
        <p>Away from crowd</p>
     
    </div>
    <div class="col-md-4">
     
        <img src="image/view3.jpg"  width="400" height="400">
        <p><strong>Dormatory</strong></p>
        <p>Yes, unity is strength</p>
    </div>
  </div></div><br>
  
  
<!-- Container (Contact Section) -->
<div id="help" class="container-fluid" style="background-color: black; opacity: 0.8; color: white; margin-top: -27px;" >
  <h2 class="text-center" style="color: white;">HELP</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> PUNJAB, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 8928454879</p>
      <p><span class="glyphicon glyphicon-envelope"></span> nishikha0601@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
       <form method="post">
      <div class="row">

        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Enter your Query" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name="sub">Send Email</button>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="image/map1.jpg" class="w3-image w3-greyscale-min" style="width:100%; height: -50%;">

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>ACCOMODATION SYSTEM </p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
