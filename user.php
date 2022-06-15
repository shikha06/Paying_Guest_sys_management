<!--<?php
 $f=0;
 $conn =  new mysqli("localhost","root","","pgms");
  if(isset($_POST['login']))
 {
  $acc = $_POST['username'];
  $pgname = $_POST['sear'];
  $seater = $_POST['seat'];
  $food = $_POST['food'];
  $laundry = $_POST['laundry'];
  $rent = $_POST['rent'];
  $ac = $_POST['ac'];
  
  $sql = "SELECT * FROM usersearch WHERE username=? AND password=? AND user_type=?";

 }

 ?>-->




<html>
<head>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style1.css">
<script type="text/javascript" src="js/userjs.js"></script>
<link rel="stylesheet" href="css/boot.css">



<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
  </script>

  
<style>


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

.jumbotron {
    background-color: black;
    color: #fff;
    padding: 60px 25px;
    font-family: Montserrat, sans-serif;
  }
footer{
  background-color: black;
  color: #fff;
}




 
</style>



</head>
<body >


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
         <li><a href="logout.php">LOGOUT</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>PGMS</h1> 
  <p>We are here to make your life easy</p> 
</div>


   <br>
 
 <div class="container">
  <div class="row">
        <div id="filter-panel" class="collapse filter-panel">
            <div class="panel panel-default">
                <div class="panel-body">

                    <form class="form-inline" role="form">
                        <div class="form-group">
                            
                            <select id="pref-perpage" class="form-control" name="accom">
                                <option value="Couple">Both</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option selected="selected" value="Accomodation(all)">Accomodation(all)</option>
                              
                            </select>                                
                        </div> 

                         
                       <div class="form-group">
                           
                            <select id="pref-perpage" class="form-control" name="seat">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option selected="selected" value="Area(all)">Seater(all)</option>
                              
                            </select>                                
                        </div> 

                

                        <div class="form-group">
                           
                            <select id="pref-perpage" class="form-control" name="food">
                                <option value="Couple">Available </option>
                                <option value="Family">Not Available</option>
                                
                                <option selected="selected" value="Food Availability(all)">Food Availability</option>
                              
                            </select>                                
                        </div> 

                        <div class="form-group">
                           
                            <select id="pref-perpage" class="form-control" name="laundry">
                                <option value="Couple">Available </option>
                                <option value="Family">Not Available</option>
                                
                                <option selected="selected" value="Laundry">Laundry</option>
                              
                            </select>                                
                        </div> 
                        <div class="form-group">
                
                            <select id="pref-perpage" class="form-control" name="rent">
                                <option value="Couple">1000</option>
                                <option value="Family">2000</option>
                                <option value="Female">3000</option>
                                <option value="Male">4000</option>
                                <option selected="selected" value="Rent/Month(all)">Rent/Month(all)</option>
                              
                            </select>                                
                        </div> 
                        <div class="form-group">
                          
                            <select id="pref-perpage" class="form-control" name="ac">
                                
                                <option value="NON A.C">NON A.C</option>
                                <option value="A.C">A.C</option>
                                <option selected="selected" value="All">A.C/NON A.C/ALL</option>
                              
                            </select>                                
                        </div> 

                       <div class="form-group">
                          
                            <input type="text" class="form-control input-sm" placeholder="Search by PG name" id="pref-search" name="sear">
                        </div>

                        <!--<div class="form-group" style="margin-top: 10px;">    
                            <div class="checkbox" style="margin-left:10px; margin-right:10px;">
                                <label><input type="checkbox" class="ch" style="height: 25px; width: 25px; ">Laundry</label>
                            </div>-->
                            <br><br>
                            <button type="submit" class="btn btn-default filter-col" style="width: 130px; margin-left: 470px; " name="btn">
                                <span class="glyphicon glyphicon-search"></span> Search
                            </button>  
                        </div>
                    </form>
                </div>
            </div>
        </div> 

        <div class="container-fluid">
        <div class="row">   
          <div class="col-md-4"></div>
       <div class="col-md-4"> <button type="button" class="btn btn-danger" style="width: 300px;" data-toggle="collapse" data-target="#filter-panel" >
            <span class="glyphicon glyphicon-search"></span> &nbsp;Filter the search
        </button></div>
        <div class="col-md-4"></div>
      </div>
  </div>
</div></div>
<br>

   


