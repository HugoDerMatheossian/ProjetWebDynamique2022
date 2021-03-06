<?php  
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laboratoire</title>
	<style type="text/css">
	#head {
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

		#footer {
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
			padding-left: 25%;
		}
		#s-right p{
			text-align:center;
			font-size: 25px;
		}
		#s-right a{
			text-align:center;
			font-size: 25px;
			margin-left: 400px;
		}
		.button{
			background-color:#FFB833;
			border: solid;
			color: black;
			padding: 10px;
			margin: 10px;
			text-align: center;
			display: inline-block;
			font-size: 20px;
			cursor: pointer;
			border-radius: 45%;
			width: 200px;
		}

</style>
</head>
<body>
	<div id="header"> 
		<h1>Laboratoire de biologie médicale<img src="logo.png" height="40px" > </h1>
	</div>
	<div id="nav">
		<hr>
			<table>
				<a href="Accueil.php" class="bouton" style="width: 160px">Accueil</a>
				<?php 
					switch($_SESSION['type']){
						case 'patient':
							echo '<a href="toutparcourir.html" class="bouton" style="width: 160px">Tout Parcourir</a>';
							break;
						default :
							echo '<a href="" class="bouton" style="width: 160px">Tout Parcourir</a>';
							break;
					}
				?>
				<?php 
					switch($_SESSION['type']){
						case 'patient':
							echo '<a href="recherche.php" class="bouton" style="width: 160px">Recherche</a>';
							break;
						default :
							echo '<a href="" class="bouton" style="width: 160px">Recherche</a>';
							break;
					}
				?>
				<?php 
					switch($_SESSION['type']){
						case 'patient':
							echo '<a href="rdvdupatient.php" class="bouton" style="width: 160px">Rendez-vous</a>';
							break;
						case 'medecin':
							echo '<a href="rdvdumedecin.php" class="bouton" style="width: 160px">Rendez-vous</a>';
							break;
						default :
							echo '<a href="" class="bouton" style="width: 160px">Rendez-vous</a>';
							break;
					}
				?>
				<?php 
				switch($_SESSION['type']){
					case "patient":
						echo "<input type='button' class='bouton' style='width:160px' title='Votre Compte' value='Votre Compte' onclick=\"location.href='patient.php'\">";
						break;
					case "medecin":
						echo '<a href="Med.php" class="bouton" style="width: 160px">Votre Compte</a>';
						break;
					case "admin":
						echo '<a href="" class="bouton" style="width: 160px">Votre Compte</a>';
						break;
					default:
						echo '<a href="choixTypeCompte.html" class="bouton" style="width: 160px">Connexion</a>';
						break;
					}	
				?>
			</table>
		</hr>
	</div>
	<div id="section">
		<hr>
		<div id="s-left" style="float:left" width="500px">
			<img src="labo.png" height="300px" width="400px">
		</div>
		<div id="s-right" style="float:center" >
			<p><b>Laboratoire de biologie médicale</b></p>
			<p>Salle: SC-101</p>
			<p>Téléphone: +33 01 22 33 44 55</p>
			<p>Email: labo.biologie@omnessante.fr</p>
			<a href="Nos_services.html" class="button" type="button">Nos Services</a>
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
