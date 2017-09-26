
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Testing Astrology Webpage</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
 
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
   
</script>
        <style>
        body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
}
          .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
       font-family: Montserrat, sans-serif;
      
      
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .my_container{
    padding:0;   
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
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
  .carousel-control.right, .carousel-control.left{
    background-image: none;
    color:#f4511e;
  }
  .carousel-indicators li{
    border-color: #f4511e;
  }
  .carousel-indicators li.active{
    background-color:#f4511e;
  }
  .item h4{
    font-size:19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin:70px 0;
  }
  .item span{
    font-style:normal;
  }
  
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
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
    color: #f4511e !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}

 footer .glyphicon{
    font-size: 20px;
    margin-bottom: 20px;
    color:#f4511e;
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



.slideanim{
    visibility: hidden;
}

.slide{
    animation-name:slide;
    -webkit-animation-name:slide;
    animation-duration: 1s;
    -webkit-animation-duration:1s;
    visibility: visible;
}

@keyframes slide{
    0%{
        opacity: 0;
        transform: translatey(70%);
    }
    
    100%{
        opacity: 1;
        transform: translatey(0%);
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
    
    .btn{
        margin-top:5px;
    }
    
    .jumbotron{
        height:630px;
        
    }
    
}
  .news_div{
    height:300px;
    overflow: auto;
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
                    <a class="navbar-brand"  data-toggle="modal" data-target="#myModal">Log In</a>

                     <!-- Modal -->
                         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
                          <div class="modal-dialog">
    
                  <!-- Modal content-->
                 <div class="modal-content">
                   <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal"  aria-hidden="true">&times;</button>
                <h2 class="form-signin-heading">Connect to me...</h2>
                 </div>
                 <div class="modal_body">
                 
      <?php
  if(isset($_GET['inactive']))
  {
   ?>
            <div class='alert alert-error'>
    <button class='close' data-dismiss='alert'>&times;</button>
    <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it.
   </div>
            <?php
  }
  ?>
                     <form class="form-signin" method="post" id="login-form">

         <?php
       if(isset($_GET['error']))
 {
  ?>
           <div class='alert alert-success'>
   <button class='close' data-dismiss='alert'>&times;</button>
   <strong>Wrong Details!</strong>
  </div>
           <?php
 }
 ?>

         

            <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email address" name="txtemail" required />
                  <span id="check-e"></span>
            </div>
            <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" name="txtpass" required />
            </div>
            <hr />

            <div class="form-group">
                  <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		              <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			             </button>

                   <a id="Sign_up" style="float:right;"  data-dismiss="modal" data-toggle="modal" data-target="#myModal2" class="btn btn-default">Sign Up</a><hr />
                   <a class="forget" href="fpass.php">Forget Password ? </a>
        </div>
    </form>
             </div>
             <div class="modal-footer">
        
        </div>
      </div>
      
    </div>
  </div>
    
                 
</div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                
                    <ul class="nav navbar-nav navbar-right">
                     <li><a href="#myPage">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                         <li><a href="#services">SERVICES</a></li>
                         <li><a href="#portfolio">GALLERY</a></li>
                        
                         <li><a href="#contact">CONTACT</a></li>
                    </ul>
                    
                </div>
                
            </div>
            
         </nav>
        <div class="jumbotron text-center">
            <h1>Welcome In Astrology World</h1>
            <p>We Specilize in Astrology</p>
           
            <form class="form-inline">
                <input type="email" class="form-control" size="50" placeholder="Your Email..."/>
                <button type="button" class="btn btn-danger">Subscribe</button>
            </form>
             <div class="mov_round_div">
                <img class="img-responsive" src="images/astro_symbols.png" />
            </div>
          </div>
          <!-- rasi container-->
          <h1 id="about" style="text-align: center;">SUNSIGN</h1>
           <div   class="container-fluid my_container" >
                 
                                   <!-- Modal -->
  <div class="modal fade" id="rasi_model" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
                        <div class="rasi " >
                        <div class="rasi_div rasi_div1 text-center" style="color:#a51717;">
                        <div class="slideanim1" style="-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s; z-index:3">
                           <a data-toggle="modal" data-target="#rasi_model"> <img  class="img-responsive rasi_img " src="images/1.png" />
                             <h5>LEO</h5>
                              </a>
                             </div>
                           
                         </div>
                         <div class="rasi_div rasi_div2 text-center" style="color:#1d79f2;">
                         <div class="slideanim1" style=" -webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s; z-index:7">
                             <a data-toggle="modal" data-target="#rasi_model"> <img  class="img-responsive rasi_img" src="images/2.png" />
                             <h5>SCORPIO</h5></a>
                            </div>
                         </div>
                           <div class="rasi_div rasi_div3 text-center" style="color: #f76c16;">
                            <div class="slideanim1" style=" -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s; z-index:9">
                            <a data-toggle="modal" data-target="#rasi_model">  <img  class="img-responsive rasi_img" src="images/3.png" />
                             <h5>CAPRICORN</h5></a>
                             </div>
                         </div>
                           <div class="rasi_div rasi_div4 text-center" style="color:#09d602;">
                           <div class="slideanim1" style=" -webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s; z-index:11">
                           <a data-toggle="modal" data-target="#rasi_model">   <img  class="img-responsive rasi_img" src="images/4.png" />
                             <h5>LIBRA</h5></a>
                            
                             </div>
                         </div>
                            <div class="rasi_div rasi_div5 text-center"  style="color:#a51717;">
                            <div class="slideanim1" style=" -webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s; z-index:13">
                            <a data-toggle="modal" data-target="#rasi_model">  <img  class="img-responsive rasi_img" src="images/5.png" />
                             <h5>ARIES</h5></a>
                             </div>
                         </div>
                            <div class="rasi_div rasi_div6 text-center" style="color:#1d79f2;">
                            <div class="slideanim1" style="-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s; z-index:15">
                            <a data-toggle="modal" data-target="#rasi_model">  <img  class="img-responsive rasi_img" src="images/6.png" />
                            <h5>PISCES</h5></a>
                            </div>
                         </div>
                          <div class="rasi_div rasi_div7 text-center" style="color: #f76c16;">
                          <div class="slideanim1" style=" -webkit-animation-delay: 0.7s; -moz-animation-delay: 0.7s; animation-delay: 0.7s; z-index:17">
                             <a data-toggle="modal" data-target="#rasi_model"> <img  class="img-responsive rasi_img" src="images/7.png" />
                             <h5>VIRGO</h5></a>
                             </div>
                         </div>
                           <div class="rasi_div rasi_div8 text-center" style="color:#09d602;">
                           <div class="slideanim1" style=" -webkit-animation-delay: 0.8s; -moz-animation-delay: 0.8s; animation-delay: 0.8s; z-index:19">
                             <a data-toggle="modal" data-target="#rasi_model"> <img  class="img-responsive rasi_img" src="images/8.png"  />
                            <h5>GEMINI</h5></a>
                            </div>
                         </div>
                            <div class="rasi_div rasi_div9 text-center" style="color:#a51717;">
                         <div class="slideanim1" style=" -webkit-animation-delay: 0.9s; -moz-animation-delay: 0.9s; animation-delay: 0.9s; z-index:21">
                             <a data-toggle="modal" data-target="#rasi_model"> <img  class="img-responsive rasi_img" src="images/9.png" />
                            <h5>SAGITTARIUS</h5></a>
                            </div>
                         </div>
                            <div class="rasi_div rasi_div10 text-center"  style="color:#1d79f2;">
                            <div class="slideanim1" style=" -webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s; z-index:22">
                             <a data-toggle="modal" data-target="#rasi_model"> <img  class="img-responsive rasi_img" src="images/10.png" />
                            <h5>CANCER</h5></a>
                            </div>
                         </div>
                             <div class="rasi_div rasi_div11 text-center" style="color: #f76c16;">
                             <div class="slideanim1" style=" -webkit-animation-delay: 1.1s; -moz-animation-delay: 1.1s; animation-delay: 1.1s; z-index:24">
                             <a data-toggle="modal" data-target="#rasi_model"> <img  class="img-responsive rasi_img" src="images/11.png" />
                              <h5>TAURUS</h5></a>
                              </div>
                         </div>
                           <div class="rasi_div rasi_div12 text-center" style="color:#09d602;">
                           <div class="slideanim1" style=" -webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s; z-index:27">
                             <a data-toggle="modal" data-target="#rasi_model"> <img  class="img-responsive rasi_img" src="images/12.png" />
                            <h5>AQUARIUS</h5></a>
                            </div>
                         </div>
                          
                       </div>
                </div>      
              
               
          
          <!--end rasi container-->
         <!-- Container (About Section) -->
        <div  class="container-fluid">
             <div class="row">
              <div class="col-sm-8">
               <h2>About Sanjay Tiwari</h2>
               <h4>Sanjay Tiwari is a visionary and thought leader. He believes that each and every one of us has the precious gift within ourselves to heal. We just need to learn how to use it.</h4>
              <p>While many practitioners may offer meditation, very few create programs that are firmly grounded in science and present the "why" beneath the "how".  Sanjay's comprehensive focused awareness meditation, an evidence-based practice, encourages understanding through learning, experience through practice, and mastery by teaching.</p>
              <a href="#contact" class="get_toh"><button class="btn btn-default btn-lg">Get in Touch</button></a>
         </div>
         <div class="col-sm-4 ">
              
               <img  class="autho_img img-responsive" src="images/autho_img.jpg" />
         </div>
        </div>
    </div>

        <div class="container-fluid bg-grey">
            <div class="row">
           
               <div class="col-sm-4 news">
                  <div class="panel panel-primary">
                      <div class="panel-heading">Panel with panel-primary class</div>
                          <div class="panel-body news_div">
                          <marquee direction="up"  scrollamount="3" loop="INFINITE" height="90%" onmouseover="this.stop();" onmouseout="this.start();">
                             <a href="#">There Is Currently No News</a><br />
                              <a href="#">There Is Currently No News</a><br />
                               <a href="#">There Is Currently No News</a><br/>
                                <a href="#">There Is Currently No News</a><br />
                                 <a href="#">There Is Currently No News</a><br />
                                  <a href="#">There Is Currently No News</a><br />
                                   <a href="#">There Is Currently No News</a><br />
                                    <a href="#">There Is Currently No News</a><br />
                                     <a href="#">There Is Currently No News</a><br />
                          </marquee>
                         
                          </div>
              </div>
               </div>
              
            <div class="col-sm-8 our_val">
           <h2>IMPORTANT ISSUES</h2>
              <h4>We all buy land and construct a home to line in, but seen that in that house there is no peace quarrel and tension goes on,
The problem behind is "construction site problems" are-
The main sign of "construction site problem" 

</h4>
              <p>1.	Money does not lest longer.<br/>
2.	 Family problem quarrel unfriendly behavior.<br />
3.	Health problem.<br />
4.	Early death in the house (before the age some are one is passed away in the family)   if  you see any of these problems<br />
It means your home "construction site problem". We have a solution without breaking the house so that your house, land, flat, office and factory can give you pleasant +money.                                                                                                                                   
</p>
            </div>
           </div>
      </div>
      <div id="services" class="container-fluid text-center ">
        <h2 class="slideanim ">SERVICES</h2>
        <h4 class="slideanim  ">What we offer</h4>
        <br />
        <div class="row slideanim">
            <div class="col-sm-4 srv_txt">
                <img  class="srv_img" src="images/srv_1.png" />
                <h4>MONEY CRISES</h4>
                <p><a id="srv_a" data-toggle="modal" data-target="#model_srv1">Read More..</a></p>
                <!-- Modal -->
  <div class="modal fade" id="model_srv1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
            </div>
            <div class="col-sm-4  ">
                <img  class="srv_img" src="images/srv_2.png" />
                <h4>BUSINESS HINDRANCE</h4>
               <p><a id="srv_a" data-toggle="modal" data-target="#model_srv1">Read More..</a></p>
            </div>
            <div class="col-sm-4 srv_txt">
                 <img  class="srv_img" src="images/srv_3.png" />
                <h4>LOVE MARRIAGE</h4>
               <p><a id="srv_a" data-toggle="modal" data-target="#model_srv1">Read More..</a></p>
            </div>
        </div>
        <br /><br />
        <div class="row slideanim ">
            <div class="col-sm-4 srv_txt">
               <img  class="srv_img" src="images/srv_4.png" />
                <h4>ENEMY FEAR</h4>
                <p><a id="srv_a" data-toggle="modal" data-target="#model_srv1">Read More..</a></p>
            </div>
            <div class="col-sm-4 srv_txt">
               <img  class="srv_img" src="images/srv_5.png" />
                <h4>CAREER</h4>
               <p><a id="srv_a" data-toggle="modal" data-target="#model_srv1">Read More..</a></p>
            </div>
            <div class="col-sm-4 srv_txt">
               <img  class="srv_img" src="images/srv_6.png" />
                <h4>FAMILY ISSUES</h4>
               <p><a id="srv_a" data-toggle="modal" data-target="#model_srv1">Read More..</a></p>
            </div>
        </div>
      </div>
      <div id="portfolio" class="container-fluid text-center bg-grey">
        <h2>GALLERY</h2><br />
       
      <div class="row text-center slideanim">
        <div class="col-sm-4 ">  
            <div class="thumbnail">
                <img src="images/gl1.png" alt="Paris" />
                <p><strong>Ashram</strong></p>
                
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="images/gl2.jpg" alt="Newyork" />
                <p><strong>Sadhna</strong></p>
                
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="images/gl3.jpg" alt="San Fransisco" />
                <p><strong>Dhyan</strong></p>
              
            </div>
        </div>
      </div>
      
     <h2>WHAT OUR FOLLOWERS SAY</h2>
  <div id="myCarousel" class="carousel slide text-center slideanim" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br/><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br/><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br/><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <!-- Container (Contact Section) -->
  
<div id="contact" class="container-fluid">
  <h2 class="text-center" >CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> UP,India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 4565768798</p>
      <p><span class="glyphicon glyphicon-envelope"></span> sanjaytiwari@gmail.com</p>
    </div>
    <div class="col-sm-7  slideanim">
      <div class="row">
      <form>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
          
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email"  required  />
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" required /></textarea><br/>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button id="contact_cutton" class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div style='overflow:hidden;height:440px;width:100%;'>
<div id='gmap_canvas' style='height:440px;width:100%;'>
</div>
<div><small><a href="http://www.embedgooglemaps.com/en/">Generate your map here, quick and easy!									Give your customers directions									Get found</a>
</small>
</div>
<div>
<small><a href="http://freedirectorysubmissionsites.com/">Monitored 24/7</a>
</small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(25.3176452,82.97391440000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(25.3176452,82.97391440000001)});infowindow = new google.maps.InfoWindow({content:'<strong>Sanjay Tiwari</strong><br>varansi, uttar preadesh, india<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Go To Top </p>
</footer>
 
 </body>
   <script type="text/javascript" src="js/main.js"></script>
</html>