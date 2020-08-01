<?php

if(isset($_POST['submit'])){
    $to = "prajwalsharma939@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $phone_no = $_POST['phone_no'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " " . "\n\n" . $_POST['phone_no']. "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }



// if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['phone_no']) && isset($_POST['message'])){

//   if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['phone_no']) && !empty($_POST['message'])){

//   $firstname = $_POST['firstname'];
//   $lastname = $_POST['lastname'];
//   $email = $_POST['email'];
//   $phone_no = $_POST['phone_no'];
//   $message = $_POST['message'];


  // if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  //   echo "Kindly provide valid email address";
//   } else {


//     $body = $firstname."\n".$lastname."\n".$email."\n".$phone_no."\n".$message;

//     if (mail('prajwalsharma939@gmail.com', 'Website Response', $body, 'From: response@mywebsite.com')){

    
//        echo "Thanks for contacting us!!";
      

//     } else {
//       echo "There is problem in sending mail!!";
//     }

// }

// }
// }
  




  
?>







<!DOCTYPE html>
<html>
<head>
    
	<title>Crime File Reporting System</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
</head>
    
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b>Crime File Reporting System</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Home.php">Home</a></li>
        <li class="active"><a href="About.php">About Us</a></li>
        <li class="active"><a href="FAQ.php">FAQ</a></li>
        <li class="active"><a href="location.php">Location</a></li>
        <li class="active"><a href="Emergency_Contacts.php">Emergency Contacts</a></li>
        <li class="active"><a href="safety_tips.php">Safety Tips</a></li>
        <li class="active"><a href="contact_us.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
 </nav>
 <style>
   body {
      padding: 100px;
   }
 </style>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>



<div class="container">
  <form  method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="firstname" name="firstname" required placeholder="Your first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lastname" name="lastname" required placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" required placeholder="Your email address..">

    <label for="phone_no">Phone Number</label>
    <input type="text" id="phone_no" name="phone_no" required placeholder="Your phone number..">

    <label for="subject">Message</label>
    <textarea id="message" name="message" required placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit">

  </form>
</div>

</body>
</html>
