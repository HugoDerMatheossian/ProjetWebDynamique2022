<?php
	session_start();
	if (empty($_SESSION['type'])) {
		$_SESSION['type']="invite";
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Omnes Santé</title>
	<meta charset="utf-8">
	<style type="text/css">

		#header {
			background-color: white;
		    color: blue;
		    text-align: center;
		    padding: 0px;
		}

		#nav {
			background-color: white;
			color: black;
			text-align: center;
			padding: 0px;
		}

		#section {
			
			background-color: white;
			color: black;
			clear: both;
			text-align: center;
			font-weight: bold;
			padding: 0px;
		}

		#footer {
			position: absolute;
			width: 100%;
			background-color: white;
			color: black;
			clear: both;
			text-align: center;
			padding: 0px;
			bottom: 0px;
		}

		.bouton{
			background-color:#00BFFF;
			border: solid;
			color: black;
			padding: 10px;
			margin: 10px;
			text-align: center;
			display: inline-block;
			font-size: 20px;
			cursor: pointer;
		}
		.bouton:hover {
			background-color: #4169E1;
			color: white;
		}

 	</style>
</head>
<body>
	<div id="header"> 
		<h1>Omnes Santé<img src="logo.png" height="70px" ></h1>
	</div>

	<div id="nav">
		<hr>
			<table>
				<br>
				<a href="Accueil.php" class="bouton" style="width: 250px">Accueil</a>
				<?php 
					switch($_SESSION['type']){
						case 'patient':
							echo '<a href="toutparcourir.html" class="bouton" style="width: 250px">Tout Parcourir</a>';
							break;
						default :
							echo '<a href="" class="bouton" style="width: 250px">Tout Parcourir</a>';
							break;
					}
				?>
				<?php 
					switch($_SESSION['type']){
						case 'patient':
							echo '<a href="recherche.php" class="bouton" style="width: 250px">Recherche</a>';
							break;
						default :
							echo '<a href="" class="bouton" style="width: 250px">Recherche</a>';
							break;
					}
				?>
				<?php 
					switch($_SESSION['type']){
						case 'patient':
							echo '<a href="rdv.html" class="bouton" style="width: 250px">Rendez-vous</a>';
							break;
						case 'medecin':
							echo '<a href="rdvdumedecin.php" class="bouton" style="width: 250px">Rendez-vous</a>';
							break;
						default :
							echo '<a href="" class="bouton" style="width: 250px">Rendez-vous</a>';
							break;
					}
				?>
				<?php 
				switch($_SESSION['type']){
					case "patient":
						echo "<input type='button' class='bouton' style='width:250px' title='Votre Compte' value='Votre Compte' onclick=\"location.href='patient.php'\">";
						break;
					case "medecin":
						echo '<a href="Med.php" class="bouton" style="width: 250px">Votre Compte</a>';
						break;
					case "admin":
						echo '<a href="" class="bouton" style="width: 250px">Votre Compte</a>';
						break;
					default:
						echo '<a href="choixTypeCompte.html" class="bouton" style="width: 250px">Connexion</a>';
						break;
					}	
				?>
			</table>
		</hr>
	</div>

	<div id="section">
		<hr>
			<pre>Ce site innovant permette au client de voir
une liste de tous les personnelles de Omnes Santé, de sélectionner un spécialiste préféré, de voir
ses informations pertinentes, tels que son CV, ses coordonnées, et son calendrier de la semaine
ainsi que sa disponibilité pour recevoir un rendez-vous.Omnes Santé est ouvert à tous les
membres de la communauté Omnes Education</pre>
	    </hr>
		<hr>
			<pre align="center"><em> Bulletin santé de la semaine:<br></em>
<h1>La variole du singe présente-t-elle un risque épidémique ?</h1><br>
Les cas rapportés en Europe sont majoritairement bénins mais les autorités sanitaires sont préoccupées par le fait que ces cas apparaissent simultanément dans de nombreux pays,<br> chez des personnes qui, pour la plupart, n’avaient pas de lien direct avec les pays où la maladie circule.	
<a href="https://www.nouvelobs.com/sante/20220522.OBS58782/la-variole-du-singe-presente-t-elle-un-risque-epidemique.html">
	<img src="varioleSinge.webp" height="150px"></a>
			</pre>
	    </hr>
	</div>
	<div id="footer">
		<footer>
		<small>
			<hr>
				<pre>Mail:<a href="mailto:hugo.dermatheossian@omnes_sante.fr">hugo.dermatheossian@edu.ece.fr</a>   Téléphone: <em>(+33)1 44 39 06 00</em>       Adresse:37, Quai de Grenelle,75015 Paris</pre>
			</hr>
		</small>
	</footer>
	</div>	
</body>
</html>