<div class="container-fluid">
  <div class="tab-content">
    <div id="one" class="tab-pane fade in active">
      <div class="row">
         <div class="col-md-2"></div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/saanjh.jpg" style="width:270px;height:250px;" alt="Card image cap">
             <div class="overlay">
                <h2>Saanjh PG<br>Law Gate<br></h2>
             </div>
          </div>
          <div class="card-body">

            <br>
                <h4 class="card-title">Available for both boys and girls</h4>
                <p class="card-text">Food and Laundry.</p>

                 <button class="btn btn-danger"  id="Myimg1">Go for more</button>
                 <div class="modal fade" id="Mymodal1">
                 <div class="modal-dialog">
                 <div class="modal-content">
                 <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                 <h4 class="modal-title">
                 <img class="img-responsive"  src="image/saanjh.jpg" style="width:300px;height:200px;">
                </h4>                                                             
                 </div> 
                 <div class="modal-body">
                 <h3>Saanjh PG</h3><br>
                 <p>Simar enclave, LawGate Road, Phagwara, Maheru - 144402, near Lovely Professional University</p><br>
                 <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 8210248763</p>
                 <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 beds available</p>
                 <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
                 <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
                 <p>AC and NON AC both are available</p>
                 <p>Laundry is available</p>
                 </div>   
                 <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                </div>                                                                       
                </div>                                      
                </div>
          </div>
        </div>
        </div>

        
         <div class="col-md-3">
         <div class="card" style="width: 18rem;">
          <div class="hovereffect">
            <img class="card-img-top" src="image/sun.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>Sun PG<br>Phagwara<br></h2>
            </div>
          </div>
          <div class="card-body">
            <br><br>
                <h4 class="card-title">Only for Boys </h4>
                <p class="card-text">Food facility available</p>
                <button class="btn btn-danger"  id="Myimg2">Go for more</button>
               <div class="modal fade" id="Mymodal2">
               <div class="modal-dialog">
               <div class="modal-content">
               <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/sun.jpg" style="width:300px;height:200px;">
                </h4>                                                             
               </div> 
               <div class="modal-body">
               <h3>SUN PG</h3><br>
                <p>House no.- 180, Street No-3, Phagwara- 144401, near 
                  Electricity Board Model Town/p><br>
                <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9152326475</p>
                <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 1,2 seater beds available</p>
                <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for boys</p>
                <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
                <p>AC available</p>
               </div>   
                <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
             </div>                                                                       
             </div>                                      
             </div>
           </div>
        </div>
        </div>


        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <div class="hovereffect">
             <img class="card-img-top" src="image/aman.jpg" style="width:270px;height:250px;" alt="Card image cap">
             <div class="overlay">
                <h2>Aman PG<br>Phagwara<br></h2>
             </div>
            </div>
            <div class="card-body">
               <br><br>
                <h4 class="card-title">for boys only </h4>
                <p class="card-text">Food facility available</p>
                <button class="btn btn-danger"  id="Myimg3">Go for more</button>
                <div class="modal fade" id="Mymodal3">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/aman.jpg" style="width:300px;height:200px;">
               </h4>                                                             
               </div> 
                <div class="modal-body">
                <h3>AMAN PG</h3><br>
                <p>Bhankoti road,Bhagatpura,Phagwara HO,Phagwara -144401,Near Shiv Mandir ,Across Railway Station</p><br>
                <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9872823900</p>
                <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 1,2,3 seater beds available</p>
                <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for boys</p>
                <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; food facility is available</p>
                <p>NON AC is available</p>
             </div>   
                <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
              </div>                                                                       
              </div>                                      
              </div>
          </div>
          </div>
          </div>


         <div class="col-md-2"></div>
</div>
<br>

    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <div class="hovereffect">
            <img class="card-img-top" src="image/Sohal.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>Sohal PG<br>Maheru<br></h2>
            </div>
            </div>
            <div class="card-body">
               <br><br>
                <h4 class="card-title">Available for both boys and girls</h4>
                <p class="card-text">Food facility available</p>
                 <button class="btn btn-danger"  id="Myimg4">Go for more</button>
            <div class="modal fade" id="Mymodal4">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/Sohal.jpg" style="width:300px;height:200px;">
                </h4>                                                             
            </div> 
            <div class="modal-body">
             <h3>SOHAL PG</h3><br>
             <p>Plot 545,University View,Phase 3, Maheru,Phagwara -144402,Near Law Gate</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9872451713</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; food facility is available</p>
             <p>AC and NON AC both are available</p>
            </div>   
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
            </div>                                                                       
            </div>                                      
            </div>
            </div>
        </div>
        </div>

         <div class="col-md-3">
         <div class="card" style="width: 18rem;">
            <div class="hovereffect">
            <img class="card-img-top" src="image/no.png" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>Sharma PG<br>Maheru<br></h2>
            </div>
            </div>
            <div class="card-body">
               <br><br>
                <h4 class="card-title">Available for both girls and boys</h4>
                <p class="card-text">Laundry service available</p>
                 <button class="btn btn-danger"  id="Myimg5">Go for more</button>
            <div class="modal fade" id="Mymodal5">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/no.png" style="width:300px;height:200px;">
                </h4>                                                             
            </div> 
            <div class="modal-body">
             <h3>SHARMA PG</h3><br>
             <p>Simar Enclave,Law Gate Road, Meheru, Phagwara -144402,Near Lpu Law Gate</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9056426822</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; laundry facility is available</p>
             <p>AC and NON AC both are available</p>
            </div>   
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
            </div>                                                                       
            </div>                                      
            </div>
            </div>
          </div>
          </div>

        
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
             <div class="hovereffect">
             <img class="card-img-top" src="image/new.jpg" style="width:270px;height:250px;" alt="Card image cap">
             <div class="overlay">
                <h2>NEW TOUCH PG<br>Phagwara<br></h2>
             </div>
             </div>
             <div class="card-body">
               <br><br>
                <h4 class="card-title">For Boys only</h4>
                <p class="card-text">Food facility available</p>
                 <button class="btn btn-danger"  id="Myimg6">Go for more</button>
              <div class="modal fade" id="Mymodal6">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/new.jpg" style="width:300px;height:200px;">
                </h4>                                                             
              </div> 
             <div class="modal-body">
             <h3>NEW TOUCH PG</h3><br>
             <p>GT Road,Phagwara HO,Phagwara -144401,Near LPU</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9855133134</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for boys </p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Food facility is available</p>
             <p>NON AC is available</p>
            </div>   
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
            </div>                                                                       
            </div>                                      
            </div>

             </div>
        </div>
        </div>


         <div class="col-md-2"></div>
