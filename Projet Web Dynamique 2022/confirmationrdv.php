<?php  

session_start();
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);

if ($db_found){


  $id=$_GET['id'];
  $jour=$_GET['jour']; 
  $heure=$_GET['heure'];
  $login=$_SESSION['login'];
  $email=$_SESSION['email'];
  $_SESSION['jour']=$jour;
  $_SESSION['heure']=$heure;
  $_SESSION['id_medecin']=$id;

 
  $sql = "SELECT * FROM `patient`";
  $result = mysqli_query($db_handle, $sql);
  while($data = mysqli_fetch_assoc($result)){
    if($_SESSION['login']==$data['Nom']){
        if($_SESSION['email']==$data['E-mail']){
            $_SESSION['ID_Patient']=$data['ID_Patient'];
        }
    }
  }
  /*if(isset($_POST["submit"])){
    $type_carte=isset($_POST["type_carte"])? $_POST["type_carte"] : "";
    $num_carte=isset($_POST["num_carte"])? $_POST["num_carte"] : "";
    $nom_carte=isset($_POST["nom_carte"])? $_POST["nom_carte"] : "";
    $date_carte=isset($_POST["date_carte"])? $_POST["date_carte"] : "";
    $code_secret=isset($_POST["code_secret"])? $_POST["code_secret"] : "";

    //on verifie que les champs des infos bancaires correspondent à ceux de la bdd
    if(($type_carte==data['type_carte'])&&($num_carte==data['num_carte'])&&($nom_carte==data['nom_carte'])&&($date_carte==data['date_carte'])&&($code_secret==data['code_secret'])){
        $sql = "INSERT INTO rdv_medecin(ID_Patient,ID_Medecin,Jour,Heure) VALUES ('".$_SESSION['ID_Patient']."','".$id."','".$jour."','".$heure."');";
        $res = mysqli_query($db_handle,$sql);
    }
    else{
        echo "Erreur de paiement!";;
    }

  } */

    $sql="SELECT * FROM medecin WHERE ID_Medecin= $id ";
    $res = mysqli_query($db_handle,$sql);
    $data = mysqli_fetch_assoc($res);
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


#boite {
            text-align: center;
            background-color: lightblue;
            display: flex;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            width: 60%;
            height: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        #boite1 {
            text-align: center;
            background-color:#4169E1;
            display: flex;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            width: 60%;
            height: 60%;
           margin: auto;
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
				<a href="Accueil.php" class="bouton" style="width: 200px">Accueil</a>
				<a href="toutparcourir.html" class="bouton" style="width: 200px">Tout Parcourir</a>
				<a href="recherche.php" class="bouton" style="width: 200px">Recherche</a>
				<a href="rdvdupatient.php" class="bouton" style="width: 200px">Rendez-vous</a>
				<a href="patient.php" class="bouton" style="width: 200px">Votre Compte</a>
			</table>
</hr>
	</div>
<hr>
<div id="boite">
   <div id="boite1">
    <div>
        <h1>Valider vos informations Bancaires:</h1>
        <img src="cb.jpg"  height="75px" width="125px"></img>
    </div>
    <div>
        <h3> Prix: 25€</h3>
        <form action="confirmationrdv2.php" method="post" ><br>
            <input type="input" name="type_carte" id="type_carte" placeholder="Type de votre Carte"></input>
            <input type="input" name="num_carte" id="num_carte"placeholder="N°de votre Carte "></input><br>
            <input type="input" name="nom_carte" id="nom_carte" placeholder="Nom sur votre Carte"></input>
            <input type="input" name="date_carte" id="date_carte" placeholder="Date d'expiration"></input><br>
            <input type="password" name="code_secret"id="code_secret" placeholder="Votre Code"></input><br>
            <input type="submit" name="submit"></input>
        </form>
    </div>
        
    <?php
    /*echo "Félicitation vous avez pris un rdv avec le docteur  ". $data["Nom"];*/ 
    /*echo $_GET['jour']; 
    echo $_GET['heure']; */
    ?>
    </div>
</div>
    </hr>

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