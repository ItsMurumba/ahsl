<?php
    /* This script emails whatever is posted to it and
    * requires the form to have a hidden input named "redirect"
    *
    * Alternatively, the $_POST array can be set to $_GET in
    * order to compose a message from variables in the query string.
    */

   // The redirect url is required and prevents non-form-posted processing.
   if (isset($_POST['redirect']))
   {
      
      // Set up message
      $cname = $_POST['name'];
      $cemail = $_POST['email'];
      $cphone = $_POST['tel'];
      $send_to = $_POST['send_to'];
      $send_from = $_POST['send_from'];
      $subject  = $_POST['subject'];
      $redirect  = $_POST['redirect'];
      $department = $_POST['department'];

      // Set up the header
      $header  = "From: " . $send_from . "\r\n";
      $header .= "X-Mailer: PHP/" . phpversion();

      // Build the message
     
      $message = "Name:". $cname . "\n" ."Email:". $cemail.  "\n" ."Department:". $department. "\n" ."Phone:" . $cphone . "\n" . "Message:"  . $_POST['msg'];

      // Send the email
      // The '@' surpresses errors.
      @mail($send_to, $subject, $message, $header);

      $message = "Thanks for contacting us. We will get back to you shortly";
	echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>window.location= 'contact.php';</script>";
   }
?>