</div>
<br>

    <div class="row">

         <div class="col-md-2"></div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
                <div class="hovereffect">
                <img class="card-img-top" src="image/it.jpg" style="width:270px;height:250px;" alt="Card image cap">
                <div class="overlay">
                <h2>It world Pg<br>Phagwara<br></h2>
               </div>
               </div>
                <div class="card-body">
                   <br><br>
                <h4 class="card-title">For both girls and boys</h4>
                <p class="card-text">Food facility available</p>
                <button class="btn btn-danger"  id="Myimg7">Go for more</button>
                <div class="modal fade" id="Mymodal7">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/it.jpg" style="width:300px;height:200px;">
                </h4>                                                             
             </div> 
             <div class="modal-body">
             <h3>IT WORLD PG</h3><br>
             <p>LawGate, Phagwara, Maheru - 144401, near Lovely Professional University</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9888200400</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Food facility is available</p>
             <p>AC and NON AC both are available</p>
             </div>   
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
             </div>                                                                       
             </div>                                      
             </div>
             </div>
        </div>
        </div>


        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
             <div class="hovereffect">
             <img class="card-img-top" src="image/gulati.jpg" style="width:270px;height:250px;" alt="Card image cap">
             <div class="overlay">
                <h2>Gulati PG<br>Lawgate<br></h2>
             </div>
             </div>
             <div class="card-body">
                <h4 class="card-title">Only for Boys</h4>
                <p class="card-text">Laundry Services Availale</p>
                <button class="btn btn-danger"  id="Myimg8">Go for more</button>
             <div class="modal fade" id="Mymodal8">
             <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/gulati.jpg" style="width:300px;height:200px;">
                </h4>                                                             
             </div> 
             <div class="modal-body">
             <h3>GULATI PG</h3><br>
             <p>Law Gate Road, Meheru,Phagwara -144402, Near Lovely View Hostel</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9501909482</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for BOYS only</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Laundry Service is Available</p>
             <p>AC is available</p>
             </div>   
             <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
             </div>                                                                       
             </div>                                      
             </div>
             </div>
        </div>
        </div>

        
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
               <div class="hovereffect">
               <img class="card-img-top" src="image/deo.jpg" style="width:270px;height:250px;" alt="Card image cap">
               <div class="overlay">
                <h2>Deo accommodation center<br>Phagwara<br></h2>
               </div>
               </div>
               <div class="card-body">
                <h4 class="card-title">for boys only</h4>
                <p class="card-text">Food Services Available</p>
               <button class="btn btn-danger"  id="Myimg9">Go for more</button>
              <div class="modal fade" id="Mymodal9">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/deo.jpg" style="width:300px;height:200px;">
                </h4>                                                             
              </div> 
              <div class="modal-body">
              <h3>DEO ACCOMODATION CENTER</h3><br>
              <p>Deo Accommodation Center, Chaheru Khusropur Link Rd, Nanak Nagri, Punjab 144411</p><br>
              <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9876583155</p>
              <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 1,2 seater beds available</p>
              <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for  boys only</p>
              <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; food services is available</p>
              <p>AC and NON AC both are available</p>
              </div>   
              <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
              </div>                                                                       
              </div>                                      
              </div>
              </div>
        </div>
        </div>


         <div class="col-md-2"></div>
