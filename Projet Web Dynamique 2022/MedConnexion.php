<?php

	$login = isset($_POST["nom"])? $_POST["nom"] : "";
	$mail = isset($_POST["email"])? $_POST["email"] : "";

	//On identifie la base de donnees 
	$database = "omnes_sante";
	$type="medecin";

	//On s'y connecte
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	$sql = "SELECT * FROM `medecin`";
	$result = mysqli_query($db_handle, $sql);
	
	$arraylogin = array();
	$arraymail = array();
	$compteur = 0;

	while($data = mysqli_fetch_assoc($result))
	{
		$arraylogin[$compteur] = $data['Nom'];
		$arraymail[$compteur] = $data['E-mail'];//////////
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
		echo '<meta http-equiv="refresh" content="5;URL=PageLoginMedecin.html">';
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

			$sql = "SELECT Prenom FROM `medecin` WHERE Nom LIKE '%$login' AND 'E-mail' LIKE '%$mail'";
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			$_SESSION['prenom'] = $data['Prenom'];
			$sql = "SELECT Specialite FROM `medecin` WHERE Nom LIKE '%$login' AND 'E-mail' LIKE '%$mail'";
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			$_SESSION['specialite'] = $data['Specialite'];
			$sql = "SELECT Salle FROM `medecin` WHERE Nom LIKE '%$login' AND 'E-mail' LIKE '%$mail'";
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			$_SESSION['salle'] = $data['Salle'];
			$sql = "SELECT Tel FROM `medecin` WHERE Nom LIKE '%$login' AND 'E-mail' LIKE '%$mail'";
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			$_SESSION['tel'] = $data['Tel'];
			$sql = "SELECT ID_Medecin FROM `medecin` WHERE Nom LIKE '%$login' AND 'E-mail' LIKE '%$mail'";
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			$_SESSION['Id'] = $data['ID_Medecin'];
			$sql = "SELECT PDP FROM `medecin` WHERE Nom LIKE '%$login' AND 'E-mail' LIKE '%$mail'";
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			$_SESSION['photo'] = $data['PDP'];


			//Lien vers la page suivante

			echo '<meta http-equiv="refresh" content="5;URL=Med.php">';
			echo "<br>";
			echo '<img src="happy.png" width="400px">';
			echo "<br>";
			echo "Redirection vers l'accueil' dans 5 secondes...";
		} 
		else 
		{
			echo "Connexion refusée. Mot de passe invalide.";
			echo '<meta http-equiv="refresh" content="5;URL=PageLoginMedecin.html">';
			echo "<br>";
			echo '<img src="mad.png" width="400px">';
			echo "<br>";
			echo "Retour à la page de connexion dans 5 secondes";
		}
	}
?>