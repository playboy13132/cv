<!DOCTYPE html>
<html>
<head>
	<title>cv | Anthony Leborgne</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="img/Anonymous.ico">
</head>
<body>
	<nav>
		<ul>
			<li><a href="#about">A propos</a>	
			<li><a href="#comp">Compétences</a>
			<li><a href="#exp">Expérience</a>
			<li><a href="#hobbies">Loisirs</a>
			<li><a href="#contact">Me contacter</a>
		</ul>
	</nav>
	<section id="about" class="a_propos">
		<article>
			<p>Je m'appel Anthony Leborgne,j'ai actuellement 18 ans, je suis passionné d'informatique, j'ai commencé la programmation informatique depuis quelques mois ainsi que la sécuriter informatique depuis quelques jours, j'ai joué au foot pendant quelques années. Je suis passionné aussi de jeux vidéos, et j'aime regarder des séries ou des films sur mon ordinateur<br/>
			<a href='https://github.com/playboy13132'><img src="img/github.jpg" 
			alt="github" title="github" width="100" style="border-radius:20px;"></a></p>
			
		</article>
	</section>
	<section>
		<article>
			<img class="moi" src="img/anthony.jpg" style="border-radius:20px;">
		</article>
	</section>
	<br/>
	<br/>
	<hr>
		<h2 align="center">Compétences</h2>
	<hr>
	<br/>
	<section class="a_propos">
		<article>
			<div id="comp" class="img1">
				<img src="img/html.png" alt="html" title="html" width="500" style="border-radius:20px;">
			</div>
			<div class="img2">
				<img src="img/php.jpg" alt="php" title="php" width="500" style="border-radius:20px;">
			</div>
		</article>
	</section>
		<br/>
		<hr>
			<h2 align="center">Expérience</h2>
		<hr>
		<br/>
		<section id="exp" class="a_propos">
			<article align="center">
				<h2>2016</h2>
				<p>Stage de 3 semaine en développement informatique</p><br/>
				<h2>2016</h2>
				<p>stage de 3 semaine en maintenance</p>
			</article>
		</section>
		<br/>
		<br/>
		<hr >
			<h2 align="center">Loisirs</h2>
		<hr>
		<br/>
		<section id="hobbies" class="a_propos">
			<article>
				<div id="comp" class="img1">
					<img src="img/code.jpg" alt="code" title="code" width="200" height="200" style="border-radius:20px;">
					<i>l'informatique</i>
				</div>
				<div class="img2">
					<img src="img/jv.jpg" alt="jv" title="jv" width="200" height="200" style="border-radius:20px;">
					<i>Les jeux vidéos</i>
				</div>
				<div class="img3">
					<img src="img/musique.jpg" alt="musique" title="musique" width="200" height="200" style="border-radius:20px;">
					<i>La musique</i>
				</div>
				<div class="img4">
					<img src="img/messi.png" alt="football" title="football" width="200" height="200" style="border-radius:20px;">
					<i>Le football</i>
				</div>
			</article>
		</section>
			<br/>
		<br/>
		<hr >
			<h2 align="center">Me contacter</h2>
		<hr>
		<br/>
		<br/>
			<?php
		if(isset($_POST['mailform']))
		{

			if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))	
			{

						mail("viciousano@gmail.com", 'Contact - Mon site','nom: ' .$_POST['nom']. ' mail: '.$_POST['mail']. ' message: '.
							 $_POST['message']);



						} else {
							$msg = "Tous les champs doivent être completer";
						}
					}

				?>
	<section id="contact" class="a_propos">
		<article>
				<form method="POST" action="">
					<label>Nom:</label><br/><br/>
					<input type="text" name="nom" placeholder="votre nom" value="<?php if(isset($_POST['nom'])) {echo $_POST['nom']; } ?>"><br/><br/>
					<label>Mail:</label><br/><br/>
					<input type="email" name="mail" placeholder="votre email" value="<?php if(isset($_POST['mail'])) {echo $_POST['mail']; } ?>"><br/><br/>
					<label>Message:</label><br/><br/>
					<textarea name="message" placeholder="votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br/><br/>
					<input type="submit" value="Envoyer" name="mailform">
			</form>
			<?php if(isset($msg)){echo $msg;} ?>
		</article>
	</section>
</body>
</html>