</div>

    </div>

    <div id="two" class="tab-pane fade">
      <div class="row">
         <div class="col-md-2"></div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
              <div class="hovereffect">
              <img class="card-img-top" src="image/kamal.jpg" style="width:270px;height:250px;" alt="Card image cap">
               <div class="overlay">
                <h2>Kamal pg and fast food<br>Phagwara<br></h2>
               </div>
               </div>
               <div class="card-body">
                <h4 class="card-title">available for both boys and girls</h4>
                <p class="card-text">Laundry and food facility available</p>
                <button class="btn btn-danger"  id="Myimg10">for more</button>
              <div class="modal fade" id="Mymodal10">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button> 
               <h4 class="modal-title">
                 <img class="img-responsive"  src="image/kamal.jpg" style="width:300px;height:200px;">
                </h4>                                                             
             </div> 
             <div class="modal-body">
             <h3>KAMAL PG AND FAST FOOD</h3><br>
             <p>LawGate, Phagwara, Maheru - 144401, near Lovely Professional University</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. 0124 6201519</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
             <p>AC and NON AC both are available</p>
              </div>   
              <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
              </div>                                                                       
              </div>                                      
              </div>
              </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="hovereffect">
            <img class="img-responsive" src="image/aanjanay.jpg" style="width:270px;height:250px;">
            <div class="overlay">
                <h2>Aanjanay guest house<br>lawgate<br></h2>
            </div>
          </div>
          <div class="card-body">
                <h4 class="card-title">Both boys and girls</h4>
                <p class="card-text">Laundry and food facility available</p>
                <button class="btn btn-danger"  id="Myimg11">for more</button>
        <div class="modal fade" id="Mymodal11">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button> 
       <h4 class="modal-title">
                 <img class="img-responsive"  src="image/aanjanay.jpg" style="width:300px;height:200px;">
                </h4>                                                             
       </div> 
      <div class="modal-body">
             <h3>AANJANAY GUEST HOUSE</h3><br>
             <p>LawGate, Phagwara, Maheru - 144401, near Lovely Professional University</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9464079275</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; laundry and food facility is available</p>
             <p>AC and NON AC both are available</p>
      </div>   
      <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
      </div>                                                                       
      </div>                                      
      </div>

          </div>
        </div>
        </div>

       
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/yuvrajpg.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>YUVRAJ PG<br>Lawgate<br></h2>
            </div>
          </div>
          <div class="card-body">
                <h4 class="card-title">for both boys and girls</h4>
                <p class="card-text">Laundry and food facility available</p>
                <button class="btn btn-danger"  id="Myimg12">for more</button>
        <div class="modal fade" id="Mymodal12">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button> 
       <h4 class="modal-title">
                 <img class="img-responsive"  src="image/yuvrajpg.jpg" style="width:300px;height:200px;">
                </h4>                                                             
       </div> 
      <div class="modal-body">
             <h3>YUVRAJ PG</h3><br>
             <p>LawGate, Phagwara, Maheru - 144401, near Lovely Professional University</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9464079275</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
             <p>AC and NON AC both are available</p>
           </div>   
           <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
           </div>                                                                       
           </div>                                      
           </div>
           </div>
        </div>
        </div>

         <div class="col-md-2"></div>
</div>
<br>


    <div class="row">
         <div class="col-md-2"></div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="hovereffect">
            <img class="card-img-top" src="image/golden.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>golden pg<br>phagwara<br></h2>
            </div>
          </div>
          <div class="card-body">
                <h4 class="card-title">Available for both boys and girls</h4>
                <p class="card-text">laundry and food facility available</p>
           <button class="btn btn-danger"  id="Myimg13">for more</button>
           <div class="modal fade" id="Mymodal13">
           <div class="modal-dialog">
           <div class="modal-content">
           <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/golden.jpg" style="width:300px;height:200px;">
                </h4>                                                             
           </div> 
           <div class="modal-body">
             <h3>GOLDEN PG</h3><br>
             <p>Law Gate Road, Guru Hargobind Nagar, Phagwara - 144401, NearLovely Professional University</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 8728917318</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
             <p>AC and NON AC both are available</p>
           </div>   
           <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
          </div>                                                                       
          </div>                                      
          </div>          </div>
        </div>
        </div>

         <div class="col-md-3">
         <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/amrit.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>amrit property advisor<br>phagwara<br></h2>
            </div>
          </div>
           <div class="card-body">
                <h4 class="card-title">for both girls and boys</h4>
                <p class="card-text">No food and laundry facility </p>
                <button class="btn btn-danger"  id="Myimg14">for more</button>
        <div class="modal fade" id="Mymodal14">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button> 
       <h4 class="modal-title">
                 <img class="img-responsive"  src="image/amrit.jpg" style="width:300px;height:200px;">
                </h4>                                                             
       </div> 
      <div class="modal-body">
             <h3>AMRIT PROPERTY ADVISOR</h3><br>
             <p>Central Town, Gt Road, Phagwara Sharki,Phagwara -144401,NearPunjab National Bank</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9915917010</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
           
             <p>AC and NON AC both are available</p>
      </div>   
      <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
      </div>                                                                       
      </div>                                      
      </div>

          </div>
        </div>
        </div>

        
         <div class="col-md-3">
         <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/gettheroof.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>get the roof <br>lawgate<br></h2>
            </div>
          </div>
             <div class="card-body">
                <h4 class="card-title">for both girls and boys</h4>
                <p class="card-text">Food and laundry facility available</p>
                 <button class="btn btn-danger"  id="Myimg15">for more</button>
        <div class="modal fade" id="Mymodal15">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button> 
       <h4 class="modal-title">
                 <img class="img-responsive"  src="image/gettheroof.jpg" style="width:300px;height:200px;">
                </h4>                                                             
       </div> 
      <div class="modal-body">
             <h3>GET THE ROOF</h3><br>
             <p>JK App, Simmar Enclave, Law Gate Road,Phagwara Sharki,Phagwara -144401,Near Deepak Kiryana</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 7986884891</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 3 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; food and laundry is available</p>
             <p>AC and NON AC both are available</p>
      </div>   
      <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
      </div>                                                                       
      </div>                                      
      </div>

          </div>
        </div>
        </div>

         <div class="col-md-2"></div>
         </div>
