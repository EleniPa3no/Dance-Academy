<html>
	<head> 
		<title>Discover Dance</title>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>jori gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
  <link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
  
  <script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/icomoon-social.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<style >

			.container-fluid {
		      padding: 60px 50px;
		  	}
		    .panel-footer .btn {
		       margin: 15px 0;
		       background-color: #f4511e;
		       color: #fff;
		  	}
		    @media screen and (max-width: 768px) {
		       .col-sm-4 {
		       text-align: center;
		       margin: 25px 0;
		       }
		    }
		  	.panel-footer {
		      background-color: white !important;
		  	}
		    .btn {
		      margin: 15px 0;
		      background-color: #f4511e;
		      color: #fff;
		    }
		    .btn:hover {
		      border: 1px solid #f4511e;
		      background-color: #fff !important;
		      color: #f4511e;
		    }
			h1{	text-align:center;
			  font-family: Monotype Corsiva;
			}
					
			.scroll-top-wrapper {
			    position: fixed;
				opacity: 0;
				visibility: hidden;
				overflow: hidden;
				text-align: center;
				z-index: 99999999;
			    background-color: #777777;
				color: #eeeeee;
				width: 50px;
				height: 48px;
				line-height: 48px;
				right: 30px;
				bottom: 30px;
				padding-top: 2px;
				border-top-left-radius: 10px;
				border-top-right-radius: 10px;
				border-bottom-right-radius: 10px;
				border-bottom-left-radius: 10px;
				-webkit-transition: all 0.5s ease-in-out;
				-moz-transition: all 0.5s ease-in-out;
				-ms-transition: all 0.5s ease-in-out;
				-o-transition: all 0.5s ease-in-out;
				transition: all 0.5s ease-in-out;
			}

			.scroll-top-wrapper:hover {
				background-color: #888888;
			}

			.scroll-top-wrapper.show {
			    visibility:visible;
			    cursor:pointer;
				opacity: 1.0;
			}

			.scroll-top-wrapper i.fa {
				line-height: inherit;
			}
 
		</style>
		<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
	</head>
	<body>

		<p style="margin-left:390px;">
		<nav class="navbar navbar-inverse" >
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	     <a href="2-aboutus.html"> <img src="https://s17.postimg.org/r398y0mj3/discover-dance.jpg" width="90" height="50"></a>
	    </div>

	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="1-Portfolio.html">Portfolio</a></li>
	        <li><a href="2-aboutus.html">About Us</a></li>
	        <li><a href="3-categories.html">Categories</a></li>
	        <li><a href="4-Contact.html">Contact</a></li>
	        <li><a href="5-Gallery.html">Gallery</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="register.php" ><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
		


 <!-- Container (Contact Section) -->
<div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Tirana e Re,Komuna e Parisit, Tirane</p>
      <p><span class="glyphicon glyphicon-phone"></span> (+355)4 45 0371</p>
      <p><span class="glyphicon glyphicon-envelope"></span> discover_dance@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap" ></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp); 
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d1201.553930821069!2d19.807566906028516!3d41.31811666143029!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e1!3m2!1sel!2s!4v1511522720164" width="50%" height="50%" frameborder="0" style="border:0" allowfullscreen> </iframe> 
	
</script>

<!-- scrolling on top button -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<div class="scroll-top-wrapper ">
			<span class="scroll-top-inner">
				<i class="fa fa-2x fa-arrow-circle-up"></i>
			</span>
		</div>
		
		<script>
			$(function(){
			 
				$(document).on( 'scroll', function(){
			 
					if ($(window).scrollTop() > 100) {
						$('.scroll-top-wrapper').addClass('show');
					} else {
						$('.scroll-top-wrapper').removeClass('show');
					}
				});
			 
				$('.scroll-top-wrapper').on('click', scrollToTop);
			});
 
			function scrollToTop() {
				verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
				element = $('body');
				offset = element.offset();
				offsetTop = offset.top;
				$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
			}
		</script>	
	</body>
</html>