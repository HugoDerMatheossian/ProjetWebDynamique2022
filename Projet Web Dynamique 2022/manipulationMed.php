<?php 
	$database = "omnes_sante";
	$type="medecin";
	//On s'y connecte
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	//ajouter un medecin qui n'est pas dans notre bdd
	if (isset($_POST['button1'])) {
		$prenom=isset($_POST["Prenom"])? $_POST["Prenom"] : "";
		$nom=isset($_POST["Nom"])? $_POST["Nom"] : "";
		$salle=isset($_POST["Salle"])? $_POST["Salle"] : "";
		$tel=isset($_POST["Tel"])? $_POST["Tel"] : "";
		$mail=isset($_POST["Mail"])? $_POST["Mail"] : "";
		/*if (isset($_FILES['photo'])) {
			$photo = $_FILES['photo']['name'];//pb
		}*/
		///////////on teste toute les entrées possibles////////////////
		if(!empty($_POST['specialite']) && ($_POST['specialite'] == 'generaliste')){
				$specialite="Généraliste";
			}
		if(!empty($_POST['specialite']) && ($_POST['specialite'] == 'addictologue')){
				$specialite="Addictologue";
			}
		if(!empty($_POST['specialite']) && ($_POST['specialite'] == 'andrologue')){
				$specialite="Andrologue";
			}
		if(!empty($_POST['specialite']) && ($_POST['specialite'] == 'cardiologue')){
				$specialite="Cardiologue";
			}
		if(!empty($_POST['specialite']) && ($_POST['specialite'] == 'dermatologue')){
				$specialite="Dermatologue";
			}
		if(!empty($_POST['specialite']) && ($_POST['specialite'] == 'ghe')){
				$specialite="GHE";
			}
		if(!empty($_POST['specialite']) && ($_POST['specialite'] == 'gynecologue')){
				$specialite="Gynécologue";
			}
		if(!empty($_POST['specialite']) && ($_POST['specialite'] == 'ist')){
				$specialite="IST";
			}
		if(!empty($_POST['specialite']) && ($_POST['specialite'] == 'osteopathe')){
				$specialite="Ostéopathe";
			}
		///////////////////////////////////////////////////////////////
		if ($db_found) {
			//on cherche le medecin dans notre bdd
				$sql = "SELECT * FROM `medecin`";
				// avec son nom et son prenom
				if($nom!=""){
					$sql .= " WHERE Nom LIKE '%$nom%'";
				}
				if($prenom!=""){
					$sql .= " AND Prenom LIKE '%$prenom%'";
				}
				$result = mysqli_query($db_handle, $sql);
				//regarder s'il y a des résultats
				if (mysqli_num_rows($result) != 0) {
					//cet patient existe déjà dans notre BDD
					echo "ce medecin est deja inscrit apparement. <br>";
					//on rafraichit la page
					echo '<meta http-equiv="refresh" content="2;URL=GererMedecins.php">';
					echo "<br>";
					echo '<img src="mad.png" width="400px">';
					echo "<br>";
					echo "Reactualisation dans 2 secondes..";
				}else{
					//on ajoute ce medecin dans notre BDD
					$sql = "INSERT INTO `medecin`(`Nom`, `Prenom`, `Specialite`, `Salle`, `Tel`,`E-mail`) VALUES ('$nom','$prenom','$specialite','$salle','$tel','$mail')";
					$result = mysqli_query($db_handle, $sql);
					echo "ce medecin est inscrit maintenant. <br>";
					echo '<meta http-equiv="refresh" content="5;URL=GererMedecins.php">';
					echo "<br>";
					echo '<img src="happy.png" width="400px">';
					echo "<br>";
					echo "Redirection vers la page de gestion dans 5 secondes..";
				}
			}
			else{
			echo "Database not found. <br>";
			//on rafraichit la page
				echo '<meta http-equiv="refresh" content="5;URL=GererMedecins.php">';
				echo "<br>";
				echo '<img src="mad.png" width="400px">';
				echo "<br>";
				echo "Reactualisation dans 5 secondes..";
			}
		//fermer la connexion
		mysqli_close($db_handle);
	}
	//supprimer un medecin
	else if(isset($_POST['button2'])) {
		if ($db_found){
			//on cherche le medecin dans notre bdd
			$sql = "SELECT * FROM `medecin`";
			// avec son nom et son prenom
			if($nom!=""){
				$sql .= " WHERE Nom LIKE '%$nom%'";
			}
			if($prenom!=""){
				$sql .= " AND Prenom LIKE '%$prenom%'";
			}
			$result = mysqli_query($db_handle, $sql);
			//regarder s'il y a des résultats
			if (mysqli_num_rows($result) != 0){
				//le medecin existe dans notre BDD
				//on supprime ce vendeur dans notre BDD
				$sql = "DELETE FROM `medecin` WHERE (Prenom LIKE '%$prenom' ) AND ( Nom LIKE '%$nom' ) ";
				mysqli_query( $db_handle , $sql );
			    echo "ce vendeur s'est fait supprimer. <br>";
			    echo '<meta http-equiv="refresh" content="5;URL=GererMedecins.php">';
				echo "<br>";
				echo '<img src="happy.png" width="400px">';
				echo "<br>";
				echo "Redirection vers la page de gestion dans 5 secondes..";
			}
			else{
				//le medecin n'existe pas dans notre BDD
				echo "ce vendeur n'existe pas, on ne peut donc pas le supprimer. <br>";
				//on rafraichit la page
				echo '<meta http-equiv="refresh" content="5;URL=GererMedecins.php">';
				echo "<br>";
				echo '<img src="mad.png" width="400px">';
				echo "<br>";
				echo "Reactualisation dans 5 secondes..";
			}
		}
		else{
			echo "Database not found. <br>";
			//on rafraichit la page
			echo '<meta http-equiv="refresh" content="5;URL=GererMedecins.php">';
			echo "<br>";
			echo '<img src="mad.png" width="400px">';
			echo "<br>";
			echo "Reactualisation dans 5 secondes..";
		}
		//fermer la connexion
		mysqli_close($db_handle);
	}
?>