<br>


    <div class="row">
         <div class="col-md-2"></div>

         <div class="col-md-3">
         <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/sukhna.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>Sukhna paying guest<br>phagwara<br></h2>
            </div>
          </div>
          <div class="card-body">
                <h4 class="card-title">for both girls and boys</h4>
                <p class="card-text">food and laundry available</p>
                <button class="btn btn-danger"  id="Myimg16">for more</button>
        <div class="modal fade" id="Mymodal16">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button> 
       <h4 class="modal-title">
                 <img class="img-responsive"  src="image/sukhna.jpg" style="width:300px;height:200px;">
                </h4>                                                             
       </div> 
      <div class="modal-body">
             <h3>SUKHNA PAYING GUEST</h3><br>
             <p>Building Number 128, Law Gate Road,Guru Hargobind Nagar,Phagwara - 144401,Near Lovely Professional University</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9781373561</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
             <p>AC and NON AC both are available</p>
      </div>   
      <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
      </div>                                                                       
      </div>                                      
      </div>
          </div>
        </div>
        </div>

         <div class="col-md-3">
         <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/amber.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>amber pg<br>phagwara<br></h2>
            </div>
          </div>
          <div class="card-body">
                <h4 class="card-title">for both boys and girls</h4>
                <p class="card-text">laundry and food facility available</p>
                <button class="btn btn-danger"  id="Myimg17">for more</button>
        <div class="modal fade" id="Mymodal17">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button> 
       <h4 class="modal-title">
                 <img class="img-responsive"  src="image/amber.jpg" style="width:300px;height:200px;">
                </h4>                                                             
       </div> 
      <div class="modal-body">
             <h3>AMBER PG</h3><br>
             <p>LawGate, Phagwara, Maheru - 144401, near Lovely Professional University</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 7009004885</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
             <p>AC and NON AC both are available</p>
      </div>   
      <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
      </div>                                                                       
      </div>                                      
      </div>
          </div>
        </div>
        </div>

        <div class="col-md-3">
         <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/divjot.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>Divjot PG<br>maheru<br></h2>
            </div>
          </div>
          <div class="card-body">
                <h4 class="card-title">for both boys and girls</h4>
                <p class="card-text">laundry and food facility available</p>
                <button class="btn btn-danger"  id="Myimg18">for more</button>
        <div class="modal fade" id="Mymodal18">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button> 
       <h4 class="modal-title">
                 <img class="img-responsive"  src="image/divjot.jpg" style="width:300px;height:200px;">
                </h4>                                                             
       </div> 
      <div class="modal-body">
             <h3>DIVJOT PG</h3><br>
             <p>Simar Enclave Law Gate Road, Meheru,Phagwara -144402,Near LPU</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9357204756</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; food and laundry is available</p>
             <p>AC and NON AC both are available</p>
      </div>   
      <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
      </div>                                                                       
      </div>                                      
      </div>
          </div>
        </div>
        </div>

         <div class="col-md-2"></div>
