<?php 
if (isset($_POST['homeBtn'])) {
  sendmail("Home Service");
} 
elseif (isset($_POST['dryBtn'])) {
  sendmail("Dry Cleaning");
} 
elseif (isset($_POST['carBtn'])) {
  sendmail("Car Wash");
}

function sendmail($booking) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $subject = "JD Laundry - " . $booking;
  $emailSendMessage = $_POST['msg'];
  $to = "denisuchenna@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Client Name: " . $name . "</h1>
  	<h2> Client Email: " . $email . "</h2>
  	<h2> Client Phone Number: " . $phone . "</h2>
  	<h2> Client Address: " . $address . "</h2>
    <h2> Requested Service: " . $booking . "</h2>
    <h4> Client Message: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   header("Location: index.php?success=1");
    exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: index.php");
   exit();
  }
}

//footer contact form
if (isset($_POST['contact_msg'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $emailSendMessage = $_POST['message'];
  $to = "denisuchenna@gmail.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8";
  $message = "<html>
  <head>
  	<title>Mail</title>
  </head>
  <body>
  	<h1> Fullname of Sponsor: " . $name . "</h1>
  	<h2> Email of Sponsor: " . $email . "</h2>
    <h4>Message to the couple: ".$emailSendMessage."</h4>
  </body>
  </html>";
  if (mail($to, $subject, $message, $headers)) {
   header("Location: index.php?success=1");
    exit();
  }else{
   echo "sorry, Failed to send email. Please try again later";
   header("Location: index.php");
   exit();
  }
}

?>