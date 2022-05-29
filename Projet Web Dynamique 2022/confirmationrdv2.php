<?php
session_start();
$database="omnes_sante";

// on se connecte ensuite
$db_handle=mysqli_connect("localhost","root","");
$db_found = mysqli_select_db($db_handle,$database);
$type_carte=isset($_POST["type_carte"])? $_POST["type_carte"] : "";
$num_carte=isset($_POST["num_carte"])? $_POST["num_carte"] : "";
$nom_carte=isset($_POST["nom_carte"])? $_POST["nom_carte"] : "";
$date_carte=isset($_POST["date_carte"])? $_POST["date_carte"] : "";
$code_secret=isset($_POST["code_secret"])? $_POST["code_secret"] : "";

if ($db_found){
	$id=$_GET['id'];
	$jour=$_GET['jour']; 
    $heure=$_GET['heure'];
	$login=$_SESSION['login'];
	$email=$_SESSION['email'];

	$sql = "SELECT * FROM `patient`";
  	$result = mysqli_query($db_handle, $sql);


}

//on verifie que les champs des infos bancaires correspondent à ceux de la bdd
if(($type_carte==data['type_carte'])&&($num_carte==data['num_carte'])&&($nom_carte==data['nom_carte'])&&($date_carte==data['date_carte'])&&($code_secret==data['code_secret'])){
    $sql = "INSERT INTO rdv_medecin(ID_Patient,ID_Medecin,Jour,Heure) VALUES ('".$_SESSION['ID_Patient']."','".$id."','".$jour."','".$heure."');";
    $res = mysqli_query($db_handle,$sql);
}
else{
    echo "Erreur de paiement!";;
} 
?>