</div>


    </div>



    <div id="three" class="tab-pane fade">
      <div class="row">
         <div class="col-md-2"></div>

        <div class="col-md-3">
         <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/star.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>3 star pg<br>maheru<br></h2>
            </div>
          </div>
          <div class="card-body">
                <h4 class="card-title">For both boys and girls</h4>
                <p class="card-text">Both food and laundry facility available</p>
              <button class="btn btn-danger"  id="Myimg19">for more</button>
        <div class="modal fade" id="Mymodal19">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button> 
       <h4 class="modal-title">
                 <img class="img-responsive"  src="image/star.jpg" style="width:300px;height:200px;">
                </h4>                                                             
       </div> 
      <div class="modal-body">
             <h3>3-STAR PG</h3><br>
             <p>Simar Enclave Law Gate Road, Meheru,Phagwara -144402,Near LPU</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 7355532013</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; food and laundry facility is available</p>
             <p>AC and NON AC both are available</p>
      </div>   
      <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
      </div>                                                                       
      </div>                                      
      </div>

          </div>
        </div>
        </div>

         <div class="col-md-3">
         <div class="card" style="width: 18rem;">
             <div class="hovereffect">
               <img class="card-img-top" src="image/hari.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>Hari Om pg<br>maheru<br></h2>
            </div>
             </div>
             <div class="card-body">
                <h4 class="card-title">Available for both boys and girls</h4>
                <p class="card-text">food and laundry facility available</p>
               <button class="btn btn-danger"  id="Myimg20">for more</button>
            <div class="modal fade" id="Mymodal20">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/hari.jpg" style="width:300px;height:200px;">
                </h4>                                                             
            </div> 
            <div class="modal-body">
             <h3>HARI OM PG</h3><br>Simar Enclave Law Gate Road, Meheru,Phagwara -144402,Near LPU</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 7717205437</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; food and laundry facility available</p>
             <p>AC and NON AC both are available</p>
          </div>   
          <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
          </div>                                                                       
          </div>                                      
          </div>
          </div>
        </div>
        </div>
         

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
               <div class="hovereffect">
               <img class="card-img-top" src="image/stm.jpg" style="width:270px;height:250px;" alt="Card image cap">
               <div class="overlay">
                <h2>Stm paying guest<br>maheru<br></h2>
               </div>
               </div>
               <div class="card-body">
                <h4 class="card-title">Available for both girls and boys</h4>
                <p class="card-text">foood and laundry facility available</p>
              <button class="btn btn-danger"  id="Myimg21">for more</button>
              <div class="modal fade" id="Mymodal21">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button> 
               <h4 class="modal-title">
                 <img class="img-responsive"  src="image/stm.jpg" style="width:300px;height:200px;">
                </h4>                                                             
             </div> 
             <div class="modal-body">
             <h3>STM PAYING GUEST</h3><br>
             <p> Maheru road, maheru- phagwara - 144402, near Addiction Gym</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9465853502</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; food facility is available</p>
             <p>AC and NON AC both are available</p>
            </div>   
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
            </div>                                                                       
            </div>                                      
            </div>
            </div>
        </div>
        </div>

         <div class="col-md-2"></div>
</div><br>


    <div class="row">
         <div class="col-md-2"></div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
              <div class="hovereffect">
              <img class="card-img-top" src="image/priya.jpg" style="width:270px;height:250px;" alt="Card image cap">
              <div class="overlay">
                <h2>priya pg<br>lawgate<br></h2>
              </div>
              </div>
              <div class="card-body">
                <h4 class="card-title">available for both</h4>
                <p class="card-text">no food and laundry</p>
             <button class="btn btn-danger"  id="Myimg22">Go for more</button>
             <div class="modal fade" id="Mymodal22">
             <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button> 
               <h4 class="modal-title">
                 <img class="img-responsive"  src="image/priya.jpg" style="width:300px;height:200px;">
                </h4>                                                             
             </div> 
             <div class="modal-body">
             <h3>PRIYA PG</h3><br>
             <p>LawGate, Phagwara, Maheru - 144401, near Lovely Professional University</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 8591664443</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
          
             <p>AC and NON AC both are available</p>
             </div>   
             <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
             </div>                                                                       
             </div>                                      
             </div>
             </div>
        </div>
        </div>

         <div class="col-md-3">
         <div class="card" style="width: 18rem;">
             <div class="hovereffect">
             <img class="card-img-top" src="image/no.png" style="width:270px;height:250px;" alt="Card image cap">
             <div class="overlay">
                <h2>raj pg<br>phagwara<br></h2>
             </div>
             </div>
             <div class="card-body">
                <h4 class="card-title">for both</h4>
                <p class="card-text">no laundry and food facility</p>
             <button class="btn btn-danger"  id="Myimg23">for more</button>
             <div class="modal fade" id="Mymodal23">
             <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/no.png" style="width:300px;height:200px;">
                </h4>                                                             
             </div> 
             <div class="modal-body">
             <h3>RAJ PG</h3><br>
             <p>House No-209, Guru Hargobind Nagar, Phagwara - 144401, Mehru, University View Estate,Near Lovely Professional University</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 8725971320</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             
             <p>AC and NON AC both are available</p>
             </div>   
             <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
             </div>                                                                       
             </div>                                      
             </div>
             </div>
        </div>
        </div>

        
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <div class="hovereffect">
            <img class="card-img-top" src="image/huddu.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>huddu suddu<br>phagwara<br></h2>
            </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">available for both boys and girls</h4>
                <p class="card-text">Food facility available</p>
               <button class="btn btn-danger"  id="Myimg24">for more</button>
            <div class="modal fade" id="Mymodal24">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/huddu.jpg" style="width:300px;height:200px;">
                </h4>                                                             
            </div> 
            <div class="modal-body">
             <h3>HUDDU SUDDU PG</h3><br>
             <p>Law Gate Road, Phagwara HO, Phagwara - 144401, Opposite HDFC BANK</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 6284404465</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; food facility is available</p>
             <p>AC and NON AC both are available</p>
             </div>   
             <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
             </div>                                                                       
             </div>                                      
             </div>
             </div>
        </div>
        </div>

         <div class="col-md-2"></div>
