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
/*echo $type_carte;
echo $num_carte;
echo $nom_carte;
echo $date_carte;
echo $code_secret;*/

//les variables ci-dessus sont bien reconnues

if ($db_found){
	$id=$_SESSION['id_medecin'];//
	$jour=$_SESSION['jour']; //
    $heure=$_SESSION['heure'];//
	$login=$_SESSION['login'];
	$email=$_SESSION['email'];
	$compteur=0;

	$sql = "SELECT * FROM `patient`";
  	$result = mysqli_query($db_handle, $sql);
  	while($data=mysqli_fetch_assoc($result)){
  		if($data['Nom']==$login){
  			if($data['E-mail']==$email){ 
				if($type_carte==$data['Type_Carte']){	
					
					if($num_carte==$data['Num_Carte']){
						
						if($nom_carte==$data['Nom_Carte']){
							
							if($date_carte==$data['Date_Expiration']){
								
								if($code_secret==$data['Code_Securite']){
									
									$sql = "INSERT INTO rdv_medecin(ID_Patient,ID_Medecin,Jour,Heure) VALUES ('".$_SESSION['ID_Patient']."','".$id."','".$jour."','".$heure."')";
								$res = mysqli_query($db_handle,$sql);
								$compteur++;
								}
							}
						}
	  				}
	  			}	
  			}
  			
  		}
  		
  	}
  	if($compteur==0){
  		echo "Problème de paiement!";
  		echo '<meta http-equiv="refresh" content="5;URL=recherche.php">';
  		echo "<br>";
  		echo "retour a la page de recherche dans 5s...";
  	}
  	else{
  		echo "Le paiement est OK!";
  		echo '<meta http-equiv="refresh" content="5;URL=recherche.php">';
  		echo "<br>";
  		echo "retour a la page de recherche dans 5s...";
  	}
}
?>