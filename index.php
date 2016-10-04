<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/portfolio.css">
		<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Portofolio Nando</title>
	</head>
	<body>
		<header>
			<nav>
				<img src="img/hamburgericon.png" class="hamburger" alt="">
				<ul class="mob">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>

				<ul class="pc">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</header>

		<section class="home">
			<h1>
				I AM
				<span class="blue">NANDO VEENENDAAL</span>
			</h1>
			<span class="developer">Front-End Developer</span>
			<a class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
		</section>

		<section id="about">
			<img src="img/ik.jpg" class="ik" alt="">
			<h2 class="page-title">About</h2>
				<div class="textAbout">
					<p>
						Ik ben Nando Veenendaal. Ik ben een enthousiaste programmeur met een aantal jaar ervaring die zoveel mogelijk probeert te leren. In mijn dagelijks leven houd ik mij vooral bezig met voetbal, computers, muziek en vrienden. Mijn MAVO diploma heb ik behaald op het Segbroek College te Den Haag. Ik zit in het 4e jaar van de MBO opleiding applicatieontwikkelaar van het ROC Mondriaan. Momenteel loop ik stage bij het ICT bedrijf Competa.
					</p>
				</div>
		</section>

		<section id="portfolio">
			<h3>Portfolio </h3>
				<ul class="rig">
					<li>
						<img class="projectpic" src="img/vieropeenrij.jpg" alt="">
						<span>Vier op een rij</span>
						<div class="textContainer">
							<p>Dit is het spel vier op een rij. Dit project was een opdracht voor school die wij binnen een bepaalde tijd af moesten hebben, ik heb dit project afegesloten met een voldoende. Het spel werkt uitstekend naar behoren en draait momenteel local op de pc. </p>
						<div>
					</li>
					<li>
						<a href="http://codepamoja.org/"><img class="projectpic"src="img/Codepamoja.png" alt=""></a>
						<span>Code Pamoja</span>
						<div class="textContainer">
							<p>Dit is een van mijn eerste projecten waar ik aan heb gewerkt in dienst van Competa. Deze website vertegenwoordigd Code Pamoja.</p>
						<div>
					</li>
					<li>
						<img class="projectpic"src="img/Taaltoets.jpg"alt="">
						<span>Taaltoets</span>
						<div class="textContainer">
							<p>Het project "Taaltoets" heb ik ontwikkeld voor kinderen van de basisschool die aan de hand van deze applicatie kunnen oefenen met taaloefeningen. De leerling maakt alle vragen en krijgt vervolgens zijn cijfer te zien en de goede antwoorden zodat de leerling precies weet wat hij fout heeft gedaan.</p>
						<div>
					</li>
				</ul>
		</section>

		<section id="socialMedia">
			<a href="https://twitter.com/imnando"><img class="mediapic" src="img/twittericon.png" alt=""><a/>
			<a href="https://www.facebook.com/nando.veenendaal"><img class="mediapic" src="img/facebookicon.png" alt=""></a>
			<a href="https://www.linkedin.com/in/nando-veenendaal-011a33113"><img class="mediapic" src="img/linkedinicon.png" alt=""></a>
			<a href="https://www.instagram.com/imnando_/"><img class="mediapic" src="img/instagramicon.png" alt=""></a>
		</section>

		<section id="contact">
			<h5>Contact</h5>
				<form method="POST" action="portfolio.php">
					<input name="name" type="text" class="feedback-input" placeholder="Name" required />
					<input name="email" type="email" class="feedback-input" placeholder="Email" required/>
					<textarea name="message" class="feedback-input" placeholder="Comment" required></textarea>
					<input name="submit" type="submit" value="submit"/>
				</form>
				<?php if(isset($_GET['email'])&& $_GET['email']=== 'true'){
					?><span class="sent">Email has been sent</span><?php
				} ?>
		</section>

		<footer>Copyright &copy; 2016 - Nando Veenendaal</footer>
		<script src="js/portfolio.js"></script>
	</body>
</html>
