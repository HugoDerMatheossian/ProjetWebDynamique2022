<?php
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['type'])||($_SESSION['type'])!="admin") 
{
  // Si inexistante ou nulle, ->connexion
  echo '<meta http-equiv="refresh" content="0;URL=PageLoginAdmin.html">';
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrateur</title>
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
		h1{
			text-align:center;
		}
 </style>
</head>
<body>
	<div id="header"> 
		<h1>Omnes Santé<img src="logo.png" height="70px" ></h1>
	</div>
	<h1><?php 
	echo $_SESSION['prenom'],' ', $_SESSION['login'];
	?></h1>
	<div id="nav">
		<hr>
			<table>
				<br>
				<a href="Accueil.php" class="bouton" style="width: 250px">Accueil</a>
				<a href="GererMedecins.php" class="bouton" style="width: 250px">Gérer les médecins</a>
				<a href="GererLabo.php" class="bouton" style="width: 250px">Gérer le laboratoire</a>
				<a href="" class="bouton" style="width: 250px">Créer les CV des médecins</a>
				<a href="deconnexion.php" class="bouton" style="width: 250px">Deconnexion</a>
			</table>
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