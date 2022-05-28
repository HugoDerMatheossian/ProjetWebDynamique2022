<?php  
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);

session_start();
if ($db_found){

    echo $_GET['id']; 
    echo $_GET['jour']; 
    echo $_GET['heure']; 

  $id=$_GET['id'];
  $jour=$_GET['jour']; 
  $heure=$_GET['heure'];

  $sql = "INSERT INTO rdv_medecin(ID_Patient,ID_Medecin,Jour,Heure) VALUES ('1','" . $id ."','" . $jour ."','" .$heure . "');";
    $res = mysqli_query($db_handle,$sql);
}

// si existe pas 
else {
    echo"Database not found";
}

// on ferme la connection
mysqli_close($db_handle);
?>

<html>
    <head>
        
        <style type="text/css">
          

#header {
    background-color:white;
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
.boite1
{
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    width: 30% ;
    height: 60%;
    float:left;
}
.boite2
{
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    width:40% ;
    height: 60%;
   float:right;
}
.police {
font-size:x-large;
font-weight: bold;

}
.cercle { 
	width : 20%;
	height : 40%;
   clip-path:ellipse(50% 50%);
   text-align: center;
   float: left;
	
}



        </style>
    </head>
    <body>
    <div id="header"> 
		<h1>Omnes Santé<img src="logo.png" height="40px" ></h1>
	</div>

	<div id="nav">
			<table>
				<br>
				<a href="Accueil.php" class="bouton" style="width: 200px">Accueil</a>
				<a href="toutparcourir.html" class="bouton" style="width: 200px">Tout Parcourir</a>
				<a href="recherche.php" class="bouton" style="width: 200px">Recherche</a>
				<a href="rdv.html" class="bouton" style="width: 200px">Rendez-vous</a>
				<a href="patient.php" class="bouton" style="width: 200px">Votre Compte</a>
			</table>
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