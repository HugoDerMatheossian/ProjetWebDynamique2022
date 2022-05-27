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

$name= $_FILES['image']['name'];
$id=$_SESSION['Id'];
$sql = 'UPDATE `medecin` SET PDP = "'.$name.'" WHERE ID_Medecin ="'.$id.'"';//pb?
$result = mysqli_query($db_handle, $sql);
$_SESSION['photo'] = $name;

//Lien vers la page suivante

      echo '<meta http-equiv="refresh" content="5;URL=Med.php">';
      echo "<br>";
      echo '<img src="happy.png" width="400px">';
      echo "<br>";
      echo "Vous avez bien change votre photo de profil!";
      echo "<br>";
      echo "Redirection vers votre page dans 5 secondes...";
?>