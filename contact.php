<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/logo.png">
<title>Contact Us|AHSL</title>
<!-- Bootstrap core CSS -->
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/plugins.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="style/css/color/blue.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="style/type/icons.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <?php include ("header.php")?>
  
  <div class="offset"></div>
<!--  <div id="map"></div>-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1xdEVYy8IZdBKJGQp_QpDWaNQT7ZHGhY&amp;sensor=false&amp;extension=.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA1xdEVYy8IZdBKJGQp_QpDWaNQT7ZHGhY'></script><div style='overflow:hidden;height:464px;width:1690px;'><div id='gmap_canvas' style='height:464px;width:1690px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>  <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=17c609c4f27a2a76cefbb1c6422ad35be7a474a1'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-1.3067472,36.86823730000003),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-1.3067472,36.86823730000003)});infowindow = new google.maps.InfoWindow({content:'<strong>Advanced Healthcare Solutions Limited</strong><br>Pate Road<br> Nairobi<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-8">
          <h2 class="section-title">Get in Touch</h2>
          <p>We would love to get your feedback about our services or even just say hi by dropping a message!</p>
          <div class="divide10"></div>
          <div class="form-container">
              <form action="sendmessage.php" method="post">
                <input type="hidden" value="info@ahsl.co.ke" name="send_to" />
                <input type="hidden" value="no-reply@ahsl.co.ke" name="send_from" />
                <input type="hidden" value="contact.php" name="redirect" />
                <input type="hidden" value="Contact Form Submission" name="subject" />
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="name" placeholder="Your name" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="email" name="email" placeholder="Your e-mail" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="tel" name="tel" placeholder="Phone">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label class="custom-select">
                      <select name="department" required="required">
                        <option value="">Select Department</option>
                        <option value="Sales">Sales</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Support">Customer Support</option>
                        <option value="Other">Other</option>
                      </select>
                      <span><!-- fake select handler --></span> </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column --> 
              </div>
              <!--/.row -->
              <textarea name="msg" placeholder="Type your message here..." required="required"></textarea>
              <div class="radio-set">
                <label>Subject:</label>
                <label>
                  <input type="radio" name="subject" value="General">
                  <span><!-- fake radio --></span> General</label>
                <label>
                  <input type="radio" name="subject" value="Hi">
                  <span><!-- fake radio --></span> Say Hi</label>
                <label>
                  <input type="radio" name="subject" value="Other">
                  <span><!-- fake radio --></span> Other</label>
              </div>
              <!--/.radio-set -->
              <input type="submit" class="btn" value="Send" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
              <footer class="notification-box"></footer>
            </form>
            <!--/.vanilla-form --> 
          </div>
          <!--/.form-container --> 
          
        </div>
        <!--/column -->
        
        <aside class="col-sm-4">
          <div class="sidebox widget">
            <h3 class="widget-title">Address</h3>
            <p></p>
            <address>
              <strong>Industrial Area Office</strong><br>
              No 8 Pate Road, Off Lunga Lunga Road <br>
              P.O. Box 52999 - 00200, Nairobi<br>
              <abbr title="Phone">P:</abbr> +254 (020) 26 22 010 <br>
              <abbr title="Email">E:</abbr> <a href="mailto:#">info@ashl.co.ke</a>
            </address>
            <address>
            <strong>Ngong Road Office</strong><br>
              Muchai Drive, Off Ngong Road <br>
              P.O. Box 52999 - 00200, Nairobi<br>
            <abbr title="Phone">P:</abbr> +254 722 908 874 <br>
            <abbr title="Email">E:</abbr> <a href="mailto:#">info@ashl.co.ke</a>
            </address>
          </div>
          <!-- /.widget --> 
          
        </aside>
        <!--/column --> 
        
      </div>
      <!--/.row --> 
      
    </div>
    <!--/.container --> 
  </div>
  <!--/.light-wrapper -->

  <?php include("footer.php");?>
</main>
<!--/.body-wrapper --> 
<script src="style/js/jquery.min.js"></script> 
<script src="style/js/bootstrap.min.js"></script> 
<script src="style/js/plugins.js"></script> 
<script src="style/js/classie.js"></script> 
<script src="style/js/jquery.themepunch.tools.min.js"></script> 
<script src="style/js/scripts.js"></script>
<!-- DEMO ONLY -->
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/aqua.css" title="lydiaaqua-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/blue.css" title="lydiablue-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/brown.css" title="lydiabrown-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/forest.css" title="lydiaforest-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/green.css" title="lydiagreen-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/lime.css" title="lydialime-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/orange.css" title="lydiaorange-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/pink.css" title="lydiapink-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/purple.css" title="lydiapurple-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/red.css" title="lydiared-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="switcher/rose.css" title="lydiarose-color" media="screen" />
<script type="text/javascript" src="switcher/switchstylesheet.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
	$(".changecolor").switchstylesheet( { seperator:"color"} );
});
</script>
</body>
</html>