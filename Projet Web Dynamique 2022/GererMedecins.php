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
	<title>Gestion des Médecins</title>
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
		.retour{
			background-color:#FF337A;
			border: solid;
			color: navajowhite;
			padding: 2px;
			margin: 2px;
			text-align: center;
			display: inline-block;
			font-size: 18px;
			cursor: pointer;
			position:relative; 
    			display:inline-block; 
			float: right;
			width: 70px;
			height: 20px;
		}
		form{
			text-align: center;
		}
 </style>
</head>
<body>
	<div id="header"> 
		<h1>Omnes Santé<img src="logo.png" height="70px" ></h1>
	</div>
	<div>
		<form action="manipulationMed.php" method="post" enctype="multipart/form-data">
			<tr>
				<td><em><u>Management des comptes Médecins:</u></em></td>
			</tr>
			<p>
				Prénom:
					<input type="text" name="Prenom" size="20" maxlength="20" required placeholder="Prenom du médecin" required>
				Nom:
					<input type="text" name="Nom" size="20" maxlength="20" required placeholder="Nom du médecin" required><br>
				Spécialité:
					<select name="specialite" id="specialite">
						<option value="generaliste">Généraliste</option>
						<option value="addictologue">Addictologue</option>
						<option value="andrologue">Andrologue</option>
						<option value="cardiologue">Cardiologue</option>
						<option value="dermatologue">Dermatologue</option>
						<option value="ghe">GHE</option>
						<option value="gynecologue">Gynécologue</option>
						<option value="ist">IST</option>
						<option value="osteopathe">Ostéopathe</option>
					</select><br>
				Salle:
					<input type="text" name="Salle" size="20" maxlength="20" required placeholder="Salle du médecin" required><br>
				N° Téléphone:
					<input type="text" name="Tel" size="20" maxlength="20" required placeholder="N° téléphone du médecin" required><br>
				E-mail:
					<input type="text" name="Mail" size="20" maxlength="20" required placeholder="E-mail du médecin" requireds><br>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="button1" value="Ajouter">
						<input type="submit" name="button2" value="Supprimer">
					</td>
				</tr>
			</p>
		</form>
	</div>
	<div id="footer">
		<footer>
		<small>
			<hr>
				<pre>Mail:<a href="mailto:hugo.dermatheossian@omnes_sante.fr">hugo.dermatheossian@edu.ece.fr</a>   Téléphone: <em>(+33)1 44 39 06 00</em>       Adresse:37, Quai de Grenelle,75015 Paris<a href="Admin.php" type="button" class="retour">RETOUR</a></pre>

			</hr>
		</small>
	</footer>
	</div>
</body>
</html>
