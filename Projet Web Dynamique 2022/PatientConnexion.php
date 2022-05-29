<?php

	//On identifie la base de donnees 
	$database = "omnes_sante";
	$type="patient";

	//On s'y connecte
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if (isset($_POST['submit2'])) {
		$login = isset($_POST["nom"])? $_POST["nom"] : "";
		$mail = isset($_POST["email"])? $_POST["email"] : "";

		$sql = "SELECT * FROM `patient`";
		$result = mysqli_query($db_handle, $sql);
		
		$arraylogin = array();
		$arraymail = array();
		$compteur = 0;

		while($data = mysqli_fetch_assoc($result))
		{
			$arraylogin[$compteur] = $data['Nom'];
			$arraymail[$compteur] = $data['E-mail'];
			$compteur = $compteur + 1;
		}

		//Verifier si $login est dans le tableau des utilisateurs
		$found = false;
		for($i = 0; $i < sizeof($arraylogin); $i++)
		{
			if ($arraylogin[$i] == $login) 
			{
				$found = true;
				$index = $i;
				break;
			}
		}

		//Si l'utilisateur est valide, vérifier son mail
		$connexion = false;
		if ($found) 
		{
				if ($arraymail[$index] == $mail) 
				{
					$connexion = true;
				} 
		}
		//Message
		if (!$found) 
		{
			echo "Connexion refusée. Utilisateur inconnu.";
			echo '<meta http-equiv="refresh" content="5;URL=PageLoginPatient.html">';
			echo "<br>";
			echo '<img src="mad.png" width="400px">';
			echo "<br>";
			echo "Retour à la page de connexion dans 5 secondes";
		}
		else 
		{
			if ($connexion) 
			{
				echo "Connexion reussi !";
				//On demarre une session
				
				session_start();

				$_SESSION['login'] = $_POST['nom'];
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['type'] = $type;

				$sql = "SELECT * FROM `patient`";
				$result = mysqli_query($db_handle, $sql);
				while ($data = mysqli_fetch_assoc($result)) {
					if($data['Nom']==$_SESSION['login']){
						if($data['E-mail']==$_SESSION['email']){
							echo "string";
							$_SESSION['Id_patient']= $data['ID_Patient'];
						}
					}
				}
				

				//requete sql de l'annee derniere...peut être utile peut être
				/*$sql = "SELECT Numerodetelephone FROM `acheteurs` WHERE Pseudo LIKE '%$login' AND MDP LIKE '%$pass'";
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);

				$_SESSION['numerotel'] = $data['Numerodetelephone'];*/

				//Lien vers la page suivante
				//ici on met accueil, mais on changera pour des pages méta
				echo '<meta http-equiv="refresh" content="5;URL=patient.php">';
				echo "<br>";
				echo '<img src="happy.png" width="400px">';
			echo "<br>";
				echo "Redirection vers votre page dans 5 secondes..";
			} 
			else 
			{
				echo "Connexion refusée. Mot de passe invalide.";
				echo '<meta http-equiv="refresh" content="5;URL=PageLoginPatient.html">';
				echo "<br>";
				echo '<img src="mad.png" width="400px">';
				echo "<br>";
				echo "Retour à la page de connexion dans 5 secondes";
			}
		}
		//fermer la connexion
		mysqli_close($db_handle);
	}
	else if (isset($_POST['submit1'])){
			$name=isset($_POST["Nom"])? $_POST["Nom"] : "";
			$prenom=isset($_POST["Prenom"])? $_POST["Prenom"] : "";
			$adress1=isset($_POST["Adress1"])? $_POST["Adress1"] : "";
			$adress2=isset($_POST["Adress2"])? $_POST["Adress2"] : "";
			$city=isset($_POST["Ville"])? $_POST["Ville"] : "";
			$postal=isset($_POST["CodePostal"])? $_POST["CodePostal"] : "";
			///////////on teste toute les entrées possibles////////////////
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'France')){
				$pays="France";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Allemagne')){
				$pays="Allemagne";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Italie')){
				$pays="Italie";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Royaume-Uni')){
				$pays="Royaume-Uni";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Espagne')){
				$pays="Espagne";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Portugal')){
				$pays="Portugal";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Belgique')){
				$pays="Belgique";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Suisse')){
				$pays="Suisse";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Grece')){
				$pays="Grece";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Autriche')){
				$pays="Autriche";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Hongrie')){
				$pays="Hongrie";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Pays-Bas')){
				$pays="Pays-Bas";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Slovenie')){
				$pays="Slovenie";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Croatie')){
				$pays="Croatie";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Dannemark')){
				$pays="Dannemark";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Suede')){
				$pays="Suede";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Etats-Unis')){
				$pays="Etats-Unis";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Canada')){
				$pays="Canada";
			}

			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Mexique')){
				$pays="Mexique";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Bresil')){
				$pays="Bresil";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Argentine')){
				$pays="Argentine";
			}

			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Perou')){
				$pays="Perou";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Cuba')){
				$pays="Cuba";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Japon')){
				$pays="Japon";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Chine')){
				$pays="Chine";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Inde')){
				$pays="Inde";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Mongolie')){
				$pays="Mongolie";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Turquie')){
				$pays="Turquie";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Russie')){
				$pays="Russie";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'kazakhstan')){
				$pays="kazakhstan";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Algerie')){
				$pays="Algerie";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Congo')){
				$pays="Congo";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Mali')){
				$pays="Mali";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Egypte')){
				$pays="Egypte";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Afrique du Sud')){
				$pays="Afrique du Sud";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Maroc')){
				$pays="Maroc";
			}
			if(!empty($_POST['Pays']) && ($_POST['Pays'] == 'Niger')){
				$pays="Niger";
			}
			////////////////////////////////////////////////////////////////
			$phone=isset($_POST["Tel"])? $_POST["Tel"] : "";
			$vital=isset($_POST["CarteVitale"])? $_POST["CarteVitale"] : "";
			$email=isset($_POST["Email"])? $_POST["Email"] : "";

			if ($db_found){
				//on cherche le patient dans notre bdd
				$sql = "SELECT * FROM `patient`";
				// avec son nom et son prenom
				if($name!=""){
					$sql .= " WHERE Nom LIKE '%$name%'";
				}
				if($prenom!=""){
					$sql .= " AND Prenom LIKE '%$prenom%'";
				}
				$result = mysqli_query($db_handle, $sql);
				//regarder s'il y a des résultats
			if (mysqli_num_rows($result) != 0) {
				//cet patient existe déjà dans notre BDD
				echo "vous etes deja inscrit apparement. <br>";
				//on rafraichit la page
				echo '<meta http-equiv="refresh" content="5;URL=PageLoginPatient.html">';
				echo "<br>";
				echo '<img src="mad.png" width="400px">';
				echo "<br>";
				echo "Reactualisation dans 5 secondes..";
			}else{
				//on ajoute ce patient dans notre BDD
				$sql = "INSERT INTO `patient`(`Nom`,`Prenom`,`Adresse1`,`Adresse2`,`Ville`,`Code_Postal`,`Pays`,`Tel`,`Carte_Vitale`,`E-mail`) VALUES ('$name','$prenom','$adress1','$adress2','$city','$postal','$pays','$phone','$vital','$email')";
				$result = mysqli_query($db_handle, $sql);
				echo "vous etes inscrit maintenant. <br>";
				//ici on met accueil
				echo '<meta http-equiv="refresh" content="5;URL=Accueil.php">';
				echo "<br>";
				echo '<img src="happy.png" width="400px">';
				echo "<br>";
				echo "Redirection vers l'accueil' dans 5 secondes..";
			}
		}
		else{
			echo "Database not found. <br>";
			//on rafraichit la page
				echo '<meta http-equiv="refresh" content="5;URL=PageLoginPatient.html">';
				echo "<br>";
				echo '<img src="mad.png" width="400px">';
				echo "<br>";
				echo "Reactualisation dans 5 secondes..";
		}
	//fermer la connexion
	mysqli_close($db_handle);
	}
?>