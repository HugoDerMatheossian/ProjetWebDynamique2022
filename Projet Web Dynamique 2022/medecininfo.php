<?php

session_start();  
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);

// on fait un traitement de la base de donnée si elle existe
if ($db_found){
  
    $id=$_GET['id']; 
    $sql ="SELECT * FROM medecin  WHERE ID_Medecin=$id ";
    $res = mysqli_query($db_handle,$sql);

    $data = mysqli_fetch_assoc($res);
   // echo "ID :". $data['PDP'];
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
    bottom:0;
text-align: center;
width:100%;
position: fixed;
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

#stream_wrapper_register{
    display:flex;
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
    width: 30%;
    margin-right: 5%;
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
    float: left;
    width: 30%;
    margin-right: 5%;
    height: 60%;
}
.boite3
{
    text-align: center;
    background-color:lightblue;
    display: flex;
    border-radius: 15px;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    float: left;
    width: 30%;
    height: 60%;
}

.police {
    font-size:x-large;
    font-weight: bold;
    text-align:center;
    margin-left:auto;
    margin-right:auto;
}
.cercle { 
	display: flex;
    justify-content: space-around;
    width:40vw;
    clip-path:ellipse(35% 35%);
    text-align: center;

}
.bouton1 {
    background-color:darkseagreen;
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
    height:25px;
}
.bouton1:hover {
    background-color:olivedrab;
    color: white;
}
.bouton2 {
    background-color:cornflowerblue;
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
    height:25px;
}
.bouton2:hover {
    background-color:mediumblue;
    color: white;
}
.bouton3 {
    background-color:mediumpurple;
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
    height:25px;
}
.bouton3:hover {
    background-color:darkorchid;
    color: white;
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
<div id="wrapper">
    <hr>
    <div class="boite1">
            <div class="cercle">
                <?php 
                echo('<img src="' . $data["PDP"] . '">');
                ?>
            </div>
    </div>
            <div class="boite2">
                <div class="police">
                    <?php 
                    echo "Dr ".$data["Nom"]." ".$data["Prenom"]."<br>";
                    echo("<br>");
                        echo "Spécialité :".$data["Specialite"];
                        echo("<br><br>");
                        echo "Salle :".$data["Salle"];
                        echo("<br><br>");
                        echo "Téléphone : ".$data["Tel"];
                        echo("<br><br>");
                        echo "Adresse E-mail : ".$data["E-mail"];
                        echo("<br><br>");
                    ?>
                </div>
            </div>
            <div class="boite3">
                <p>
                <?php 
                echo ' <a href="priserdv.php?id='.$id.'"class="bouton3" style="width: 250px">' ."Prendre un RDV".' </a>';
                ?>
                <?php
                echo '<a href="Accueil.php" class="bouton1" style="width: 250px">Communiquer avec le médecin</a>';
                ?>
                <?php
				echo '<a href="Accueil.php" class="bouton2" style="width: 250px">Voir son CV</a>';
                ?>
                </p>
        </div>
                </hr>
</div>
        <div id="footer">
		<footer>
		<small>
			<hr>
				<pre>Mail:<a href="mailto:hugo.dermatheossian@omnes_sante.fr">hugo.dermatheossian@edu.ece.fr</a>   Téléphone: <em>(+33)1 44 39 06 00</em>       Adresse: 37, Quai de Grenelle,75015 Paris</pre>
			</hr>
		</small>
	</footer>
	</div>	
    </body>
</html>