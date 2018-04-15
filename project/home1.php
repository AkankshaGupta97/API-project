
<!DOCTYPE html>
<html>
<head>
	<title>Home_Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="app.css">
 
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> 
  <script src="home.js"></script>
  <style>
.container1 {
  position: relative;
  width: 50%;
}

.image {
  display: inline;
  width: 150%;
  height: 100%;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #9999ff;
  overflow: hidden;
  width: 150%;
  height:0;
  transition: .5s ease;
}

.container1:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
hr.type_10 {
border: 0;
height: 55px;
width:50%;
background-image: url(t.png);
background-repeat: no-repeat;
margin-left:25% 
}
     #map-canvas{
width: 800px;
height: 300px;

            
            margin-left: 1%;
}
</style>
</head>
<body id="grad">
<nav class="navbar  navbar-fixed-top" >
  <div class="container">
    <div class="navbar-header">
   <h3 style="margin-top: 5%;margin-left:-36%;"><img src="med.png" height="30px" width="40px">ContactDoctor</h3>
    </div>
    <div id="navbar" class="collapse navbar-collapse ">
      <ul class="nav navbar-nav">
        <li><a class="nav" href="#r1">Home</a></li>
        <li><a href="#about" class="nav">About</a></li>
        <li><a class="nav" href="#contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a  href="#sign_up" class="sign_up">Signup  <i class="fa fa-user-plus"></i></a></li>
        <li><a  href="#login" class="myBtn">Login  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

  	<div class="row" style="margin-top: -6%;">
 		<div class="col-lg-12" style=" background: #000000;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #434343, #000000);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #434343, #000000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
        
       <div class="container" style="margin-top:-5%;">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="med1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="med2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="med3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

 		</div>
    </div>
    <br>
    <hr class="type_10">

    <div class="container">

    <div class="row" id="about">
    <div class="col-lg-12">
     <h2 style="color:black;text-align:center; font-family: Arial, Helvetica, sans-serif;">About Us</h2>
     <p style="font-family: Arial, Helvetica, sans-serif; font-weight: 4em;" >iMedicalSpot is an online medical provider that aims to treat common medical ailments by Board Certified Physicians from the comfort of their home or office 24/7/365.

Patients are able to receive an online consultation and prescription transmitted to the pharmacy of their choice from their computer or Smartphone. The concept was conceived by Dr. Narendra K. Garg, a board-certified Internist who in his 30+ years of private practice noticed that the majority of patients waiting to see him or calling his office were seeking prescriptions for minor, easily diagnosable conditions such as UTI.</p><br><br>
     <div class="row" class="first">
     <div class="col-lg-4">
     <div class="container1">
  <img src="me.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Dr Jaby Kovy</div>
  </div>
</div>

     </div>
     <div class="col-lg-4">
     <div class="container1">
  <img src="m3.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Dr Achaara krik</div>
  </div>
</div>

     </div>
<div class="col-lg-4">
     <div class="container1">
  <img src="m2.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Dr Robert Kurt</div>
  </div>

</div>
     </div>
    </div>
 	</div>
  </div>
  <br>
  <br>
  <br>
      <hr class="type_10">

  <div class="row" id="contact">
  <div class="col-lg-12">
     <h2 style="color:black;text-align:center; font-family: Arial, Helvetica, sans-serif;">Contact</h2>
 <div class="form">
 <form><div style="margin-left: 20%;margin-top: 8%;">
  <div class="form-group">
              <label for="usrname"> Name</label>
              <input type="text" class="form-control" id="usrname" placeholder="Name" style="width:60%;">
            </div>
            <div class="form-group">
              <label for="Message">Message</label>
              <input type="textarea" rows="60" cols="50" class="form-control" id="message" placeholder="Message" style="height:100px;width:300px;">
            </div>

             <div class="form-group">
              <label for="email"> Email</label>
              <input type="text" class="form-control" id="usrname" placeholder="email" style="width:60%;">
            </div>
            <div class="form-group">
              <label for="email">Mobile</label>
              <input type="text" class="form-control" id="phone" placeholder="mobile number" style="width:60%;">
            </div>
              <button type="submit" class="btn btn-primary btn-block" style="width:40%;" > Send</button>
              </div>
              </form>
 </div>
 </div>
 </div>
 </div><BR><BR><BR>
 <div class="row1">
<div class="row"> <div class="col-lg-10"id="map-canvas"></div>
  <div class="col-lg-2" id="contact">
  <p ><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp &nbspHead Office : Shimla<br><br><i class="fa fa-phone" aria-hidden="true"></i>&nbsp &nbsp phone no.: 0177-23452 <br><br><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp &nbspemail:imedical@gmail.com<br><br><br><u>follow at</u> <br><i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp &nbsp Facebook<br><br><i class="fa fa-google-plus" aria-hidden="true"></i> &nbsp &nbspGoogle+<br><br><i class="fa fa-instagram" aria-hidden="true">&nbsp &nbsp Instagram</i>

</p>
  </div>
 </div>
  </div>

 

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
 
      <div class="modal-content" style="color: black;">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post"  name="registrationn"  action="login.php">
            <div class="form-group">
              <label for="usrname"><i class="fa fa-key" aria-hidden="true"></i> Username</label>
              <input type="text" class="form-control" name="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw">Password</label>
              <input type="text" class="form-control" name="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
         
          <p>Not a member? <a style="color: blue;" href="#Signup" class="sign_up" data-dismiss="modal">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 



 
<script>
$(document).ready(function(){
    $(".sign_up").click(function(){
        $("#myModal1").modal();
    });
});
</script>

 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
     <script type="text/javascript" src="validate.js"></script>

 
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><i class="fa fa-user-plus" aria-hidden="true"></i>  Sign Up</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" style="color:black;"   method="post" name="registration" action="sigup.php">
           <div class="form-group">
              <label for="usrname"></i> Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="usrname">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw">Password</label>
              <input type="text" class="form-control" name="psw" placeholder="Enter password">
            </div>
          
              <button type="submit" class="btn btn-primary btn-block" name="btn">Sign Up</button>
              </form>
          
        </div>
        <div class="modal-footer">
         
          <p>Already a member?<a style="color: blue;href="#login" class="myBtn" data-dismiss="modal">Login</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>

 
<script>
$(document).ready(function(){
    $(".myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>