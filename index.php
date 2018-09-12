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
								<a href="#about">About</a>
							</li>
							<li>
								<a href="#portfolio">Portfolio</a>
							</li>
							<li>
								<a href="#contact">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="full-width">
				<div class="header-text">
					<h1> Hi! I'm Precious.</h1>
					<h2>My goal is to create beautiful, user <br />centered websites and apps. </h2>
					<h3>
						Want to work together? I am looking for new projects. <a href="#contact"> <button>Let's Talk</button></a>
					</h3>
				</div>
			</div>
		</header>
		<!-- About Section-->
		<section id="about">
			<div class="full-width">
				<div class="half-width">
					<h2>A little about me: </h2>
					<img src="img/new-head-shot.png" alt="Precious Mack image" />
				</div>
				<div class="half-width-text">
					<blockquote class="colorful-text">"It’s the job that’s never started as takes longest to finish." - Sam Gamgee</blockquote>
					<br />
					<p>In addition to designing and coding websites, I’m also a librarian that geeks continous learning, Medieval History, WordPress, museums, DIY crafts, and coffee. I seriously love coffee (and code and books).</p>
				</div>
			</div>
		</section>
		<!-- Testimonials Section-->
		<section id="testimonials">
			<div class="full-width">
				<h2 class="clients">What clients say: </h2>
				<p class="testimonial">The new website is user friendly and extremely visually appealing. The time and effort you put into its design resulted in a stellar website, one you should be very proud of! Because of your work on this product, the website is a reflection on the excellent services the library offers to everyone. - April Judge, Director West Caldwell Public Library (retired).</p>
			</div>
		</section>
		<!-- Portfolio Section -->
		<section id="portfolio">
			<h2>Select projects:</h2>
			<div class="full-width">
				<div class="half-width">
					<img src="img/wdb.png" alt="Portfolio image" />
					<div class="overlay">
						<div class="project-info-text">
							<p class="project-info">Web Design with Adobe Photoshop &amp; Illustrator.</p>
						</div>
						<a href="wine-down-booksellers.html"><button class="project-button">See More</button>
					</div></a>
				</div>
				<div class="half-width">
					<img src="img/sws-img.png" alt="Portfolio image" />
					<div class="overlay">
						<div class="project-info-text">
							<p class="project-info">WordPress Website Design</p>
						</div>
						<a href="http://www.swingingwithsimone.com"><button class="project-button">Visit Site</button></a>
					</div>
				</div>
				<div class="half-width">
					<img src="img/rogue-pickings.png" alt="Portfolio image" />
					<div class="overlay">
						<div class="project-info-text">
							<p class="project-info">PSD to HTML5 and CSS3</p>
						</div>
						<a href="https://pfmack.github.io/rogue-pickings/"><button class="project-button">See Live Demo</button></a>
					</div>
				</div>
				<div class="half-width">
					<img src="img/lol-clock.png" alt="Portfolio image" />
					<div class="overlay">
						<div class="project-info-text">
							<p class="project-info">JavaScript, HTML5, &amp; CSS3</p>
						</div>
						<a href="https://codepen.io/pfmack/pen/OozMoN"><button class="project-button">View Demo</button></a>
					</div>
				</div>
				<div class="half-width">
					<img src="img/jubilee-austin.png" alt="Portfolio image" />
					<div class="overlay">
						<div class="project-info-text">
							<p class="project-info">HTML5 &amp; CSS3</p>
						</div>
						<button class="project-button">Demo Coming Soon</button>
					</div>
				</div>
				<div class="half-width">
					<img src="img/holstee-manifesto.png" alt="Portfolio image" />
					<div class="overlay">
						<div class="project-info-text">
							<p class="project-info">HTML5, CSS3 and Flexbox</p>
						</div>
						<a href="https://codepen.io/pfmack/pen/djapqz"><button class="project-button">See Demo</button></a>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact Section -->

	<?php

		$name="";
		$email="";
		$message="";

		if (!empty($error_message))
		{

		?>

		<p class="error"><?php echo $error_message; ?></p>

		<?php

		}
		// end if
		?>
		
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