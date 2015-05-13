<?php

if($_POST["submit"]) {
    $recipient="lena.plaksina@gmail.com";
    $subject="Feedback from Github Portfolio";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
<html lang="en-NZ">

<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta name="description" content="Contact Lena to find out more about her work.">
	<meta name="author" content="Lena Plaksina">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<header>
		<h1><a href="./"><img src="images/lp-logo.png" alt="LP" height="220" width="150"></a></h1>
		<ul class="left">
			<li><a href="./">Work</a></li>
			<li><a href="about.html">About</a></li>
		</ul>
		<ul class="right">
			<li><a href="blog.html">Blog</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</header>

	<div id="container">

		<div class="work-filter">
			<ul id="filter">
				<li class="current"><a href="#">All</a></li>
				<li><a href="#">Web</a></li>
				<li><a href="#">Illustration</a></li>
				<li><a href="#">Graphic Design</a></li>
			</ul>
		</div>

		<main>

		</main>
    <h2>Get in touch!</h2>
    <?=$thankYou ?>
    <p>
      Now that you've had a change to flip through my portfolio, I'd love to hear from you. Use the form below to send me a message!
    </p>
    
    <form id="contact" method="post" action="contact.php" novalidate>

			<div>
				<label for="sender">
					<span class="name">Your Name</span>
				</label>
				<input id="sender" class="fv-minlength-2" type="text" name="sender" placeholder="John Doe" required>
				<div id="sender-error" class="danger"></div>
			</div>
				
			<div>
				<label for="senderEmail">
					<span class="email">Your Email</span>
				</label>
				<input id="senderEmail" type="email" name="senderEmail" placeholder="john.doe@mail.com" required>
				<div id="email-error" class="danger"></div>
			</div>

			<div>
				<label for="message" class="centered-label">
					<span class="message">Leave me a message:</span>
				</label>
				<textarea id="message" class="fv-minlength-15" name="message" placeholder="Tell me more..." required></textarea>
				<div id="message-error" class="danger"></div>
			</div>

			<div>
				<input type="submit" name="submit" value="Submit" class="button">
			</div>
			</div>
		</form>
		<footer>
			<p>© Lena Plaksina 2015</p>
		</footer>
	</div>

<script src="js/form-validation-kit.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {

	var contactForm = document.querySelector("#contact");

	addFormValidation(contactForm);

});
</script>
</body>
</html>
