<?php

// get the data from the form
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$from = 'Contact Form';
$to = 'pmack@preciousmack.com';
$subject = 'Message from Contact Form ';

$body = "From: $name\n E-Mail: $email\n Message: $message\n";

 if (empty($comments)) {
     $comments = "";
}

// validate email entry
if (empty($email)) {
	$error_message = "Email is a required field.";
// check if e-mail address syntax is valid
} else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
  $error_message = "Invalid email format";
}

// validate name entry
if (empty($name)) {
	$error_message = "Name is a required field.";
// ensures the field only containts letters and whitespace
} else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	$error_message = "Only Letters and White Space Allowed";
}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div id="contact"><h2>Thank You! I will be in touch soon!</h2></div>';
  } else {
    $result='<div id="contact"><h2>Sorry! There was an error sending your message. Please try again or email me at pmack@preciousmack.com.</h2></div>';
  }
}

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>Precious Mack - Design &amp; Development</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="scripts/script.js"></script>
</head>
<body>
	<main>
		<!-- Header Section-->
		<header id="header">
			<div class="navigation">
				<div class="half-width">
					<a href="http://www.preciousmack.com"><img src="img/new-logo.png" alt="Precious Mack Design and Development Logo" /></a>
				</div>
				<div class="half-width">
					<!-- Navigation-->
					<nav>
						<ul>
							<li>
								<a href="http://www.preciousmack.com">Home</a>
							</li>
							<li>
								<a href="http://www.preciousmack.com/#about">About</a>
							</li>
							<li>
								<a href="http://www.preciousmack.com/#portfolio">Portfolio</a>
							</li>
							<li>
								<a href="http://www.preciousmack.com/#contact">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

		<div class="full-width">
				<div class="header-text">
					<h3> Thank you for contacting me.<br> I will be in touch soon!</h3>
				</div>
			</div>
	</header>
			
		<!-- Contact Section -->
		
		<section id="contact">
			<div class="full-width">
				<div class="half-width">
					<h2>Let's talk about your project:</h2>
					<form id="contact-form" method="post" action="userinput.php">
						<input id="name" type="text" name="name" placeholder="Your Name" required>
						<br />
						<input id="email" type="email" name="email" placeholder="Your Email Address" required>
						<br />
						<textarea id="message" name="your message" placeholder="How can I help you?" rows="4" cols="50" required>
				</textarea>
						<br />
						<input id="submit-button" type="Submit" value="Submit">
					</form>
				</div>
				<div class="half-width">
					<p>I'm available for work remotely, but if you're in the Greater NYC area, send me a message or find me on the interwebs and let's grab a coffee.</p>
					<div class="social-media">
						<ul>
							<li>
								<a href="https://github.com/pfmack" target="_blank"><img src="img/github-square-brands.png" alt="github icon" /></a>
							</li>
							<li>
								<a href="https://codepen.io/pfmack/" target="_blank"><img src="img/codepen-brands.png" alt="codepen icon" /></a>
							</li>
							<li>
								<a href="https://www.linkedin.com/in/preciousmack/" target="_blank"><img src="img/linkedin-brands.png" alt="linkedin icon" /></a>
							</li>
							<li>
								<a href="https://twitter.com/geekytechiechic" target="_blank"><img src="img/twitter-square-brands.png" alt="twitter icon" /></a>
							</li>
						</ul>
					</div>
					<br />
					<img class="map" src="img/map.png" alt="NYC Metro Area Map" />
				</div>
			</div>
		</section>
		<!-- Footer Section -->
		<footer>
			<p class="copyright">&copy;2018. Precious Mack. All rights reserved. </p>
		</footer>
	</main>
</body>
</html>