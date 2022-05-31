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

  echo $jour;
  echo $heure;
  echo $id;

 
  $sql = "SELECT * FROM `patient`";
  $result = mysqli_query($db_handle, $sql);
  while($data = mysqli_fetch_assoc($result)){
    if($data['Nom']==$login){
        if($data['E-mail']==$email){
            $_SESSION['ID_Patient']=$data['ID_Patient'];
        }
    }
  }

  $sql = "INSERT INTO rdv_labo(ID_Patient,ID_Service,Jour,Heure) VALUES ('".$_SESSION['ID_Patient']."','".$id."','".$jour."','".$heure."');";
  
    $res = mysqli_query($db_handle,$sql);

    $sql="SELECT * FROM services WHERE ID_Service= $id ";
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
				<a href="rdv.html" class="bouton" style="width: 200px">Rendez-vous</a>
				<a href="patient.php" class="bouton" style="width: 200px">Votre Compte</a>
			</table>
</hr>
	</div>
<hr>
<div id="boite">
   <div id="boite1">
    <?php   echo "Félicitation vous avez pris un rdv en   ". $data["Nom"]; 
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
