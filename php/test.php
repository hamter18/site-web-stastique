<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8"/>
		<title>Escapade Aventure</title>
		<link rel="stylesheet" media="screen and (max-width: 800px)" href="../CSS/smallscreen.css" type="text/css" />
		<link rel="stylesheet" media="screen and (max-width: 800px)" href="../CSS/smallscreenCssCommun.css" type="text/css" />
		<link rel="stylesheet" media="screen and (max-width: 360px)" href="../CSS/verysmallscreen.css" type="text/css" />
		<link rel="stylesheet" media="screen and (max-width: 360px)" href="../CSS/verysmallscreenCssCommun.css" type="text/css" />
		<link rel="stylesheet" href="../CSS/cssCommun.css" media="screen and (min-width: 800px)" type="text/css"/>
		<link rel="stylesheet" href="../CSS/tp1.css" media="screen and (min-width: 800px)" type="text/css"/>
		<link rel="stylesheet" media="screen and (min-width: 1600px)" href="../CSS/largescreen.css" type="text/css" />
		<link rel="stylesheet" media="screen and (min-width: 1600px)" href="../CSS/largescreenCssCommun.css" type="text/css" />
		<link rel="stylesheet" media="screen and (min-width: 1850px)" href="../CSS/verylargescreen.css" type="text/css" />
		<link rel="stylesheet" media="screen and (min-width: 1850px)" href="../CSS/verylargescreenCssCommun.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Handlee|Indie+Flower|Satisfy" rel="stylesheet">
		
	</head>
	
	<body>
             
			<header>
				<h1 id="aspect">Escapade Aventure</h1>
				<img src="../Images&videos/image_course_a_pied.jpg"class="image1"/>
				<nav class="efface">
					<ul class="bord">
						<li><a href="../tp1.html" class="bord">Menu</a></li>
						
						<li><a href="../tp1_escalade.html" class="bord">Escalade</a>
							<ul class="submenu">
								<li><a href="../tp1_new-tarif.html">Tarifs & abonnement</a></li>
								<li><a href="../tp1_planning.html">Planning</a></li>
							</ul>
						</li>
						
						<li><a href="../tp1_activites.html" class="bord">Randonnée</a>
							<ul class="submenu">
								<li><a href="../Tp1_tarif_rando.html">Tarifs & abonnement</a></li>
								<li><a href="../tp1_planning_rando.html">Planning</a></li>
							</ul>	
						</li>
	
						<li><a href="../tp1_canyoning.html" class="bord">Canyoning</a>
							<ul class="submenu">
								<li><a href="../Tp1_tarif_canyoning.html">Tarifs & abonnement</a></li>
								<li><a href="../tp1_planning_canyoning.html">Planning</a></li>
							</ul>						
						</li>
						
						<li><a href="../tp1_parapente.html" class="bord">Parapente</a>
							<ul class="submenu">
								<li><a href="../Tp1_tarif_parapente.html">Tarifs & abonnement</a></li>
								<li><a href="../tp1_planning_parapente.html">Planning</a></li>
							</ul>						
						</li>
						
						<li><a href="../tp1_medias.html" class="bord">Médias </a>
							<ul class="submenu">
								<li><a href="../tp1_photos.html">Photos</a></li>
								<li><a href="../tp1_video.html">Vidéos</a></li>
							</ul>
						</li>
						
						<li><a href="../nos_offres.html" class="bord">Nos offres</a></li>

						<li><a href="../tp1_inscription.html" class="bord">Inscriptions</a></li>
					
					</ul>

				</nav>
					
					<img src="../Images&videos/image_twitter.png" class="imageTwitter"/>
					<img src="../Images&videos/image_facebook.png" class="imageFacebook"/>

					
			</header>

			<div>
				<section class="fond_pour_texte">
				<h1 class="donnee">Affichage des données issues du formulaire</h1>

				<?php

			if(empty($_POST['nom']))
			{
				echo '<p class="erreur">Le champ "Nom" est incomplet</br></p>';
			}
			else 
				{
					$nom = $_POST['nom']; 
					echo '<p class="texte_php">Votre nom est : '. $nom . '</br></p>';	
				}

			if(empty($_POST['email']))
			{
				
				echo '<p class="erreur">Le champ "Email" est incomplet</br></p>';
			}
			else 
				{
					$email = $_POST['email'];
					 If (filter_var($email, FILTER_VALIDATE_EMAIL));
					 {
					 	echo '<p class="texte_php">Votre email est : ' . $email . '</br></p>';
					 }
					
				}
			if(empty($_POST['telephone']))
			{
				echo '<p class="erreur">Le champ "Téléphone" est incomplet</br></p>';
			}
			else 
				{
					$telephone = $_POST['telephone'];
					echo '<p class="texte_php">Votre telephone est : ' . $telephone . '</br></p>';
				}

			if (empty($_POST['activite']))
			{
				echo '<p class="erreur">Activité incomplète</br></p>';
			}
			else 
				{
					$activite = $_POST['activite'];
					echo '<p class="texte_php">Vous avez choisi : ' . $activite . '</br></p>';
				}

			if (empty($_POST['creneau_horraire']))
			{
				echo '<p class="erreur">Horaire incomplet/br></p>';
			}
			else 
				{
					$creneau_horraire = $_POST['creneau_horraire'];
					echo '<p class="texte_php">Le créneau horaire que vous avez choisi est : ' . $creneau_horraire . '</br></p>';
				}

			if (empty($_POST['demande']))
			{
				echo '<p class="erreur">La demande est incomplète</br></p>';
			}
			else 
				{
					$demande = $_POST['demande'];
					echo '<p class="texte_php">Vous êtes : ' . $demande . '</br>';
				}

			if (empty($_POST['msg_visiteur']))
			{
				
					echo '<p class="erreur">Le champ "Texte" est incomplet</br></p>';
			}
			else 
				{
					$msg_visiteur = $_POST['msg_visiteur'];
					echo '<p class="texte_php">'. $msg_visiteur . '</p>';
				}
			?>


				<p class="validation">Vos données ont bien été prises en compte.</p>
				</section>
			</div>

			
	<footer>
					<div>
						<h4 class="titreFooter">Conception du site :</h4>
							<p>Ce site a été réalisé par Lawruk Pauline et Chanson Chloé du groupe 3 de l'IUT de Clermont-Ferrand</p>
					</div>
				</footer>
      
	</body> 
</html>	