</div><br>


    <div class="row">
         <div class="col-md-2"></div>
        

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
              <div class="hovereffect">
              <img class="card-img-top" src="image/no.png" style="width:270px;height:250px;" alt="Card image cap">
              <div class="overlay">
                <h2>Sukhwinder pg<br>phagwara<br></h2>
              </div>
              </div>
              <div class="card-body">
                <h5 class="card-title">for both girls and boys</h5>
                <p class="card-text"></p>
              <button class="btn btn-danger"  id="Myimg25">for more</button>
             <div class="modal fade" id="Mymodal25">
             <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/no.png" style="width:300px;height:200px;">
                </h4>                                                             
             </div> 
             <div class="modal-body">
             <h3>SUKHWINDER PG</h3><br>
             <p>Daddal Mohalla, Phagwara - 144401, Suddan Mohalla, Moti Bazaar</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9988314142</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             
             <p>AC and NON AC both are available</p>
              </div>   
              <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
              </div>                                                                       
              </div>                                      
              </div>
              </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
              <div class="hovereffect">
              <img class="card-img-top" src="image/sardar.jpg" style="width:270px;height:250px;" alt="Card image cap">
              <div class="overlay">
                <h2>as pg<br>lawgate<br></h2>
              </div>
              </div>
              <div class="card-body">
                <h5 class="card-title">for both</h5>
                <p class="card-text"></p>
               <button class="btn btn-danger"  id="Myimg26">for more</button>
              <div class="modal fade" id="Mymodal26">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/sardar.jpg" style="width:300px;height:200px;">
                </h4>                                                             
               </div> 
              <div class="modal-body">
              <h3>AS PG</h3><br>
              <p>House number 145, Central town, Phagwara, Punjab 144401</p><br>
              <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91  9357749301</p>
              <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
              <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
              <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
              <p>AC and NON AC both are available</p>
              </div>   
              <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
              </div>                                                                       
              </div>                                      
              </div>
              </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/no.png" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>Sukh property advisor<br>phagwara<br></h2>
            </div>
          </div>
           <div class="card-body">
                <h4 class="card-title">for both</h4>
                <p class="card-text"></p>
        <button class="btn btn-danger"  id="Myimg27">Go for more</button>
        <div class="modal fade" id="Mymodal27">
        <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/no.png" style="width:300px;height:200px;">
                </h4>                                                             
               </div> 
               <div class="modal-body">
               <h3>SUKH PROPERTY ADVISOR</h3><br>
               <p>LawGate, Phagwara, Maheru - 144401, near Lovely Professional University</p><br>
               <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9899706455</p>
               <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
               <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
               <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
               <p>AC and NON AC both are available</p>
               </div>   
               <div class="modal-footer"><button type="button" class="btn btn-default"  data-dismiss="modal">Close</button></div>
               </div>  
               </div>                                      
               </div>
              </div>
        </div>
        </div>

         <div class="col-md-2"></div>
