<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By Kev Murumba">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Stallar, company, limited, construction, Materials">
    <link rel="shortcut icon" href="img/aaa.jpg">

    <title>
      STALLAR | Contact
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
<script src="js/html5shiv.js">
</script>
<script src="js/respond.min.js">
</script>
<![endif]-->
  </head>

  <body>
<?php
    	include('header.php');
    ?>

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Contacts
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="#">
                  Home
                </a>
              </li>              
              <li class="active">
                Contact Us
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->



    <!--container start-->
    <div class="container">


      <div class="row">
        <div class="col-lg-5 col-sm-5 address">
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              ADDRESS
            </h4>
            <address>
              Solos Apartment, 1st Floor, 1A
              <br>
              P.O BOX 58751-00200,
              <br>
              Kahawa Sukari, NBI
            </address>
          </section>
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              BUSINESS HOURS
            </h4>
            <p>
              Monday - Friday 6am to 6pm
              <br>
              Saturday - 6am to 3pm
              <br>
              Sunday- Closed
              <br>
            </p>
          </section>
          <section class="contact-infos">
            <h4>
              TELEPHONE
            </h4>
            <p>
              <i class="icon-phone">
              </i>
              +254 725 066 821
            </p>

            <p>
              <i class="icon-phone">
              </i>
              +254 711 830 150
            </p>

          </section>
        </div>
        <div class="col-lg-7 col-sm-7 address">
          <h4>
            Drop a message to Stallar.
          </h4>
          <div class="contact-form">
            <form action="sendmessage.php" method="post">
			   <input type="hidden" value="info@ahsl.co.ke" name="send_to" />
			   <input type="hidden" value="no-reply@ahsl.co.ke" name="send_from" />
			   <input type="hidden" value="contact.html" name="redirect" />
			   <input type="hidden" value="Contact Form Submission" name="subject" />
              <div class="form-group">
                <label for="name">
                  Name
                </label>
                <input type="text" placeholder="Your Name" name="name" class="form-control" required data-validation-required-message="Please enter your name" >
              </div>
              <div class="form-group">
                <label for="email">
                  Email
                </label>
                <input type="text" placeholder="Your email address" name="email" class="form-control" required data-validation-required-message="Please enter your email address.">
              </div>
              <div class="form-group">
                <label for="phone">
                  Phone
                </label>
                <input type="text" placeholder="Your phone number" name="phone" class="form-control" required data-validation-required-message="Please enter your email address.">
              </div>
              <div class="form-group">
                <label for="phone">
                  Message
                </label>
                <textarea placeholder="Your message"  name="msg" rows="5" class="form-control" required data-validation-required-message="Enter your message">
                </textarea>
              </div>
              <button class="btn btn-info" name="submit" type="submit">
                Submit
              </button>
            </form>

          </div>
        </div>
      </div>

    </div>
    <!--container end-->

    <!--google map start-->
    <div class="contact-map">
      <div id="map-canvas" style="width: 100%; height: 400px">
      </div>
    </div>
    <!--google map end-->

    <?php
    	include('footer.php');
    ?>
    

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="js/hover-dropdown.js">
    </script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false">
    </script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>
    <script src="js/wow.min.js">
    </script>
    <script>
      wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0          // default
        }
      )
        wow.init();
    </script>


    <script>
      $(document).ready(function() {
        //Set the carousel options
        $('#quote-carousel').carousel({
          pause: true,
          interval: 6000,
        }
                                     );
      }
                       );

      //google map
      function initialize() {
        var myLatlng = new google.maps.LatLng(-1.1902386,36.9314731);
        var mapOptions = {
          zoom: 18,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Contact'
        }
                                           );
      }
      google.maps.event.addDomListener(window, 'load', initialize);



    </script>
   	

  </body>
</html>
