<?php

session_start();  
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);

// on fait un traitement de la base de donnée si elle existe
if ($db_found){ 
    $sql ="SELECT * FROM services";
    $res = mysqli_query($db_handle,$sql);

    while($data = mysqli_fetch_assoc($res)){
    	if($data['Nom']=="Biologie Preventive"){
			$id= $data["ID_Service"];
    		$nom= $data["Nom"];
    	}
    	
    }
}

// si existe pas 
else {
    echo"Database not found";
}

// on ferme la connection
mysqli_close($db_handle);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Biologie Préventive</title>
	<style type="text/css">
	#head {
			background-color: white;
		    color: blue;
		    text-align: center;
		    padding: 0px;
		}

		#navi {
			background-color: white;
			color: black;
			text-align: center;
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

</style>
</head>
<body>
	<div id="header">
		<h1><b>Service <?php echo $nom ?></b></h1>
	</div>
	<div id="section">
		<div id="s-left" style="float:left" width="500px">
			<img src="Bio_prevention.jpg" height="400px" width="500px">
		</div>
		<div id="s-right" style="float:center" >
			<p><b>Règles du Service:</b></p>
			<p>
				Le service de Biologie Préventive de l'Omnes Santé se charge de faire des tests liés aux comportements mauvais ou dangereux pour le corps du patient, au quotidien.
			</p>
			<p>
				Evitez de manger trop gras, trop salé ou trop sucré.
			</p>
			<p>
				Il faut manger au moins 5 fruits et légumes par jour.
			</p>
			<p>
				Nous conseillons à nos patients de pratiquer du sport de façon quotidienne afin de préserver la bonne santé de leur corps.
			</p>
			<?php 
                echo ' <a href="priserdvlabo.php?id='.$id.'"class="button" type="button">' ."Prendre RDV".' </a>';
                ?>
		</div>
	</div>
	<div id="footer">
		<footer>
		<small>
			<hr>
				<pre>Mail:<a href="mailto:hugo.dermatheossian@omnes_sante.fr">hugo.dermatheossian@edu.ece.fr</a>   Téléphone: <em>(+33)1 44 39 06 00</em>       Adresse:37, Quai de Grenelle,75015 Paris<a href="Nos_services.html" type="button" class="retour">RETOUR</a></pre>
			</hr>
		</small>
	</footer>
	</div>
</body>
</html>