</div>


    </div>



    <div id="four" class="tab-pane fade">
    <div class="row">
         <div class="col-md-2"></div>

   
         <div class="col-md-3">
         <div class="card" style="width: 18rem;">
         <div class="hovereffect">
          <img class="card-img-top" src="image/no.png" style="width:270px;height:250px;" alt="Card image cap">
          <div class="overlay">
          <h2>Second home<br>lawgate<br></h2>
          </div>
          </div>
           <div class="card-body">
                <h4 class="card-title">FOR BOTH GIRLS AND BOYS</h4>
                <p class="card-text">FOOD FACILITY </p>
           <button class="btn btn-danger"  id="Myimg28">for more</button>
           <div class="modal fade" id="Mymodal28">
           <div class="modal-dialog">
           <div class="modal-content">
           <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button> 
                 <h4 class="modal-title">
                 <img class="img-responsive"  src="image/no.png" style="width:300px;height:200px;">
                </h4>                                                             
           </div> 
           <div class="modal-body">
             <h3>SECOND HOME </h3><br>
             <p>Law Gate Colony,Maheru, Phagwara, Punjab 144411</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 82180 80537</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
             <p>AC and NON AC both are available</p>
               </div>   
                <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                </div>                                                                       
                </div>                                      
                </div>
                </div>
        </div>
        </div>

       
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/uv.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>Uv paying guest<br>hardaspur<br></h2>
            </div>
          </div>
           <div class="card-body">
                <h4 class="card-title">Available for both</h4>
                <p class="card-text"></p>
               <button class="btn btn-danger"  id="Myimg29">for more</button>
        <div class="modal fade" id="Mymodal29">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button> 
       <h4 class="modal-title">
                 <img class="img-responsive"  src="image/uv.jpg" style="width:300px;height:200px;">
                </h4>                                                             
       </div> 
      <div class="modal-body">
             <h3>UV PG</h3><br>
             <p>LawGate, Phagwara, Maheru - 144401, near Lovely Professional University</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9466897264</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
             <p>AC and NON AC both are available</p>
            </div>   
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
            </div>                                                                       
            </div>                                      
            </div>
            </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/kanha.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>kanha pg<br>phagwara<br></h2>
            </div>
          </div>
           <div class="card-body">
                <h5 class="card-title">For girls only</h5>
                <p class="card-text"></p>
            <button class="btn btn-danger"  id="Myimg30">for more</button>
            <div class="modal fade" id="Mymodal30">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button> 
                <h4 class="modal-title">
                 <img class="img-responsive"  src="image/kanha.jpg" style="width:300px;height:200px;">
                </h4>                                                             
                </div> 
      <div class="modal-body">
             <h3>KANHA PG</h3><br>
             <p>h no:232/1, Guru Hargobind Nagar, Phagwara - 144401, back virk hospital</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9501081164</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
            
             <p>AC and NON AC both are available</p>
              </div>   
              <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
              </div>                                                                       
              </div>                                      
              </div>
              </div>
        </div>
        </div>

         <div class="col-md-2"></div>
</div><br>

         <div class="row">
         <div class="col-md-2"></div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="hovereffect">
          <img class="card-img-top" src="image/shiv.jpg" style="width:270px;height:250px;" alt="Card image cap">
            <div class="overlay">
                <h2>shiv pg<br>phagwara<br></h2>
            </div>
          </div>
          <div class="card-body">
                <h5 class="card-title">For both boys and girls</h5>
                <p class="card-text"></p>
<button class="btn btn-danger"  id="Myimg31">for more</button>
        <div class="modal fade" id="Mymodal31">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button> 
       <h4 class="modal-title">
                 <img class="img-responsive"  src="image/shiv.jpg" style="width:300px;height:200px;">
                </h4>                                                             
       </div> 
      <div class="modal-body">
             <h3>SHIV PG</h3><br>
             <p>Prem Nagar, Railway Road, Phagwara HO, Phagwara - 144401</p><br>
             <p> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;Contact no. +91 9888554343</p>
             <p> <span class=" glyphicon glyphicon-bed" aria-hidden="true"></span>&nbsp; 2,3,4 seater beds available</p>
             <p><span class=" glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp; Available for both boys and girls</p>
             <p><span class=" glyphicon glyphicon-grain" aria-hidden="true"></span>&nbsp; Mess is available</p>
             <p>AC and NON AC both are available</p>
               </div>   
               <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
               </div>                                                                       
               </div>                                      
               </div>         
               </div>
        </div>
        </div>


        

    
</div> 

    </div>
  </div>
</div>

<br>


        <div class="container-fluid">
        <div class="row">   
        <div class="col-md-4"></div>
        <div class="col-md-4">
             <ul class="nav nav-pills " >
                <li class="active"><a data-toggle="pill" href="#one"> 1</a></li>
                <li><a data-toggle="pill" href="#two">2</a></li>
                <li ><a data-toggle="pill" href="#three">3</a></li>
                <li ><a data-toggle="pill" href="#four">4</a></li>
               
                
             </ul>
        </div>
        <div class="col-md-4"></div>
        </div>
        </div>
  
        <br><br>

     <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
          <div class="container text-center">
             <h4>About Us</h4><br>
                <p>PGMS has been created keeping in mind about the students who come from different places to study in the Lovely Professional University</p>
                <p>PGMS Help You to Find PG, Hostels, Apartments & much more with Suitable Accommodation.  </p>
          </div>
     </footer>


</body>
</html>
