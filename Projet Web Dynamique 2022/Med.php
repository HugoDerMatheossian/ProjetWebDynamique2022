<?php
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['type'])||($_SESSION['type'])!="medecin") 
{
  // Si inexistante ou nulle, ->connexion
  echo '<meta http-equiv="refresh" content="0;URL=PageLoginMedecin.html">';
  exit();
}

//On identifie la base de donnees 
$database = "omnes_sante";

//On s'y connecte
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php  echo "Dr ".$_SESSION['prenom']." ".$_SESSION['login']; ?></title>
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
			position: fixed;
bottom:0;
text-align: center;
width:100%;

padding-top:50px;

height:50px;
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
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
		}
		.bouton:hover {
			background-color: #4169E1;
			color: white;
		}
		h1{
			text-align:center;
		}
		#infos-droite{
			text-align:center;
		}
 </style>
</head>
<body>
	<div id="header"> 
		<h1>Omnes Santé<img src="logo.png" height="40px" ></h1>
	</div>
	<div id="nav">
		<hr>
			<table>
				<a href="Accueil.php" class="bouton" style="width: 160px">Accueil</a>
				<a href="rdvdumedecin.php" class="bouton" style="width: 160px">Accéder à l'emploi du temps</a>
				<a href="modifPhoto.php" class="bouton" style="width: 160px">Modifier Photo</a>
				<a href="" class="bouton" style="width: 160px">Modifier votre CV</a>
				<a href="deconnexion.php" class="bouton" style="width: 160px">Deconnexion</a>
			</table>
		</hr>
	</div>
	<div id="infos">
		<hr>
		<div id="infos-gauche" style="float:left" width="300px">
			<img src="<?php echo $_SESSION['photo'];  ?>" height="300px" width="300px">
		</div>
		<div id="infos-droite" style="float:center" >
			<p><b>Vos Informations:<br></b></p>
			<p>Nom: <?php echo $_SESSION['login'];?><br></p>
			<p>Prénom: <?php echo $_SESSION['prenom'];?><br></p>
			<p>N° Téléphone: <?php echo $_SESSION['tel'];?><br></p>
			<p>Spécialité: <?php echo $_SESSION['specialite'];?><br></p>
			<p>Salle: <?php echo $_SESSION['salle'];?><br></p>
			<p>E-mail	: <?php echo $_SESSION['email'];?><br></p>

		</div>
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