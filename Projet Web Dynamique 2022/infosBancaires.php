<?php
session_start();
//On identifie la base de donnees 
$database = "omnes_sante";
$type="patient";
//On s'y connecte
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$ID_Patient=$_SESSION['ID_Patient'];
///////////on teste toute les entrées possibles////////////////
if(!empty($_POST['type_carte']) && ($_POST['type_carte'] == 'Visa')){
			$type_carte="Visa";
		}
if(!empty($_POST['type_carte']) && ($_POST['type_carte'] == 'MasterCard')){
			$type_carte="MasterCard";
		}
if(!empty($_POST['type_carte']) && ($_POST['type_carte'] == 'American Express')){
			$type_carte="American Express";
		}
if(!empty($_POST['type_carte']) && ($_POST['type_carte'] == 'PayPal')){
			$type_carte="PayPal";
		}
///////////////////////////////////////////////////////////////
$numero_carte=isset($_POST["numero_carte"])? $_POST["numero_carte"] : "";
$nom_carte=isset($_POST["nom_carte"])? $_POST["nom_carte"] : "";
$date_carte=isset($_POST["date_carte"])? $_POST["date_carte"] : "";
$code_carte=isset($_POST["code_carte"])? $_POST["code_carte"] : "";

if ($db_found){
	//on cherche le patient dans notre bdd
	$sql = "SELECT * FROM `patient`";
	if($ID_Patient!=""){
		$sql .= " WHERE ID_Patient LIKE '$ID_Patient'";
	}
	$result = mysqli_query($db_handle, $sql);
	//regarder s'il y a des résultats
	if (mysqli_num_rows($result) != 0){
		//si le patient est dans la bdd
		//on modifie ses infos bancaires dans la bdd
		$sql='UPDATE `patient`SET Type_Carte = "'.$type_carte.'"WHERE ID_Patient ="'.$ID_Patient.'"';
		$result = mysqli_query($db_handle, $sql);
		$sql='UPDATE `patient`SET Num_Carte = "'.$numero_carte.'"WHERE ID_Patient ="'.$ID_Patient.'"';
		$result = mysqli_query($db_handle, $sql);
		$sql='UPDATE `patient`SET Nom_Carte = "'.$nom_carte.'"WHERE ID_Patient ="'.$ID_Patient.'"';
		$result = mysqli_query($db_handle, $sql);
		$sql='UPDATE `patient`SET Date_Expiration = "'.$date_carte.'"WHERE ID_Patient ="'.$ID_Patient.'"';
		$result = mysqli_query($db_handle, $sql);
		$sql='UPDATE `patient`SET Code_Securite = "'.$code_carte.'"WHERE ID_Patient ="'.$ID_Patient.'"';
		$result = mysqli_query($db_handle, $sql);	
		
	}
	//Lien vers la page suivante

  echo '<meta http-equiv="refresh" content="5;URL=patient.php">';
  echo "<br>";
  echo '<img src="happy.png" width="400px">';
  echo "<br>";
  echo "Vos informations bancaires sont bien sauvegardees!";
  echo "<br>";
  echo "Redirection vers votre page dans 5 secondes...";

}
?>